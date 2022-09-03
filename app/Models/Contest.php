<?php

namespace App\Models;

use App\Models\Vendor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contest extends Model
{
    use HasFactory;


    protected $guarded = [];




    public function vendor(){
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
        }



public function contestants(){
    return $this->hasMany(Contestant::class, 'contest_id', 'id')->orderBy('vote_total', 'DESC');
}




}




