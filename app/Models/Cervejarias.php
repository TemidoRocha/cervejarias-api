<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cervejarias extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'slug',
      'address',
      'email',
      'contact',
      'website',
    ];
}
