<?php

return [    

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => '',
    'title_prefix' => 'UC | ',
    'title_postfix' => '',    

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */    

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>U</b>Continental',
    'logo_img' => 'favicons\images.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Admin Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'favicons\images.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'img' => [
            'path' => 'favicons\images.png',
            'alt' => 'AdminLTE Preloader Image',
            'effect' => 'animation__shake',
            'width' => 60,
            'height' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'Búsqueda',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'Búsqueda',
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'  => 'Dashboard',
            'icon'  => 'fas fa-fw fa-tachometer-alt',
            'route' => 'admin.home'
        ],
        [
            'text'  => 'Inicio',
            'icon'  => 'fas fa-fw fa-home',
            'route' => 'home'
        ],
        [
            'text'    => 'Macroprocesos',
            'icon'    => 'fas fa-fw fa-sitemap',
            'submenu' =>[
                [
                    'text'       => 'Estratégicos',
                    'icon'       => 'fas fa-fw fa-bullseye',
                    'icon_color' => 'red',
                    'url'        => '#',
                    'submenu'    => [
                        [
                            'text'       => 'Direccionamiento Estratégico',
                            'icon'       => 'fas fa-fw fa-bullseye',
                            'icon_color' => 'maroon',
                            'url'        => '#'
                        ],
                        [
                            'text'      => 'Gestión para Organizaciones Educataivas',
                            'icon'      => 'fas fa-fw fa-bullseye',
                            'icon_color' => 'maroon',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Responsabilidad Social',
                            'icon'      => 'fas fa-fw fa-bullseye',
                            'icon_color' => 'maroon',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Gestión Ambiental',
                            'icon'      => 'fas fa-fw fa-bullseye',
                            'icon_color' => 'maroon',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Planificación Institucional',
                            'icon'      => 'fas fa-fw fa-project-diagram',
                            'icon_color' => 'maroon',
                            'url'       => 'gestionPI',
                            'submenu'   => [
                                [
                                    'text'      => 'Plan de Funcionamiento y Desarrollo',
                                    'icon'      => 'fas fa-fw fa-scroll',                                    
                                    'url'       => 'gestionPI',
                                    'active'    => [
                                        'gestionPI*', 
                                        'regex:@^gestionPI/[0-9]+$@', 
                                        'regex:@^gestionPI/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Acciones Mejora',
                                    'icon'      => 'fas fa-fw fa-chart-line',                                    
                                    'url'       => 'accionesmejoras',
                                    'active'    => [
                                        'accionesmejoras*', 
                                        'regex:@^accionesmejoras/[0-9]+$@', 
                                        'regex:@^accionesmejoras/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Comisiones o Áreas',
                                    'icon'      => 'fas fa-fw fa-warehouse',
                                    'url'       => 'comisiones',
                                    'active'    => [
                                        'comisiones*', 
                                        'regex:@^comisiones/[0-9]+$@', 
                                        'regex:@^comisiones/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Comunicar PFD',
                                    'icon'      => 'fas fa-fw fa-bullhorn',
                                    'url'       => 'comunicarpfd',
                                    'active'    => [
                                        'comunicarpfd*', 
                                        'regex:@^comunicarpfd/[0-9]+$@', 
                                        'regex:@^comunicarpfd/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Cronograma',
                                    'icon'      => 'fas fa-fw fa-calendar-alt',
                                    'url'       => 'cronogramas',
                                    'active'    => [
                                        'cronogramas*', 
                                        'regex:@^cronogramas/[0-9]+$@', 
                                        'regex:@^cronogramas/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Cuadro de Necesidades',
                                    'icon'      => 'fas fa-fw fa-comments',
                                    'url'       => 'cuadronecesidades',
                                    'active'    => [
                                        'cuadronecesidades*', 
                                        'regex:@^cuadronecesidades/[0-9]+$@', 
                                        'regex:@^cuadronecesidades/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Informe de Gestión',
                                    'icon'      => 'fas fa-fw fa-file-word',
                                    'url'       => 'informesgestion',
                                    'active'    => [
                                        'informesgestion*', 
                                        'regex:@^informesgestion/[0-9]+$@', 
                                        'regex:@^informesgestion/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Monitoreo PFD',
                                    'icon'      => 'fas fa-fw fa-binoculars',
                                    'url'       => 'monitoreospfd',
                                    'active'    => [
                                        'monitoreospfd*', 
                                        'regex:@^monitoreospfd/[0-9]+$@', 
                                        'regex:@^monitoreospfd/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Revisión PFD',
                                    'icon'      => 'fas fa-fw fa-clipboard-check',
                                    'url'       => 'revisionespfd',
                                    'active'    => [
                                        'revisionespfd*', 
                                        'regex:@^revisionespfd/[0-9]+$@', 
                                        'regex:@^revisionespfd/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'TDR',
                                    'icon'      => 'fas fa-fw fa-file-alt',
                                    'url'       => 'tdr',
                                    'active'    => [
                                        'tdr*', 
                                        'regex:@^tdr/[0-9]+$@', 
                                        'regex:@^tdr/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Tipo de Costo',
                                    'icon'      => 'fas fa-fw fa-money-bill-alt',
                                    'url'       => 'tiposcostos',
                                    'active'    => [
                                        'tiposcostos*', 
                                        'regex:@^tiposcostos/[0-9]+$@', 
                                        'regex:@^tiposcostos/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Tipo de Recurso',
                                    'icon'      => 'fas fa-fw fa-boxes',
                                    'url'       => 'tiposrecursos',
                                    'active'    => [
                                        'tiposrecursos*', 
                                        'regex:@^tiposrecursos/[0-9]+$@', 
                                        'regex:@^tiposrecursos/[0-9]+/edit$@'
                                    ],
                                ],
                            ],
                        ]
                    ]
                ],
                [
                    'text'      => 'Misionales',
                    'icon'      => 'fas fa-fw fa-chart-pie',
                    'icon_color' => 'blue',
                    'url'       => '#',
                    'submenu'   => [
                        [
                            'text'      => 'Nivelación de Estudiantes',
                            'icon'      => 'fas fa-fw fa-chart-pie',
                            'icon_color' => 'lightblue',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Admisión',
                            'icon'      => 'fas fa-fw fa-chart-pie',
                            'icon_color' => 'lightblue',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Matrícula',
                            'icon'      => 'fas fa-fw fa-chart-pie',
                            'icon_color' => 'lightblue',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Diseño Curricular',
                            'icon'      => 'fas fa-fw fa-chart-pie',
                            'icon_color' => 'lightblue',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Internacionalización',
                            'icon'      => 'fas fa-fw fa-chart-pie',
                            'icon_color' => 'lightblue',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Enseñanza Aprendizaje',
                            'icon'      => 'fas fa-fw fa-chart-pie',
                            'icon_color' => 'lightblue',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Seguimiento al Estudiante',
                            'icon'      => 'fas fa-fw fa-chart-pie',
                            'icon_color' => 'lightblue',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Prácticas Pre Profesionales',
                            'icon'      => 'fas fa-fw fa-briefcase',
                            'icon_color' => 'lightblue',
                            'url'       => 'practicas',
                            'submenu'   => [
                                [
                                    'text'      => 'Prácticas',
                                    'icon'      => 'fas fa-fw fa-briefcase',
                                    'url'       => 'practicas',
                                    'active' => [ 
                                        'regex:@^practicas/[0-9]+$@', 
                                        'regex:@^practicas/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Docentes',
                                    'icon'      => 'fas fa-fw fa-chalkboard-teacher',
                                    'url'       => 'docentes',
                                    'active' => [
                                        'docentes*', 
                                        'regex:@^docentes/[0-9]+$@', 
                                        'regex:@^docentes/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Empresas',
                                    'icon'      => 'fas fa-fw fa-building',
                                    'url'       => 'empresas',
                                    'active' => [
                                        'empresas*', 
                                        'regex:@^empresas/[0-9]+$@', 
                                        'regex:@^empresas/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Estudiantes',
                                    'icon'      => 'fas fa-fw fa-user-graduate',
                                    'url'       => 'estudiantes',
                                    'active' => [
                                        'estudiantes*', 
                                        'regex:@^estudiantes/[0-9]+$@', 
                                        'regex:@^estudiantes/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Etapas',
                                    'icon'      => 'fas fa-fw fa-chart-line',
                                    'url'       => 'etapas',
                                    'active' => [
                                        'etapas*', 
                                        'regex:@^etapas/[0-9]+$@', 
                                        'regex:@^etapas/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Prácticas Requisitos',
                                    'icon'      => 'fas fa-fw fa-clipboard-check',
                                    'url'       => 'practicasrequisitos',
                                    'active' => [
                                        'practicasrequisitos*', 
                                        'regex:@^practicasrequisitos/[0-9]+$@', 
                                        'regex:@^practicasrequisitos/[0-9]+/edit$@'
                                    ],
                                ],
                                [
                                    'text'      => 'Requisitos',
                                    'icon'      => 'fas fa-fw fa-spell-check',
                                    'url'       => 'requisitos',
                                    'active'    => [
                                        'requisitos*', 
                                        'regex:@^requisitos/[0-9]+$@', 
                                        'regex:@^requisitos/[0-9]+/edit$@'
                                    ],
                                ],
                            ],
                        ],
                        [
                            'text'      => 'Proyección Social y Extención Universitaria',
                            'icon'      => 'fas fa-fw fa-chart-pie',
                            'icon_color' => 'lightblue',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Grados y Títulos',
                            'icon'      => 'fas fa-fw fa-chart-pie',
                            'icon_color' => 'lightblue',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Investigación',
                            'icon'      => 'fas fa-fw fa-chart-pie',
                            'icon_color' => 'lightblue',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Internacionalización',
                            'icon'      => 'fas fa-fw fa-chart-pie',
                            'icon_color' => 'lightblue',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Convalidaciones',
                            'icon'      => 'fas fa-fw fa-chart-pie',
                            'icon_color' => 'lightblue',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Egresados',
                            'icon'      => 'fas fa-fw fa-chart-pie',
                            'icon_color' => 'lightblue',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Tutoría',
                            'icon'      => 'fas fa-fw fa-chart-pie',
                            'icon_color' => 'lightblue',
                            'url'       => '#'
                        ]
                    ]
                ],
                [
                    'text'      => 'De Soporte',
                    'icon'      => 'fas fa-fw fa-tools',
                    'icon_color' => 'green',
                    'url'       => '#',
                    'submenu'   => [
                        [
                            'text'      => 'Seguridad y Salud en el Trabajo',
                            'icon'      => 'fas fa-fw fa-tools',
                            'icon_color' => 'cyan',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Talento Humano',
                            'icon'      => 'fas fa-fw fa-tools',
                            'icon_color' => 'cyan',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Información y Comunicación',
                            'icon'      => 'fas fa-fw fa-tools',
                            'icon_color' => 'cyan',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Consejería',
                            'icon'      => 'fas fa-fw fa-tools',
                            'icon_color' => 'cyan',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Bienestar Organizacional',
                            'icon'      => 'fas fa-fw fa-tools',
                            'icon_color' => 'cyan',
                            'url'       => '#'
                        ],
                        [
                            'text'      => 'Servicios Educacionales',
                            'icon'      => 'fas fa-fw fa-tools',
                            'icon_color' => 'cyan',
                            'url'       => '#'
                        ]
                    ]
                ]
            ]
        ],
        [
            'text'        => 'pages',
            'url'         => 'admin/pages',
            'icon'        => 'far fa-fw fa-file',
            'label'       => 4,
            'label_color' => 'success',
        ],
        ['header' => 'account_settings'],
        [
            'text' => 'profile',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'change_password',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ],
        [
            'text'    => 'multilevel',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text'    => 'level_one',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'level_two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'level_two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
            ],
        ],
        ['header' => 'labels'],
        [
            'text'       => 'important',
            'icon_color' => 'red',
            'url'        => '#',
        ],
        [
            'text'       => 'warning',
            'icon_color' => 'yellow',
            'url'        => '#',
        ],
        [
            'text'       => 'information',
            'icon_color' => 'cyan',
            'url'        => '#',
        ],
        [
            'text'       => 'Nosotros',
            'icon'       => 'fas fa-fw fa-users',
            'icon_color' => 'blue',
            'url'        => 'nosotros',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
        'App' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'js/app.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,

    'detect_theme_mode' => true,
    
];
