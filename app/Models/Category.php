<?php

namespace App\Models;

use App\Models\Multicontest;
use App\Models\Contestantmulti;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;


    protected $guarded = [];

public function contest(){
    return $this->belongsTo(Multicontest::class, 'multicontest_id', 'id')->orderBy('contest_name', 'DESC');
}


public function contestants(){
    return $this->hasMany(Contestantmulti::class, 'category_id', 'id')->orderBy('vote_total', 'DESC');;
}









}
