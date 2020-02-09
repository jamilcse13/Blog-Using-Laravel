<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiModel extends Model
{
    protected $table = "apis";
    public $timestamps = false;

    protected $fillable = [
    	'country',
    	'continent',
    	'ranking',
    	'language',
    	'craeted_at',
    	'updated_at',
    ];
}
