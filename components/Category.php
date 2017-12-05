<?php namespace Pmesolution\Blog\Components;

use Cms\Classes\ComponentBase;
use Pmesolution\Blog\Models\Category as ModelCategory;
use Pmesolution\Blog\Models\Post as ModelPost;
use Redirect;

class Category extends ComponentBase
{

    public $title = 'dd';
    public $description = 'default description';
    public function filter($slug){
        $cat = ModelCategory::where('name' , $slug)->first();

        if($cat !== NULL){
            return Post::where('category', $cat->ID)->get();
        }else {
            $this->title = 'foo';
            $this->description ='bar';
            return Post::All();
        }
        
    }
    public function componentDetails()
    {
        return [

            'name'        => 'pmesolution.blog::lang.components.category.name',
            'description' => 'pmesolution.blog::lang.components.category.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
