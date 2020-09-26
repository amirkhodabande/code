<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $with = ['user', 'votes'];
    protected $guarded = [];

    protected $appends = ['repliesCount'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function votes()
    {
        return $this->morphMany(Vote::class, "voteable");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        // foreignKey => 'comment_id' : Default the key will be the function name so because this function name is not in Comment database we change it to `comment_id` ...
        return $this->hasMany(Comment::class, 'comment_id')->whereNotNull('comment_id');
    }


    //    The 'get...Attribute' is default and 'RepliesCount' is name of function ...
    public function getRepliesCountAttribute()
    {
        return $this->replies->count();
    }

}
