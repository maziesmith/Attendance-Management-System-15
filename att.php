<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class att extends Model
{
    
    public $timestamps = false;
   
    protected $table = 'atts';

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
                  'hours1',
                  'attend_mark1',
                  'precentage1'
                  
                  
              ];

   
    protected $dates = [];
    
  
    protected $casts = [];
    

}
