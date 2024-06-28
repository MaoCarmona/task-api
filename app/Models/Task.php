<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Task extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'tiltle', 'description', ' status', 'due_date'
    ];

    protected $dates = ['deleted_at'];
}
