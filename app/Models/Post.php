<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function setNameAttribute($name)
    {
        $this->attributes["name"] = strtolower($name);
    }

    public function getSlugAttribute(){

        return str_replace(" ","-",$this->name);
    }

    public function href(){

        return "blog/" . $this->slug;
    }
}
