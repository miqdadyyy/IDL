<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nim
 * @property int $id_kategori
 * @property string $nama_tim
 * @property string $created_at
 * @property string $updated_at
 * @property Kategori $kategori
 * @property Mahasiswa $mahasiswa
 * @property Finalist[] $finalists
 * @property Submission[] $submissions
 */
class Peserta extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nim', 'id_kategori', 'nama_tim', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa', 'nim', 'nim');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finalists()
    {
        return $this->hasMany('App\Finalist', 'id_peserta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function submissions()
    {
        return $this->hasMany('App\Submission', 'id_peserta');
    }
}
