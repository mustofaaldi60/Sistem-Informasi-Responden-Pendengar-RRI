<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Acara;

class Siaran extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'siarans';

    protected $guarded = ['id'];

    protected $fillable = ['nama', 'slug', 'frekuensi'];

    public function acaras()
    {
        return $this->hasMany(Acara::class);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
}
