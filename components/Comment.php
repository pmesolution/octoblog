<?php namespace Pmesolution\Blog\Components;

use Cms\Classes\ComponentBase;
use Request;
use Input;

class Comment extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'pmesolution.blog::lang.components.comment.name',
            'description' => 'pmesolution.blog::lang.components.comment.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onNewComment(){
        var_dump(Input::get('name'));
        return 'foo';
    }
}
