<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CorporateContestantmulti;
use App\Models\CorporateContestCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CorporateMultiContest extends Model
{
    use HasFactory;


    protected $guarded = [];




    public function vendor(){
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
        }




public function category(){
    return $this->hasMany(CorporateContestCategory::class, 'corporatemulticontest_id', 'id');
}



public function contestants(){
    return $this->hasMany(CorporateContestantmulti::class, 'corporate_multicontest_id', 'id')->orderBy('name', 'ASC');
}



}
