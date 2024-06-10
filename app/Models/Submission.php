<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $email
 * @property string $name
 * @property string $message
 */
class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
        'message',
    ];
}
