<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    //This is the example of a query scope, a query scope is a wrapper around a particular query
    public function scopeIncomplete($query){

    	return $query->where('completed', 0);

    }
}
