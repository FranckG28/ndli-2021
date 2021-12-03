<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sauvetage extends Model
{
    use HasFactory;

    protected $table = 'sauvetages';

    public function bateau(): BelongsTo
    {
        return $this->belongsTo(Bateau::class, 'id_bateaux');
    }

    public function sauveteurs(): BelongsToMany
    {
        return $this->belongsToMany(Sauveteur::class, 'sauveteurs_sauvetages', 'id_sauvetages', 'id_sauveteurs');
    }

}
