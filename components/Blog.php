<?php namespace Pmesolution\Blog\Components;

use Cms\Classes\ComponentBase;
use Pmesolution\Blog\Models\Post;
use Session;

class Blog extends ComponentBase
{
    public function articles(){
        //conditions here
        return Post::where('lang_id', Session::get('lang_id'))->get();
    }

    public function onRun(){
        $this->addCss('/plugins/pmesolution/blog/assets/css/blog.css');
    }
    
    public function componentDetails()
    {
        return [
            'name'        => 'pmesolution.blog::lang.components.blog.name',
            'description' => 'pmesolution.blog::lang.components.blog.description',
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
