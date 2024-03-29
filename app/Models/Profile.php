<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Passager;
use App\Models\Publication;
use App\Models\Admin;
 

class Profile extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['created_at'];
    protected $fillable = [
        'name',
        'email',
        'numero',
        'role',
        'password',
        'bio',
        'image'
    ];
    public function getImageAttribute($value){
        return $value??'profile/AcrF4Qg7ux89NUng2KtdPimqrqiigAJ9DKBzcIUv.png';
    }
    public function publications(){
        return $this->hasMany(Publication::class);
    }
    public function passagers()
    {
        return $this->hasMany(Passager::class);
    }
    public function admin()
    {
        return $this->hasMany(Admin::class);
    }
}
