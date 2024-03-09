<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function data()
    {
        return $this->hasMany(Data::class);
    }

    public function prestasis()
    {
        return $this->hasMany(Data::class, 'siswa_id')->orderByDesc('created_at');
    }
}
