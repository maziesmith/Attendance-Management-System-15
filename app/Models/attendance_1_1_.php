<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attendance_1_1_ extends Model
{
    public $timestamps = false;
  
    protected $table = 'attendance_1_1_s';

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

