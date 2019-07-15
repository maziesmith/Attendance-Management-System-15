<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table_Lecture extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'table__lectures';

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
    protected $fillable = ['name', 'Telephone_No', 'Email'];

    
}
