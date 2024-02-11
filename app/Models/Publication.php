<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Profile;

class Publication extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $date = ['created_at'];
    protected $fillable = [

        'date',
        'body',
        'lieu1',
        'lieu2',
        'prix',
        'profile_id'
    ];
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function publications(){
        return $this->hasMany(Publication::class);
    }
}
