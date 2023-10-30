<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table="tbl_person";
    protected $fillable=[
        'id',
        'name',
        'edad'
    ];
    public $timestamps=false;
}
