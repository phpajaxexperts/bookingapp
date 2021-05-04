<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class booking extends Model
{
    protected $primaryKey = 'ID';
    protected $table = 'booking';

    protected $fillable = ['service','customer_name','city','status','date','available_date','available_time','address'];
    //public $timestamps = false;
}
