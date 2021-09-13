<?php

namespace App\Listeners;

use App\Events\RevenueAdded;
use App\Revenue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RevenueCollection// implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(RevenueAdded $event)
    {
        //append and send sector, customer info, service, amount, transaction ref,
        $revenue = $event->revenue;
        $data = [
            'reference' => $revenue->transaction_reference,
            'amount' => $revenue->amount,
            'payment_type' => $revenue->payment_type,
            'category' => [
                'state' => $revenue->market->state_id,
                'lga' => $revenue->market->lga_id,
                'zone' => '',//probe
                'sector' => 'informal',//informal or formal
                'field' => 'Market', //market, education, military
                'service' => $revenue->service->name
            ],
            'customer' => [
                'name' => $revenue->customer->name,
                'phone' => $revenue->customer->phone,
                'email' => '',//optional
            ],
            'invoice' => $revenue->invoice,
            'transaction_date' => $revenue->created_at
        ];

        //make post request to revenue API
        $response = $this->post($data);
        //return get response from revenue API (GENERATABLES)
        if($response['status'] == 'success') {
            //return $response->data;
            $revenue = Revenue::where('id', $revenue->id);
            $revenue->update([
                'status' => $response['data']['status'],
                //'invoice' => $response['data']['_id'],
            ]);
            //return $response['data'];
        }else {
            //return $response->message;
        }
    }

    public function post($data){
        $url = env('REVENUE_API_URL').'/api/revenue/collection';
        $ch = curl_init($url);
        //$data = ['name'=>'Hardik', 'email'=>'itsolutionstuff@gmail.com'];
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type:application/json',
            'Api-Token: '.env('REVENUE_API_TOKEN'),
            //"Authorization: Bearer ".env('REVENUE_API_TOKEN')
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result, true);
    }
}
