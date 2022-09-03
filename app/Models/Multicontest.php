<?php

namespace App\Models;

use App\Models\Contestantmulti;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Multicontest extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function vendor(){
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
        }






// public function contestants(){
//     return $this->hasMany(Contestantmulti::class, 'multicontest_id', 'id')->orderBy('vote_total', 'DESC');
// }



public function category(){
    return $this->hasMany(Category::class);
}











}
