<?php namespace Pmesolution\Blog\Models;

use Model;

/**
 * post Model
 */
class Post extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'pmesolution_blog_posts';

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
    public $hasOne = ['category', 'language'];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = ['featured' => 'System\Models\File'];
    public $attachMany = [];
}
