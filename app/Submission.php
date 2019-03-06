<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_peserta
 * @property int $id_kategori
 * @property string $judul
 * @property string $file_path
 * @property string $created_at
 * @property string $updated_at
 * @property Kategori $kategori
 * @property Peserta $peserta
 */
class Submission extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id_peserta', 'id_kategori', 'judul', 'file_path', 'created_at', 'updated_at'];

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
    public function peserta()
    {
        return $this->belongsTo('App\Peserta', 'id_peserta');
    }
}
