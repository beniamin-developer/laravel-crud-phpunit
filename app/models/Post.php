<?php

class Post extends BaseModel {
    protected $fillable = array('title', 'description', 'user_id');
//    public static $rules = [
//        'title'         => 'required',
//        'description'   => 'required'
//    ];
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';
}
