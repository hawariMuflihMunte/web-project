<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use Sluggable;
    protected $table = 'quizzes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'modul_pengantar',
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
        'modul_pengantar' => 'string',
        'gambar' => 'string',
        'created_by' => 'string',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul',
                'method' => function ($string) {
                    return substr(md5($string), 0, 12);
                },
            ],
        ];
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'created_by', 'slug');
    }

    public function pembelajaran()
    {
        return $this->belongsTo(Pembelajaran::class, 'modul_pengantar', 'slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
