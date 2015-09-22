<?php

/**
 * This file defines the fields in Task class
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /*
     * Fillable fields
    */
    protected $fillable = [
    	'title',
    	'description'
    ];
}
