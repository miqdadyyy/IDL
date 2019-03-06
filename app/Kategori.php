<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_ormawa
 * @property string $nama_kategori
 * @property Ormawa $ormawa
 * @property Peserta[] $pesertas
 * @property Submission[] $submissions
 */
class Kategori extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id_ormawa', 'nama_kategori'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ormawa()
    {
        return $this->belongsTo('App\Ormawa', 'id_ormawa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pesertas()
    {
        return $this->hasMany('App\Peserta', 'id_kategori');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function submissions()
    {
        return $this->hasMany('App\Submission', 'id_kategori');
    }
}
