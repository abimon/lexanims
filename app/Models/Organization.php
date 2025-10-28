<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Organization extends Model
{
    protected $fillable = [
        'name',
        'authorized_email',
        'address',
        'phone',
        'email',
        'website',
        'logo',
        'status',
    ];
    public function userIsAuthorized():bool
    {
        return $this->authorized_email === Auth::user()->email;
    }
}
