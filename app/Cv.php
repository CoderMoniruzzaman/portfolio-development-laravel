<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'name', 'file','file_status'
  ];
  protected $dates = ['deleted_at '];
  
}
