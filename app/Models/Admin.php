<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\chauffeurs;
use App\Models\Profile;

class Admin extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['created_at'];
    protected $fillable = [
        'profile_id',
        'chauffeur_id'
    ];
    public function profile(){
        return $this->belongsTo(Profile::class);
     }
     public function chauffeur(){
        return $this->belongsTo(chauffeurs::class);
     }
}
