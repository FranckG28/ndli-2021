<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bateau extends Model
{
    use HasFactory;

    protected $table = 'bateaux';

    public $timestamps = false;

    public function type(): BelongsTo
    {
        return $this->belongsTo(TypeBateau::class, 'id_type');
    }
}
