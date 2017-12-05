<?php
return [
	'plugin' => [ 'name' => 'PME Blog Addon', 'description' => 'Blog Addon for translate plugin '],
	'menu_item' => ['title' => 'Blog'],
	'labels' => [
		'slug' 	=> 'Post slug',
		'title' => 'Post title',
		'comments' => 'Total Comments',
		'language' => 'Language',
		'excerpt'  => 'Excerpt',
		'content'  => 'Content',
        'featured' => 'Featured image file',
	],
    'category' => [
        'name'          => 'Name of category',
        'description'   =>  'Description of the category',
    ],
    'components' => [

        'blog' => [
            'name' => 'Blog component',
            'description' => 'Blog Component using translation',
        ],

        'category' => [
                'name' => 'Category component',
                'description' => 'Category component',
            ],
            
        'categories' => [
                'name' => 'Categories component',
                'description' => 'Categories component',
            ],

        'comment' => [
                'name'          => 'Comment component',
                'description'   => 'Comment component',
         ],
         'post' => [
                'name' => 'Post component',
                'description' => 'pmesolution post component',
         ]
    ],
];
