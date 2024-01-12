<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table ="products";
    protected $fillable = ['ProductID','CategoryID','Name','Price','Image','Description','ManufacturerID'];
    protected $primaryKey = 'ProductID';
   
}
