<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $nim
 * @property string $nama
 * @property string $email
 * @property string $no_hp
 * @property string $created_at
 * @property string $updated_at
 * @property Peserta[] $pesertas
 */
class Mahasiswa extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'nim';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['nama', 'email', 'no_hp', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pesertas()
    {
        return $this->hasMany('App\Peserta', 'nim', 'nim');
    }
}
