<?php
return [
	'plugin' => [ 'name' => 'PME Blog Addon', 'description' => 'Blog Addon for translate plugin '],
	'menu_item' => ['title' => 'Blog'],
	'labels' => [
		'slug' 	=> 'Post slug',
		'title' => 'Titre',
		'comments' => 'Commentaires',
		'language' => 'Langue',
		'excerpt'  => 'Excerpt',
		'content'  => 'Contenu',
        'featured' => 'Image mis en avant',
	],
    'category' => [
        'name'          => 'Nom de la catégorie',
        'description'   =>  'Description de la catégorie',
    ],
    'components' => [

        'blog' => [
            'name' => 'Composant blog',
            'description' => 'Composant blog' 
        ],

        'category' => [
                'name' => 'Composant catégorie',
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
