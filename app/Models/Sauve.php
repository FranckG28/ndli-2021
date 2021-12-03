<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sauve extends Model
{
    use HasFactory;

    protected $table = 'sauves';

    public function sauvetage(): BelongsTo
    {
        return $this->belongsTo(Sauvetage::class, 'id_sauvetages');
    }

    public function sauveteurs(): BelongsToMany
    {
        return $this->belongsToMany(Sauveteur::class, 'sauveteurs_sauves', 'id_sauves', 'id_sauveteurs');
    }

}
