<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table__course__s__students extends Model
{   protected $table = 'table__course__s__students';
    protected $primaryKey = 'id';

    protected $fillable = [
                  'id',
                  'code',
                  'name',
                  'credit',
                  'Level',
                  'Lecture_id',
                  'L_name'
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
