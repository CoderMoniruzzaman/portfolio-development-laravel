<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $fillable = ['readstatus'];
  protected $dates = ['created_at'];
}
