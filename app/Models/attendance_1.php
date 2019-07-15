<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attendance_1 extends Model
{
    public $timestamps = false;
  
    protected $table = 'attendance_1s';

    protected $primaryKey = 'id';

    protected $fillable = [
                  'Subjectcode',
                  'Reg_No',
                  'name',
                  'nooflectures',
                  'lectureattend',
                  'precentage'
              ];

    protected $dates = [];

    protected $casts = [];
    



}
