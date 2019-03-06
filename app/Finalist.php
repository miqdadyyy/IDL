<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_peserta
 * @property int $nilai
 * @property string $created_at
 * @property string $updated_at
 * @property Peserta $peserta
 */
class Finalist extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id_peserta', 'nilai', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function peserta()
    {
        return $this->belongsTo('App\Peserta', 'id_peserta');
    }
}
