<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'categories';
  protected $primaryKey = 'id';
  public $incrementing = false;

  protected $fillable = [];

  protected $dates = [
    'created_at',
    'updated_at',
    //'deleted_at', // enabling soft delete
  ];


  public function product()
  {
    return $this->belongsTo(Product::class);
  }
}
