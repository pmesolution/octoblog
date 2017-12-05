<?php namespace Pmesolution\Blog;

use Backend;
use System\Classes\PluginBase;
use Pmesolution\Blog\Models\Comment;
use Event;

/**
 * blog Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'pmesolution.blog::lang.plugin.name',
            'description' => 'pmesolution.blog::lang.plugin.description',
            'author'      => 'pmesolution',
            'icon'        => 'icon-edit'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
      
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            '\Pmesolution\Blog\Components\Blog' => 'Blog',
            '\Pmesolution\Blog\Components\Categories' => 'Categories',
            '\Pmesolution\Blog\Components\Post' => 'Post',
            '\Pmesolution\Blog\Components\Category' => 'Category',
            '\Pmesolution\Blog\Components\Comment' => 'Comment',

        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'pmesolution.blog.some_permission' => [
                'tab' => 'blog',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'blog' => [
                'label'       => 'pmesolution.blog::lang.menu_item.title',
                'url'         => Backend::url('pmesolution/blog/Post'),
                'icon'        => 'icon-edit',
                'permissions' => ['pmesolution.blog.*'],
                'order'       => 500,
            ],
        ];
    }
}
