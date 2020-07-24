<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class product extends Model
{
  use SoftDeletes;
 protected $fillable = [
     'name','Product_description','product_image','slider_image','product_link','product_video_link'
 ];
 protected $dates = ['deleted_at '];

 function ralationcategory(){
     return $this->hasOne('App\Category', 'id', 'category_id');
   }

  // function onetomanyralationwithproductsliderimage(){
  //    return $this->hasMany('App\ProductSliderImage', 'product_id', 'id');
  //  }
}
