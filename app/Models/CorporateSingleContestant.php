<?php

namespace App\Models;

use App\Models\CorporateSingleContest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CorporateSingleContestant extends Model
{
    use HasFactory;

    protected $guarded = [];




    public function contest(){
        return $this->belongsTo(CorporateSingleContest::class);
    }






}
