<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table__course__g__student extends Model
{
    protected $table = 'table__course__g__students';

    protected $primaryKey = 'id';

    protected $fillable = [
                  'code',
                  'name',
                  'credit',
                  'Level',
                  'Lecture_id'
              ];

    protected $dates = [];
 
    protected $casts = [];
    

    public function getCreatedAtAttribute($value)
    {
        return \DateTime::createFromFormat('j/n/Y g:i A', $value);

    }


    public function getUpdatedAtAttribute($value)
    {
        return \DateTime::createFromFormat('j/n/Y g:i A', $value);

    }

}
