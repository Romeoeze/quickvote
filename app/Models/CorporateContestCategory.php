<?php

namespace App\Models;

use App\Models\CorporateMultiContest;
use Illuminate\Database\Eloquent\Model;
use App\Models\CorporateContestantmulti;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CorporateContestCategory extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    public function contest(){
        return $this->belongsTo(CorporateMultiContest::class, 'corporatemulticontest_id', 'id')->orderBy('contest_name', 'DESC');
    }



public function contestants(){
    return $this->hasMany(CorporateContestantmulti::class, 'corporate_category_id', 'id')->orderBy('vote_total', 'DESC');;
}
}
