<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attendance_1g extends Model
{
   
    public $timestamps = false;
   
    protected $table = 'attendance_1gs';

   
    protected $primaryKey = 'id';

    
    protected $fillable = [
                  'Subjectcode',
                  'RegistationNO',
                  'name',
                  'nooflectures',
                  'lectureattend',
                 // 'precentage'
              ];

    
    protected $dates = [];
 
    protected $casts = [];
    

    public function getCreatedAtAttribute($value)
    {
        return \DateTime::createFromFormat('j/n/Y g:i A', $value);

    }

}
