<?php

namespace App\Models;

use App\Models\CorporateSingleContest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VoterCS extends Model
{
    use HasFactory, Notifiable;



    protected $guarded = [];






    public function contest(){
        return $this->belongsTo(CorporateSingleContest::class);
    }
}
