<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([

            [ 'code'=>'5001-01','name' => 'Hawkers/Equators Licence Fees','price' => 200,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>1,
                'location'=>''
            ],
            [ 'code'=>'5001-02','name' => 'Market Fees','price' => 50,'frequency'=>'Daily',
                'sub_category'=>'Market', 'other_category'=>'Market','category_id'=>1,
                'location'=>''
            ],
            [ 'code'=>'5001-03','name' => 'Motor Park Fee','price' => 50,'frequency'=>'',
                'sub_category'=>'Market', 'other_category'=>'Motor Park','category_id'=>1,
                'location'=>''
            ],
            [ 'code'=>'5001-04','name' => 'Shopping Centre Fee','price' => 500,'frequency'=>'Monthly',
                'sub_category'=>'Market', 'other_category'=>'Market','category_id'=>1,
                'location'=>''
            ],
            [ 'code'=>'5001-05','name' => 'Shop Fee','price' => 200,'frequency'=>'Monthly',
                'sub_category'=>'Market', 'other_category'=>'Market','category_id'=>1,
                'location'=>''
            ],
            [ 'code'=>'5001-06','name' => 'Advertisement Signboard Licence','price' => 0,'frequency'=>'',
                'sub_category'=>'Advertisement Signages', 'other_category'=>'','category_id'=>1,
                'location'=>''
            ],
            [ 'code'=>'5001-07','name' => 'Kiosk Licence','price' => 2000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>1,
                'location'=>''
            ],
            [ 'code'=>'5001-08','name' => 'Hawkers Permit','price' => 0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>1,
                'location'=>''
            ],
            [ 'code'=>'5001-09','name' => 'Tent on Sea/Beach Permit','price' => 5000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>1,
                'location'=>''
            ],
            [ 'code'=>'5001-10','name' => 'Petty Traders Licence','price' => 1000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>1,
                'location'=>''
            ],
            [ 'code'=>'5001-11','name' => 'Trade Permit Licence','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>1,
                'location'=>''
            ],
            [ 'code'=>'5001-12','name' => 'Restaurant Licence','price' => 3000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>1,
                'location'=>''
            ],
            [ 'code'=>'5001-13','name' => 'Sheep Dealer','price' => 1000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>1,
                'location'=>''
            ],
            [ 'code'=>'5001-14','name' => 'Vault Licence','price' => 1500,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>1,
                'location'=>''
            ],
            [ 'code'=>'5001-15','name' => 'Auctioneer Licence','price' => 5000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>1,
                'location'=>''
            ],


            [ 'code'=>'5002-01','name' => 'Boat & Canoe Licence','price' => 300,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-02','name' => 'Dog Licence','price' => 500,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-03','name' => 'Abbattoir House Fee','price' => 500,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-04','name' => 'Eating House Fee','price' => 5000,'frequency'=>'Monthly',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-05','name' => 'Registration of Meat Van','price' => 2000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-06','name' => 'Dried Fish/Meat Licence','price' => 2000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-07','name' => 'Cold Room Licence','price' => 2000,'frequency'=>'Monthly',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-08','name' => 'Cattle Dealer Licence','price' => 2000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-09','name' => 'Butcher Licence','price' => 1500,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-10','name' => 'Slaughter Fee','price' => 50,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-11','name' => 'Impounding of Animals','price' =>100,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-12','name' => 'Pest Control Registration Charge','price' => 500,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'Control Post','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-13','name' => 'Agriculture/Vertinary Fees','price' => 0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-14','name' => 'Inspection Fees','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-15','name' => 'Modern Bakery Fee','price' => 3000,'frequency'=>'Monthly',
                'sub_category'=>'', 'other_category'=>'','category_id'=>2,
                'location'=>''
            ],

            [ 'code'=>'5002-16','name' => 'Timber & Forest Fee','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Control Post','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-17','name' => 'Sand Digging Licence','price' => 0,'frequency'=>'',
                'sub_category'=>'Sand Digging', 'other_category'=>'Control Post','category_id'=>2,
                'location'=>''
            ],

            [ 'code'=>'5002-18','name' => 'Dislodging of Septic Tank Licence','price' =>2000,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>2,
                'location'=>''
            ],

            [ 'code'=>'5002-19','name' => 'Night Soil Disposal Licence','price' =>500,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-20','name' => 'Cattle Market Receipt','price' =>200,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-21','name' => 'Sheep Market Receipt','price' =>50,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-22','name' => 'Registration of Surface Tank','price' => 1000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-23','name' => 'Registration of Night Soil','price' => 1000,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-24','name' => 'Tractor Licence Fee','price' => 10000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-25','name' => 'Forestry /Fuel Exploitation Fine','price' => 10000,'frequency'=>'',
                            'sub_category'=>'', 'other_category'=>'Control Post','category_id'=>2,
                            'location'=>''
            ],
            [ 'code'=>'5002-26','name' => 'Felling Of Trees (Timber Sell)','price' => 10000,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Control Post','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-27','name' => 'Saw-Mill Licence','price' => 2000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-28','name' => 'Rice/Millets/Cassava Grinding','price' => 100,'frequency'=>'Monthly',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-29','name' => 'Produce Dealers Licence','price' => 1000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-30','name' => 'Ingredient Mill License','price' => 600,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-31','name' => 'Corn Grinding Mill Licence ','price' => 1000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-32','name' => 'Brown Sugar Machine Licence','price' => 2000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-33','name' => 'Community Poll Tax','price' => 500,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Control Post','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-34','name' => 'Development Levy','price' => 500,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Control Post','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-35','name' => 'Cattle Tax','price' => 200,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],
            [ 'code'=>'5002-36','name' => 'Arrears in Cattle Tax','price' => 1000,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>2,
                'location'=>''
            ],



            [ 'code'=>'5003-01','name' => 'Towing of Vehicles','price' => 500,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-02','name' => 'Bicycles Fee','price' => 200,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-03','name' => 'Library Overdue Book Fee','price' => 50,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-04','name' => 'Car/Truck Licence','price' => 1500,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-05','name' => 'Bus/Commercial Vehicle Demurage Charges','price' => 600,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-06','name' => 'Total Gate Fees (Road Block)','price' =>50,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-07','name' => 'GSM Repair Licence','price' => 2000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-08','name' => 'Car Wash Licence','price' => 1000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-09','name' => 'Equipment Hiring Fee','price' =>0,'frequency'=>'',
                'sub_category'=>'Equipment Hiring Fee', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-10','name' => 'Mass Transit Hiring','price' =>0,'frequency'=>'',
                'sub_category'=>'Mass Transit Hiring', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-11','name' => 'L.G commercial Vehicles Sticker','price' => 1200,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-12','name' => 'Motorcycle Sticker','price' =>200,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-13','name' => 'Minor Industries Fee','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-14','name' => 'Land Gravel/Iron Sellers Fee','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-15','name' => 'Spraying/Writing','price' => 2000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-16','name' => 'Photo Studio Licence Fee','price' => 1000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-17','name' => 'Welding Machine Licence','price' => 2000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-18','name' => 'Electrical /Radio/Television Workshop Licence','price' => 500,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-19','name' => 'Blacksmith Workshop','price' =>300,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-20','name' => 'Wood Making Carpentry Licence','price' => 1200,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-21','name' => 'Battery Charger Licence','price' =>500,'frequency'=>'Monthly',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-22','name' => 'Brickmaking Licence','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-23','name' => 'Borehole Drilling Licence','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-24','name' => 'Printing Press Licence','price' => 10000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-25','name' => 'Panel Beater Licence','price' => 10000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-26','name' => 'Vulcanizer Licence','price' => 2000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-27','name' => 'Clock Repairer Licence','price' =>500,'frequency'=>'Monthly',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-28','name' => 'Clock Dye Licence','price' => 2000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-29','name' => 'Vehicle Spare Parts Licence','price'=> 6000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-30','name' => 'Registration Of Laundry Cleaner','price' =>500,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-31','name' => 'Building Material Sellers Licence','price' => 6000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-32','name' => 'Surface Tank Kerosene, Gas & Petrol Licence ','price' =>2500,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-33','name' => 'Photostat/Typing Machine Licence ','price' => 2000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-34','name' => 'Block Making Machine Licence','price' => 6000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-35','name' => 'Sewing Institution Licence','price' => 1000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-36','name' => 'Hair Dressing / Barbing /Plating','price' => 1000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-37','name' => 'Motor Mechanic Licence','price' => 6000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-38','name' => 'Building Registration Licence','price' =>0.02,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-39','name' => 'Workshop Receipt','price' =>500,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-40','name' => 'Sales Of Unserviceable Goods Store Licence','price' => 2000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-41','name' => 'Hire Changes Licence','price' =>500,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-42','name' => 'Sales Of Store/Miscellaneous','price' =>0.02,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-43','name' => 'Survey Licence Fee','price' => 1000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-44','name' => 'Mortgage Sublease Licence ','price' => 1000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-45','name' => 'Customer Right Certificate Licence','price' =>500,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-46','name' => 'Commission On Sales Of Plot, House And Farm Land','price' => 5000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-47','name' => 'Certificate Of Occupancy','price' => 5000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-48','name' => 'Local Hair Barbing /Plaiting Licence','price' =>200,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-49','name' => 'Bovey Charging Fan','price' =>300,'frequency'=>'Monthly',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-50','name' => 'Wharf Randing Fee','price' =>20,'frequency'=>'Week',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-51','name' => 'Goldsmith/Cold Settler','price' =>500,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-52','name' => 'Photostating Machine','price' =>3000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-53','name' => 'Modern Bakery Fee','price' => 3000,'frequency'=>'Monthly',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-54','name' => 'Rent of Local Government Quarters','price' =>0,'frequency'=>'',
                'sub_category'=>'Rent of Local Government Quarters', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-55','name' => 'Rent of Local Government Quarters','price' =>0,'frequency'=>'',
                'sub_category'=>'Rent of Local Government Quarters', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-56','name' => 'Rent of Local Government  Property','price' =>0,'frequency'=>'',
                'sub_category'=>'Rent of Local Government  Property ', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-57','name' => 'Sheep Market Receipt','price' =>50,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-58','name' => 'Cattle Market Receipt','price' =>200,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'Market','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-59','name' => 'Prooced from sale of Old goods','price' =>0.02,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-60','name' => 'Undertaking tractorshiring unit','price' => 10000,'frequency'=>'Daily',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-61','name' => 'Earnings from Industry Undertaking','price' => 12000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-62','name' => 'Tipper/Lorry 10 tyre','price' => 80000,'frequency'=>'Weekly',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-63','name' => 'Market Stall Fee','price' =>50,'frequency'=>'Daily',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-64','name' => 'Food Crops (Millet guiner corn/maize) Per Bag Fee','price' =>100,'frequency'=>'Daily',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-65','name' => 'Cash crops (Groundnut/beans/soya beans/pepper/beans seed) Per Bag Fee','price' =>200,'frequency'=>'Daily',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],
            [ 'code'=>'5003-66','name' => 'Petty Traders Fee','price' =>50,'frequency'=>'Weekly',
                'sub_category'=>'', 'other_category'=>'','category_id'=>3,
                'location'=>''
            ],


            [ 'code'=>'5004-01','name' => 'Trade Union Fees','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>4,
                'location'=>''
            ],
            [ 'code'=>'5004-02','name' => 'Association Fees','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>4,
                'location'=>''
            ],
            [ 'code'=>'5004-03','name' => 'Attestation Of Bachelorhood & Spinsterhood Fes','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>4,
                'location'=>''
            ],
            [ 'code'=>'5004-04','name' => 'Divorce Fee','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>4,
                'location'=>''
            ],
            [ 'code'=>'5004-05','name' => 'Entertainment/Drumming Permit','price' =>200,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>4,
                'location'=>''
            ],
            [ 'code'=>'5004-06','name' => 'Radio/Television Licence','price' =>1000,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>4,
                'location'=>''
            ],
            [ 'code'=>'5004-07','name' => 'Birth and Death Registration','price' =>100,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>4,
                'location'=>''
            ],
            [ 'code'=>'5004-08','name' => 'Burial Fee','price' =>100,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>4,
                'location'=>''
            ],


            [ 'code'=>'5005-01','name' => 'Bake/Cigarette Fee ','price' =>300,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>5,
                'location'=>''
            ],
            [ 'code'=>'5005-02','name' => 'Modern Bake House Licence','price' =>7000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>5,
                'location'=>''
            ],
            [ 'code'=>'5005-03','name' => 'Native Cigarette Licence Fee','price' =>100,'frequency'=>'Weekly',
                'sub_category'=>'', 'other_category'=>'','category_id'=>5,
                'location'=>''
            ],
            [ 'code'=>'5005-04','name' => 'Laboratory Test Fee','price' =>100,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>5,
                'location'=>''
            ],
            [ 'code'=>'5005-05','name' => 'Dispensary/Maternity Fee','price' =>5000,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>5,
                'location'=>''
            ],
            [ 'code'=>'5005-06','name' => 'Environmental Sanitation','price' =>1000,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>5,
                'location'=>''
            ],
            [ 'code'=>'5005-07','name' => 'Modern Baker','price' =>3000,'frequency'=>'Annual',
                'sub_category'=>'', 'other_category'=>'','category_id'=>5,
                'location'=>''
            ],


            [ 'code'=>'5006-01','name' => 'Operating Surplus','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>6,
                'location'=>''
            ],
            [ 'code'=>'5006-02','name' => 'Other Investment Income','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>6,
                'location'=>''
            ],
            [ 'code'=>'5006-03','name' => 'Dividend Received','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>6,
                'location'=>''
            ],
            [ 'code'=>'5006-04','name' => 'Motor Vehicle Advances','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>6,
                'location'=>''
            ],
            [ 'code'=>'5006-05','name' => 'Refurbishing Loan','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>6,
                'location'=>''
            ],
            [ 'code'=>'5006-06','name' => 'Interest On Housing Loan','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>6,
                'location'=>''
            ],
            [ 'code'=>'5006-07','name' => 'Bank Interest','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>6,
                'location'=>''
            ],
            [ 'code'=>'5006-08','name' => 'Gains On Foreign Exchange','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>6,
                'location'=>''
            ],



            [ 'code'=>'5007-01','name' => 'Tenement Rate - Community Building','price' =>0.05,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>7,
                'location'=>''
            ],
            [ 'code'=>'5007-02','name' => 'Tenement Rate - FG Building','price' =>0.1,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>7,
                'location'=>''
            ],
            [ 'code'=>'5007-03','name' => 'Ground Rent','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>7,
                'location'=>''
            ],
            [ 'code'=>'5007-04','name' => 'Urban/Rural Water Bill','price' =>100,'frequency'=>'Monthly',
                'sub_category'=>'', 'other_category'=>'','category_id'=>7,
                'location'=>''
            ],


            [ 'code'=>'5008-01','name' => 'Contract Registration','price' =>0,'frequency'=>'',
                'sub_category'=>'Contract Registration', 'other_category'=>'','category_id'=>8,
                'location'=>''
            ],
            [ 'code'=>'5008-02','name' => 'General Contractor Registration','price' =>0,'frequency'=>'',
                'sub_category'=>'General Contractor Registration', 'other_category'=>'','category_id'=>8,
                'location'=>''
            ],
            [ 'code'=>'5008-03','name' => 'Tenders Fees ','price' =>5000,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>8,
                'location'=>''
            ],
            [ 'code'=>'5008-04','name' => 'Indigene Certificate','price' =>200,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>8,
                'location'=>''
            ],
            [ 'code'=>'5008-05','name' => 'Registration Of Voluntary Organisations','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>8,
                'location'=>''
            ],
            [ 'code'=>'5008-06','name' => 'Cinematography Licences','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>8,
                'location'=>''
            ],
            [ 'code'=>'5008-07','name' => 'Court Summons Fee','price' =>0,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>8,
                'location'=>''
            ],
            [ 'code'=>'5008-08','name' => 'Marriage Registration ','price' =>500,'frequency'=>'',
                'sub_category'=>'', 'other_category'=>'','category_id'=>8,
                'location'=>''
            ],






















        ]);
    }
}
