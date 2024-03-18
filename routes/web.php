<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//home page
Route::get('/', function () {
    // navbar links
    $navLinks = [
        [
            "name" => "characters",
            "url" => "characters",
        ],
        [
            "name" => "comics",
            "url" => "comics",
        ],
        [
            "name" => "movies",
            "url" => "movies",
        ],
        [
            "name" => "tv",
            "url" => "tv",
        ],
        [
            "name" => "games",
            "url" => "games",
        ],
        [
            "name" => "collectibles",
            "url" => "collectibles",
        ],
        [
            "name" => "videos",
            "url" => "videos",
        ],
        [
            "name" => "fans",
            "url" => "fans",
        ],
        [
            "name" => "news",
            "url" => "news",
        ],
        [
            "name" => "shop",
            "url" => "shop",
        ],
    ];
    //comics from config/db
    $comics = config('comics');
    //footer links
    $footerLinks = [
        [
            "title" => 'dc comics',
            "links" => [
                [
                    "link" => 'characters',
                    "url" => "characters"
                ],
                [
                    "link" => 'comics',
                    "url" => "comics"
                ],
                [
                    "link" => 'movies',
                    "url" => "movies"
                ],
                [
                    "link" => 'TV',
                    "url" => "tv"
                ],
                [
                    "link" => 'games',
                    "url" => "games"
                ],
                [
                    "link" => 'videos',
                    "url" => "videos"
                ],
                [
                    "link" => 'news',
                    "url" => "news"
                ],
            ]
        ],
        [
            "title" => 'shop',
            "links" => [
                [
                    "link" => 'shop dc',
                    "url" => 'shop'
                ],
                [
                    "link" => 'shop dc collectibles',
                    "url" => 'collectibles'
                ],
            ]
        ],
        [
            "title" => 'dc',
            "links" => [
                [
                    "link" => 'terms of use',
                    "url" => 'terms'
                ],
                [
                    "link" => 'privacy polacy (new)',
                    "url" => 'privacy'
                ],
                [
                    "link" => 'ad choices',
                    "url" => 'adchoice'
                ],
                [
                    "link" => 'advertising',
                    "url" => 'ads'
                ],
                [
                    "link" => 'jobs',
                    "url" => 'careers'
                ],
                [
                    "link" => 'subscriptions',
                    "url" => 'subscriptions'
                ],
                [
                    "link" => 'talent workshops',
                    "url" => 'workshops'
                ],
                [
                    "link" => 'cpsc certificates',
                    "url" => 'cpsc'
                ],
                [
                    "link" => 'ratings',
                    "url" => 'ratings'
                ],
                [
                    "link" => 'shop help',
                    "url" => 'shop-help'
                ],
                [
                    "link" => 'contact us',
                    "url" => 'contacts'
                ],
            ]
        ],
        [
            "title" => 'sites',
            "links" => [
                [
                    "link" => 'dc',
                    "url" => 'dc'
                ],
                [
                    "link" => 'mad magazine',
                    "url" => 'mad-magazine'
                ],
                [
                    "link" => 'dc kids',
                    "url" => 'kids'
                ],
                [
                    "link" => 'dc universe',
                    "url" => 'dc-universe'
                ],
                [
                    "link" => 'dc power visa',
                    "url" => 'dc-powervisa'
                ],
            ]
        ]
    ];
    //footer socials links
    $socials = [
        [
            "name" => "facebook",
            "icon" => "fab fa-facebook-f",
            "url" => "#",
        ],
        [
            "name" => "twitter",
            "icon" => "fab fa-twitter",
            "url" => "#",
        ],
        [
            "name" => "youtube",
            "icon" => "fab fa-youtube",
            "url" => "#",
        ],
        [
            "name" => "pintarest",
            "icon" => "fab fa-pinterest-p",
            "url" => "#",
        ],
        [
            "name" => "location",
            "icon" => "fas fa-location-dot",
            "url" => "#",
        ],
    ];

    return view('Comics.index', compact('navLinks', 'comics', 'footerLinks', 'socials'));
})->name('Comics.index');
