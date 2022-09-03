<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contestantmulti extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function contest(){
        return $this->belongsTo(Multicontest::class, 'multicontest_id', 'id');
    }






    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }



}












