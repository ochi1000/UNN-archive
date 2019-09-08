<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Category extends Model
{ 
    protected $categories = 'categories';
    public $timestamps = true;
    protected $fillable = ['name'];
    protected $dates = ['deleted_at'];

}
