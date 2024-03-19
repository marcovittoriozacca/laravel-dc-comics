<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //prendiamo tutti i comics dal db

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

        $comics = Comic::all();
        return view('comics.index', compact('comics', 'navLinks', 'footerLinks', 'socials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //accediamo alla pagine contenente il form
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
        return view('comics.create', compact('navLinks', 'footerLinks', 'socials'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //creiamo il nuovo fumetto
        $formData = $request->all();

        $newComic = new Comic();
        
        $newComic->fill($formData);

        $newComic->save();
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        //mostriamo il singolo fumetto cliccato
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

        return view('comics.show', compact('comic', 'navLinks', 'footerLinks', 'socials'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {

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

        return view('comics.edit', compact('comic', 'navLinks', 'footerLinks', 'socials'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $update_data = $request->all();
        $comic->update($update_data);

        return redirect()->route('comics.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
