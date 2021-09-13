<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;
use Laravel\Passport\HasApiTokens;
use App\Role;
use App\Lga;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    use SoftDeletes;





    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded =[];
//    protected $fillable = [
//        'name', 'email', 'password', 'phone', 'userable_id', 'userable_type'
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];



    /**
     * List of morphable types
     *
     * @var array
     */
    /*protected $types = [
        'agent' => 'App\Agent',
        'admin' => 'App\Admin'
    ];*/

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userable(){
        return $this->morphTo();
    }

    public function setPasswordAttribute($value){
        return $this->attributes['password'] = bcrypt($value);
    }

    public function findForPassport($identifier)
    {
        return $this->where('phone', $identifier)
            ->orWhere('email', $identifier)
            ->first();
    }

    public function role(){

    return $this->belongsTo(Role::class);
}

    public function lga(){

        return $this->belongsTo(Lga::class);
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function permissions(){
        //return $this->belongsToMany(Permission::class,User::class,'permission_id','userable_id')->withTimestamps();
        return $this->belongsToMany(Permission::class)->withTimestamps();

    }




    /*public function getUserableTypeAttribute($type) {
        // Illuminate/Database/Eloquent/Model::morphTo checks for null in order
        // to handle eager-loading relationships
        if(!$type) {
            return null;
        }

        // transform to lower case
        $type = strtolower($type);

        // to make sure this returns value from the array
        return Arr::get($this->types, $type, $type);
        //return array_get($this->types, $type, $type);

        // which is always safe, because new 'class'
        // will work just the same as new 'Class'
    }*/


}
