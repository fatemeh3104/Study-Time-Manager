<?php

namespace App\Models;

use App\Enums\HardnessDegree;
use App\Enums\StudyTargetType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refrence extends Model
{
    use HasFactory;
    protected $casts = [
        'hardness-degree' => HardnessDegree::class
    ];
    public function Study(){
        return $this->hasMany(Study::class);
    }
    public function Chapter(){
        return $this->hasMany(Refrence::class);
    }
}
