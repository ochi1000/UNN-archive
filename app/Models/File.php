<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{ 
    public $timestamps = true;
    public $fillable = ['name','author','description','file_path'];
    protected $dates = ['deleted_at'];
    
}
