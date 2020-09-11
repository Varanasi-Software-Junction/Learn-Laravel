<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   protected $primaryKey = 'bookno';
protected $table= 'book';
protected $fillable = ['bookname','subject','price'];
}
