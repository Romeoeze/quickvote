<?php

namespace App\Models;

use App\Models\Contest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function contest (){
        return $this->hasMany(Contest::class);
    }
 
}
