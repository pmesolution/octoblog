<?php namespace Pmesolution\Blog\Models;

use Model;

/**
 * category Model
 */
class Category extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'pmesolution_blog_categories';

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
    public $hasOne = ['language'];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
