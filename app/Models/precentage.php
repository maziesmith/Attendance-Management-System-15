<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class precentage extends Model
{

    public $timestamps = false;
 
    protected $table = 'precentages';

    protected $primaryKey = 'id';

    protected $fillable = [
                  'Level',
                  'precentage'
                
              ];

  
    protected $dates = [];
  
    protected $casts = [];

}