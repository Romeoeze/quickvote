<?php

namespace App\Models;

use App\Models\Vendor;
use Illuminate\Database\Eloquent\Model;
use App\Models\CorporateSingleContestant;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CorporateSingleContest extends Model
{
    use HasFactory;



protected $guarded = [];




public function vendor(){
    return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }


public function contestants(){
    return $this->hasMany(CorporateSingleContestant::class, 'contest_id', 'id')->orderBy('name', 'ASC');
}






}
