<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sauveteur extends Model
{
    use HasFactory;

    protected $table = 'sauveteurs';

    public function grades(): BelongsTo
    {
        return $this->belongsTo(Grade::class, 'id_grade');
    }

    public function sauvetages(): BelongsToMany
    {
        return $this->belongsToMany(Sauvetages::class, 'sauveteurs_sauvetages', 'id_sauveteurs', 'id_sauvetages');
    }

    public function decorations(): BelongsToMany
    {
        return $this->belongsToMany(Decoration::class, 'sauveteurs_decorations', 'id_sauveteurs', 'id_decorations');
    }

    public function sauves(): BelongsToMany
    {
        return $this->belongsToMany(Sauve::class, 'sauveteurs_sauves', 'id_sauveteurs', 'id_sauves');
    }

}
