<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_user
 * @property string $title
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Post extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id_user', 'title', 'description', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
