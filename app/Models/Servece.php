<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servece;

class Servece extends Model
{
    use HasFactory;

    public function servece_category(){
        return $this->hasOne(Work_Category::class,'id','work_category_id');
    }
}
