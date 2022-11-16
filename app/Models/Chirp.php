<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
    ];

    /**
     * Обратная связь один ко многим: сообщений с пользователем.
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
