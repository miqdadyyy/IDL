<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $id_kategori
 * @property string $ketua_tim
 * @property string $nama_tim
 * @property string $submissionid
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Kategori $kategori
 * @property Mahasiswa $mahasiswa
 * @property Peserta[] $pesertas
 * @property Submission[] $submissions
 */
class Tim extends Model
{
    use SoftDeletes;
    /**
     * @var array
     */
    protected $fillable = ['id_kategori', 'ketua_tim', 'nama_tim', 'submissionid', 'babak', 'created_at', 'updated_at', 'deleted_at'];

    public static function createTim($id_kategori, $ketua_tim, $nama_tim){
        $tim = Tim::create([
            'id_kategori' => $id_kategori,
            'nama_tim' => $nama_tim,
            'ketua_tim' => $ketua_tim->nim,
            'submission_id' => md5(date('Y-m-d') . '_' . $nama_tim . '_' . $id_kategori)
        ]);

        return $tim;
    }

    public static function deleteTim($id_kategori, $id){
        $tim = Tim::with('pesertas')->findOrFail($id);
        foreach ($tim->pesertas as $peserta){
            Peserta::findOrFail($peserta->id)->delete();
        }
        $tim->delete();
        return true;
    }

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
        return $this->belongsTo('App\Mahasiswa', 'ketua_tim', 'nim');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pesertas()
    {
        return $this->hasMany('App\Peserta', 'id_tim');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function submissions()
    {
        return $this->hasMany('App\Submission', 'id_tim');
    }
}
