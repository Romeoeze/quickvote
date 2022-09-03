<?php

namespace App\Models;

use App\Models\CorporateMultiContest;
use Illuminate\Database\Eloquent\Model;
use App\Models\CorporateContestCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CorporateContestantmulti extends Model
{
    use HasFactory;


    protected $guarded = [];


    public function contest(){
        return $this->belongsTo(CorporateMultiContest::class, 'corporate_multicontest_id');
    }






    public function category(){
        return $this->belongsTo(CorporateContestCategory::class, 'corporate_category_id', 'id');
    }
}
