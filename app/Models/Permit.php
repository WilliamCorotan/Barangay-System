<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Permit extends Model
{
    use HasFactory;

    protected $guarded = [];

    

    public function barangayIds() : BelongsTo
    {
        return $this->belongsTo(BarangayId::class);
    }
}
