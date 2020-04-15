<?php

namespace App\models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
  protected $table = 'sub_categories';
  protected $primaryKey = 'id';
  public $increment = false;


  public function categories()
  {
    return $this->belongsTo(Category::class);
  }
}
