<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_tim
 * @property int $babak
 * @property int $nilai
 * @property int $created_at
 * @property int $updated_at
 * @property int $deleted_at
 * @property Tim $tim
 */
class Penilaian extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'penilaian';

    /**
     * @var array
     */
    protected $fillable = ['id_tim', 'babak', 'nilai', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tim()
    {
        return $this->belongsTo('App\Tim', 'id_tim');
    }
}
