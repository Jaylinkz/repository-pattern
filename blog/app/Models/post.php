<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use softDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable =["body","title","user_id"];

public function users()
{
    return $this->belongsTo(User::class);
}
public function comments()
{
    return $this->hasMany(comment::class);
}
}
