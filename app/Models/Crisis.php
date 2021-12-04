<?php

namespace App\Models;

use App\Models\Crisis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Crisis extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(Category::class,'type','id');
    }
}
