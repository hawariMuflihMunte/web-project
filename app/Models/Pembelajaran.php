<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Pembelajaran extends Model
{
    use Sluggable;

    protected $table = 'pembelajarans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul',
        'deskripsi',
        'tujuan_pembelajaran',
        'materi_tambahan',
        'lampiran',
        'gambar',
        'created_by',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'judul' => 'string',
        'deskripsi' => 'string',
        'tujuan_pembelajaran' => 'string',
        'materi_tambahan' => 'string',
        'lampiran' => 'string',
        'gambar' => 'string',
        'created_by' => 'string',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul',
            ],
        ];
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'created_by', 'slug');
    }
}
