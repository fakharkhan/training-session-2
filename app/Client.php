<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
        protected $fillable =['name','phone','email','city_id'];


        public function city()
        {
//            return $this->belongsTo('City');

            return $this->belongsTo(City::class);

        }
}
