<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = [];

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function votes()
    {
        return $this->morphMany(Vote::class, 'voteable');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('comment_id')->orderByDesc('created_at');
    }

    public function getNextLesson()
    {
        $nextLesson = $this->series->lessons()->where('episode_number', '>', $this->episode_number)
            ->orderBy('episode_number', 'asc')
            ->first();

        if ($nextLesson)
            return $nextLesson;

        return $this;
    }

    public function getPrevLesson()
    {
        $prevLesson = $this->series->lessons()->where('episode_number', '<', $this->episode_number)
            ->orderBy('episode_number', 'desc')
            ->first();

        if ($prevLesson)
            return $prevLesson;

        return $this;
    }
}
