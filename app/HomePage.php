<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomePage extends Model
{
  use SoftDeletes;
  protected $fillable = [
      'name','email','profile_pic','phone','age' ,'freelance','address','description_one','description_two','facebook' ,'twitter','skype','linkedin','stack','github','status'
  ];

  protected $dates = ['deleted_at '];
}
