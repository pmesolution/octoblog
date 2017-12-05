<?php namespace Pmesolution\Blog\Components;

use Cms\Classes\ComponentBase;
use Pmesolution\Blog\Models\Category as ModelCategory;
use Session;

class Categories extends ComponentBase
{

    public function getlist(){
        return ModelCategory::where('lang_id', Session::get('lang_id'))->get();
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
