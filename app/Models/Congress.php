<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Congress extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function secretary()
    {
        return $this->belongsTo(User::class , 'SecretaryID');
    }
}
