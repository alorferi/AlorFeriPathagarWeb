<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $guarded = [];

    public function author(){
        return $this->belongsTo(User::class,'id','post_author');
    }

}