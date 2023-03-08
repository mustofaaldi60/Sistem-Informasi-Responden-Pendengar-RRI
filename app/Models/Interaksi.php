<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaksi extends Model
{
    use HasFactory;

    protected $table = 'interaksi';

    protected $guarded = ['id'];

    protected $fillable = ['jadwal', 'nama_acara', 'pendengar', 'usia', 'kelamin', 'telepon', 'respon_pendengar', 'rating'];

    /**
     * Get the siaran that owns the Acara
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function interaksi()
    {
        return $this->belongsTo(Interaksi::class);
    }
}