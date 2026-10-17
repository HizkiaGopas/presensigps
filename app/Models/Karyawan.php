<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['nik', 'nama_lengkap', 'jabatan', 'no_hp', 'password'])]
#[Hidden(['password', 'remember_token'])]
class Karyawan extends Authenticatable
{
    
    use HasFactory, Notifiable;

    protected $table = 'karyawan';
    protected $primaryKey = 'nik';
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
