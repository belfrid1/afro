<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Khalyomede\EloquentUuidSlug\Sluggable;

class Video extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['videoTitle', 'video_file', 'trailer_file', 'thumbnail_file', 'tag_id', 'slug', 'view_counter'];

    public function popupgroup()
    {
        return $this->belongsTo(PopupGroup::class);
    }
}
