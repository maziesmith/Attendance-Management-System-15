<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tblstudents extends Model
{

    public $timestamps = false;
 
    protected $table = 'tblstudents';

    protected $primaryKey = 'id';

    protected $fillable = [
                  'Level',
                  'RegistrationNo',
                  'Name',
                  'Email',
                  'TelephoneNo'
              ];

  
    protected $dates = [];
  
    protected $casts = [];

}
