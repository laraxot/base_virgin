<?php

$def = [
    'pub_theme' => 'talenteco_events',
    //'pub_theme' => 'test',
    //'adm_theme' => 'adminlte',
    'adm_theme' => 'sb-admin-2-bs4',
    'enable_ads' => '1',
    'model' => [
        //'blog' 				=>		'Modules\Blog\Models\Blog',
        'article' => 'Modules\Blog\Models\Article',
        'article_cat' => 'Modules\Blog\Models\ArticleCat',
        'photo' => 'Modules\Blog\Models\Photo',
        'home' => 'Modules\Blog\Models\Home',
        'page' => 'Modules\Blog\Models\Page',
        'feed' => 'Modules\Blog\Models\Feed',
        'sitemap' => 'Modules\Blog\Models\Sitemap',
        'place' => 'Modules\Blog\Models\Place',
        'event' => 'Modules\Blog\Models\Event',
        'rating' => 'Modules\Blog\Models\Rating',
        'my_rating' => 'Modules\Blog\Models\MyRating',
        'profile' => 'Modules\Blog\Models\Profile',
        //------------- Extend --------------------------------------
        'translation' => 'Modules\Xot\Models\Translation',
        'image' => 'Modules\Xot\Models\Image',
        //-------------- LU -----------------------------------------
        'area' => 'Modules\LU\Models\Area',
        'area_admin_area' => 'Modules\LU\Models\AreaAdminArea',
        'group' => 'Modules\LU\Models\Group',
        'group_right' => 'Modules\LU\Models\GroupRight',
        'group_user' => 'Modules\LU\Models\GroupUser',
        'invitation' => 'Modules\LU\Models\invitation',
        'password_reset' => 'Modules\LU\Models\PasswordReset',
        'perm_user' => 'Modules\LU\Models\PermUser',
        'right' => 'Modules\LU\Models\Right',
        'right_implied' => 'Modules\LU\Models\RightImplied',
        'social_provider' => 'Modules\LU\Models\SocialProvider',
        //'translation'		=>		'Modules\LU\Models\Translation',     !!! remember !!!
        'user' => 'Modules\LU\Models\User',
        'user_right' => 'Modules\LU\Models\UserRight',
        //------------- FOOD ----------------------------------------
        //'restaurant' 		=> 		'Modules\Food\Models\Restaurant',
        //'cuisine_cat' 		=> 		'Modules\Food\Models\CuisineCat',
        //'cuisine' 			=> 		'Modules\Food\Models\Cuisine',
        //'recipe' 			=> 		'Modules\Food\Models\Recipe',
        /*
        'restaurant_owner' 	=> 		'Modules\Food\Models\RestaurantOwner',
        'ingredient' 		=> 		'Modules\Food\Models\Ingredient',
        'ingredient_cat' 	=> 		'Modules\Food\Models\IngredientCat',
        'location' 			=> 		'Modules\Food\Models\Location',

        'cart_item'			=> 		\Modules\Food\Models\CartItem::class, //wip
        'cart'				=> 		\Modules\Food\Models\Cart::class, //wip
        'opening_hour' 		=> 		\Modules\Food\Models\OpeningHour::class,
        //'map' =>          		\Modules\Food\Models\Map::class,
        'restaurant_map'	=>      \Modules\Food\Models\RestaurantMap::class,
        //'contact'			=>     	\Modules\Food\Models\Contact::class,
        'bell_boy'			=> 		\Modules\Food\Models\BellBoy::class,
        */
    ],
    'roots' => [
        'restaurant',
        'profile',
        //'cuisineCat',
    ],
    'migrate_packs' => [
        'xra',
        'blog',
        'lu',
        'import',
        'food',
        'seo',
        'backend',
    ],
    'enable_packs' => [
        'frontend',
        'backend',
        'lu',
        'blog',
        'extend',
        'import',
        'food',
        //  'seo',
        'xra',
        'settings',
    ],
    'primary_lang' => 'it',
    'related' => [
        'postCat' => [
            0 => 'post',
        ],
        'cuisine' => [
            0 => 'ingredientCat',
            1 => 'recipe',
        ],
        'ingredientCat' => [
            0 => 'ingredient',
        ],
        'restaurant' => [
            0 => 'cuisine',
            1 => 'cuisineCat',
        ],
        'home' => [
        ],
    ],
];

return $def;
