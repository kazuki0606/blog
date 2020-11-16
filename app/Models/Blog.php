<?php

namespace App\Models;

/* 
このコードが重要
use Illuminate\Database\Eloquent\Factories\HasFactory; 

*/
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
/* 
このコードが重要

use HasFactory;

*/

    use HasFactory;

 protected $table='blogs';
 
protected $fillable=[
    'title',
    'content'
];

}