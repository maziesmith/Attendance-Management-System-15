<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class atts_4s extends Model
{
 
    public $timestamps = false;
 
    protected $table = 'atts_4s';


    protected $primaryKey = 'id';

    
    protected $fillable = [
                  'Reg_No',
                  'name',
                  'nooflectures',
                  'lectureattend',
                  'hours',
                  'precentage',
                  'attend_mark',
                  'nooflectures1',
                  'lectureattend1',
                  'hours1',
                  'attend_mark1',
                  'precentage1',
                  'nooflectures2',
                  'lectureattend2',
                  'hours2',
                  'precentage2',
                  'attend_mark2',
                  'nooflectures3',
                  'lectureattend3',
                  'hours3',
                  'precentage3',
                  'attend_mark3',
                  'nooflectures4',
                  'lectureattend4',
                  'hours4',
                  'precentage4',
                  'attend_mark4',
                  'nooflectures5',
                  'lectureattend5',
                  'hours5',
                  'precentage5',
                  'attend_mark5',
                  'nooflectures6',
                  'lectureattend6',
                  'hours6',
                  'precentage6',
                  'attend_mark6',
                  'nooflectures7',
                  'lectureattend7',
                  'hours7',
                  'precentage7',
                  'attend_mark7',
                  'subcode',
                  'subcode1',
                  'subcode2',
                  'subcode3',
                  'subcode4',
                  'subcode5',
                  'subcode6',
                  'subcode7'
              ];

    protected $dates = [];
  
    protected $casts = [];
    

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
    }

    
    public function getCreatedAtAttribute($value)
    {
        return \DateTime::createFromFormat('j/n/Y g:i A', $value);

    }
    
  
}
