<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $fillable = ['name','address'];

    public function setNameAttribute($value)
    {
        $this->attributes['name']= "mr ".$value;
    }
    public function setAddressAttribute($value)
    {
        $this->attributes['address']= $value. ', Plateau';
    }

    public function getNameAttribute($value)
    {
        return  ucFirst($value);
    }
    public function getaAddressAttribute($value)
    {
        return  $value. ', Plateau';
    }

    
}
