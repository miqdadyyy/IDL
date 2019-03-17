<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_tim
 * @property string $judul
 * @property string $file_path
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Tim $tim
 */
class Submission extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id_tim', 'judul', 'file_path', 'token', 'created_at', 'updated_at', 'deleted_at'];

    public static function createSubmissionPenyisihan1($id_tim, $judul, $path, $token){
        $submission = Submission::create([
            'id_tim' => $id_tim,
            'judul' => $judul,
            'file_path' => $path,
            'token' => $token
        ]);

        return $submission;
    }

    public static function createSubmissionPenyisihan2($id_tim, $judul, $path, $data, $token){
        $submission = Submission::create([
            'id_tim' => $id_tim,
            'judul' => $judul,
            'file_path' => $path,
            'data' => $data,
            'token' => $token
        ]);

        return $submission;
    }

    public static function createSubmissionFinal($id_tim, $judul, $path, $video, $token){
        $submission = Submission::create([
            'id_tim' => $id_tim,
            'judul' => $judul,
            'file_path' => $path,
            'token' => $token
        ]);

        return $submission;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tim()
    {
        return $this->belongsTo('App\Tim', 'id_tim');
    }
}
