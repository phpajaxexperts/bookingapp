<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class services extends Model
{
    protected $primaryKey = 'ID';
    protected $table = 'services';

    protected $fillable = ['title','caption','description','session_type','price','image'];
    //public $timestamps = false;
}
