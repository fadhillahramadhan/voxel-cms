<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CustomModel extends Model
{
    protected $table = 'custom_models'; // Explicitly specify the table name

    protected $fillable = [
        'user_id',
        'name',
        'type',
        'unique_code',
    ];

    // Automatically generate a unique code before saving
    protected static function booted()
    {
        static::creating(function ($customModel) {
            $customModel->unique_code = self::generateUniqueCode();
        });
    }

    // Function to generate a unique code
    public static function generateUniqueCode(): string
    {
        do {
            $code = Str::upper(Str::random(8)); // Example: Generate an 8-character random string
        } while (self::where('unique_code', $code)->exists());

        return $code;
    }
}
