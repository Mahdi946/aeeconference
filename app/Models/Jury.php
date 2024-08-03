<?php

namespace App\Models;

use App\Models\User;
use App\Models\Congress;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jury extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'UserID' );
    }
    public function congress()
    {
        return $this->belongsTo(Congress::class , 'CongressID' );
    }

}
