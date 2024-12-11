<?php

// app/Models/Subscription.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = ['Name', 'Type', 'Duration', 'Price', 'Logo'];
    public $timestamps = false;
}

