<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant',
        'amount',
        'interest',
        'app_id',
        'due_date'
    ];

    protected $table = 'applications';
}
