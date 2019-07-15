<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class atts_1gs extends Model
{
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'atts_1gs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
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
                  
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    


    /**
     * Get created_at in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getCreatedAtAttribute($value)
    {
        return \DateTime::createFromFormat('j/n/Y g:i A', $value);

    }

}
