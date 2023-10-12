<?php

    return [
        [
            'label' => "Dashboard",
            'route' => 'admin.dashboard',
            'icon' => 'fa-home'
        ],
        // [
        //     'label' => 'User Manager',
        //     'route' => 'category.index',
        //     'icon' => 'fa-shopping-cart',
        //     'items' => [
        //         [
        //             'label' => 'All User',
        //             'route' => 'user.index'
        //         ],
        //         [
        //             'label' => 'Add User',
        //             'route' => 'user.create'
        //         ]
        //     ]
        // ],
        [
            'label' => 'Category Manager',
            'route' => 'category.index',
            'icon' => 'fa-shopping-cart',
            'items' => [
                [
                    'label' => 'All Category',
                    'route' => 'category.index'
                ],
                [
                    'label' => 'Add Category',
                    'route' => 'category.create'
                ]
            ]
        ],
        [
            'label' => 'Product Manager',
            'route' => 'product.index',
            'icon' => 'fa-shopping-cart',
            'items' => [
                [
                    'label' => 'All Product',
                    'route' => 'product.index'
                ],
                [
                    'label' => 'Add Product',
                    'route' => 'product.create'
                ]
            ]
        ],
        // [
        //     'label' => 'Blog Manager',
        //     'route' => 'blog.index',
        //     'icon' => 'fa-shopping-cart',
        //     'items' => [
        //         [
        //             'label' => 'All Blog',
        //             'route' => 'blog.index'
        //         ],
        //         [
        //             'label' => 'All Blog',
        //             'route' => 'blog.create'
        //         ]
        //     ]
        // ]
    ]

?>