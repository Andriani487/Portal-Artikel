<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Level extends Model
{
    use HasFactory;

    protected $table = 'level';

    protected $primaryKey = 'id_level';

    protected $fillable = [
        'nama_level',
    ];

    public function artikels(): HasMany
    {
        return $this->hasMany(Artikel::class, 'id_level');
    }
}
