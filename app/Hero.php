<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
  public $fillable = ['image'];
    
    protected $table = 'hero';
}