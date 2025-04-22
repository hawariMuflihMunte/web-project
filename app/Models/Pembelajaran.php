<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pembelajaran extends Model
{
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul',
            ],
        ];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'judul',
        'deskripsi',
        'tujuan_pembelajaran',
        'materi_tambahan',
        'lampiran',
        'gambar',
    ];

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'id' => 'uuid',
    // ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
}
