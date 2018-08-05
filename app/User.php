<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   protected $fillable = ['name'];


   public function roles(){
       return $this->belongsToMany('App\Role','role_user','user_id','role_id');
   }
}
