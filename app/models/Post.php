<?php

class Post extends BaseModel {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    protected $fillable = array('title', 'description', 'user_id');

    public static $rules = [
        'title'         => 'required',
        'description'   => 'required'
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }
}
