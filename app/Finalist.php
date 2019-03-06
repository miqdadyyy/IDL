<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_tim
 * @property int $nilai
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Peserta $peserta
 */
class Finalist extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id_tim', 'nilai', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function peserta()
    {
        return $this->belongsTo('App\Peserta', 'id_tim');
    }
}
