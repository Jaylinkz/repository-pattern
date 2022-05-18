<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use softDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable =["body","user_id","post_id"];

public function posts()
{
    return $this->belongsTo(post::class);
}
}
