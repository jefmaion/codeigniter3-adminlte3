<?php

$config = [


    ###### TOP NAVBAR ##################################

    // Enable Navbar
    'navbar_enable' => true,

    // Enable Navbar Search Field
    'navbar_search' => false,

    // Background color of top navbar
    'navbar_color' => '',


    // Enable full screen icon and feature
    'navbar_fullscreen_icon' => false,

    // Enable dark mode
    'dark_mode_icon' => true,

    'sidebar_color' => 'sidebar-dark-primary',

    'brand_options' => '',

    'sidebar_shadow_size' => 4,

    // Options of left sidebar [sidebar-collapse, layout-fixed, sidebar-mini, sidebar-mini-md, sidebar-mini-xs]
    'sidebar_options' => 'sidebar-mini layout-fixed',

    // Options of navbar [nav-legacy nav-flat nav-compact nav-child-indent nav-collapse-hide-child text-sm]
    'navbar_options' => '',

    // Set the items of navbar
    'navbar_menu_top_left' => [
        [
            'text' => 'Navbar Item',
            'url' => '#',
        ],

        [
            'text' => 'Item Label ',
            'url' => 'welcome/example',
            'label'       => 4,
            'label_color' => 'success',
        ],
    ],
    ###################################################


    'sidebar_icon'   => '',
    'sidebar_title'  => 'AdminLTE+CI3',
    'sidebar_search' => false,
    'sidebar_user'   => false,

    'menu' => [
        ['header' => 'HEADER'],

        [
            'text' => 'Simple Menu Item',
            'url' => 'welcome/example',
            'icon' => 'far fas fa-bars',
            'active'  => 'example*',
        ],
        [
            'text' => 'Menu With Badge',
            'url' => 'welcome/login',
            'icon' => 'far fas fa-bars',
            'label'       => 4,
            'label_color' => 'success',
        ],
        [
            'text'    => 'Pages',
            'icon'    => 'far fas fa-bars',
            
            'submenu' => [
                [
                    'text' => 'Login',
                    'url' => '/login',
                    'icon' => 'far fas fa-bars',
                ],
                [
                    'text' => 'Error 404',
                    'url'  => 'admin/pages',
                    'icon' => 'far fas fa-bars',
                ],

                [
                    'text' => 'Another SubMenu',
                    'url'  => 'admin/pages',
                    'icon' => 'far fas fa-bars',
                    'submenu' => [
                        [
                            'text' => 'SubMenu Item 1',
                            'url'  => 'admin/pages',
                            'icon' => 'far fas fa-bars',
                        ],
                        [
                            'text' => 'SubMenu Item 2',
                            'url'  => 'admin/pages',
                            'icon' => 'far fas fa-bars',
                        ],
                        [
                            'text' => 'SubMenu Item 3 w/ sub',
                            'url'  => 'admin/pages',
                            'icon' => 'far fas fa-bars',
                        ],
                    ],
                ],
            ],
        ],

    ],

    'plugins' => [

        'datatable' => [

            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'location' => 'vendor/almasaeed2010/adminlte/plugins/datatables/jquery.dataTables.min.js',
                    'base_url' => true
                ],

                [
                    'type' => 'js',
                    'location' => 'vendor/almasaeed2010/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
                    'base_url' => true
                ],

                [
                    'type' => 'css',
                    'location' => 'vendor/almasaeed2010/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css',
                    'base_url' => true
                ],

            ]
        ],

        'select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'location' => 'vendor/almasaeed2010/adminlte/plugins/select2/js/select2.full.min.js',
                    'base_url' => true
                ],

                [
                    'type' => 'css',
                    'location' => 'vendor/almasaeed2010/adminlte/plugins/select2/css/select2.min.css',
                    'base_url' => true
                ],

                [
                    'type' => 'css',
                    'location' => 'vendor/almasaeed2010/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css',
                    'base_url' => true
                ],
            ]
        ],

        'toastr' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'location' => 'vendor/almasaeed2010/adminlte/plugins/toastr/toastr.min.js',
                    'base_url' => true
                ],

                [
                    'type' => 'css',
                    'location' => 'vendor/almasaeed2010/adminlte/plugins/toastr/toastr.min.css',
                    'base_url' => true
                ],

            ]
        ],

    ]

];
