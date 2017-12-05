<?php namespace Pmesolution\Blog\Models;

use Model;

/**
 * comment Model
 */
class Comment extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'pmesolution_blog_comments';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
