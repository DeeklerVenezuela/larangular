<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "user_prf";
    
    /*mass assignable*/
    protected $fillable = [
        'name'
    ];

    // protected $hidden = [];
    public function User(){
        return $this->belongsTo('User');
    }

}
