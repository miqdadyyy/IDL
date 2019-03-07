<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

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

    use SoftDeletes;
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

    public static function createPost($title, $desc)
    {
        Post::create([
            'title' => $title,
            'description' => $desc,
            'id_user' => Auth::user()->id
        ]);

        return true;
    }

    public static function updatePost($id, $title, $desc)
    {
        $post = Post::find($id);
        if($post == null){
            return false;
        }

        $post->update([
            'title' => $title,
            'description' => $desc,
            'id_user' => Auth::user()->id
        ]);

        return true;
    }

    public static function deletePost($id){
        $post = Post::find($id);
        if($post == null){
            return false;
        }

        $post->delete();
        return true;
    }
}
