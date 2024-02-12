<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class chauffeurs extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['created_at'];
    protected $fillable = [
        'name',
        'model',
        'type',
        'body',
        'plaque',
        'image',
        'profile_id'

    ];
    public function getImageAttribute($value){
        return $value??'profile/AcrF4Qg7ux89NUng2KtdPimqrqiigAJ9DKBzcIUv.png';
    }
}
