<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;

    protected $table = 'acaras';

    protected $guarded = ['id'];

    protected $fillable = ['nama', 'slug', 'rekuensi'];
}