<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class att4m extends Model
{
    public $timestamps = false;
   
    protected $table = 'atts_3s';

    protected $primaryKey = 'id';

    protected $fillable = [
                  'Subjectcode',
                  'Reg_No',
                  'name',
                  'nooflectures',
                  'lectureattend',
                  'Start_Time',
                  'End_Time',
                  'hours',
                  'hall',
                  'date',
                  'attend_mark',
                  'precentage',
                  'nooflectures1',
                  'lectureattend1',
                  'Start_Time1',
                  'End_Time1',
                  'hours1',
                  'hall1',
                  'date1',
                  'attend_mark1',
                  'precentage1'
                  
              ];

   
    protected $dates = [];
    
  
    protected $casts = [];
    
}
