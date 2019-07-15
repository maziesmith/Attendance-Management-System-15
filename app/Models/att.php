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
                  'hours',
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
    

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
    }

    
    public function getCreatedAtAttribute($value)
    {
        return \DateTime::createFromFormat('j/n/Y g:i A', $value);

    }

   
    public function getDateAttribute($value)
    {
        return \DateTime::createFromFormat('j/n/Y g:i A', $value);

    }
}
