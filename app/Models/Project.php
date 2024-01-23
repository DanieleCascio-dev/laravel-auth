<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    

    public function setTitleAttribute($value)
    {
        $this->attribute['title']=$value;
        $this->attribute['slug']=Str::slug($value);
    }
}
