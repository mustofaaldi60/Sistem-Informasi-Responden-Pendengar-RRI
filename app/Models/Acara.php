<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Acara extends Model
{
    use HasFactory;

    protected $table = 'acaras';

    protected $guarded = ['id'];

    protected $fillable = ['no','nama','jenis','penyiar','siaran_id','hari','jam'];

    /**
     * Get the siaran that owns the Acara
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function siaran(): BelongsTo
    {
        return $this->belongsTo(Siaran::class,'id');
    }
}
