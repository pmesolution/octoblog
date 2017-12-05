<?php namespace Pmesolution\Blog\Components;

use Cms\Classes\ComponentBase;
use Request;
use Pmesolution\Blog\Models\Post as Blogpost;


class Post extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'pmesolution.blog::lang.components.post.name',
            'description' => 'pmesolution.blog::lang.components.post.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getone($slug){
        
        return Blogpost::where('slug', $slug)->first();
    }
}
