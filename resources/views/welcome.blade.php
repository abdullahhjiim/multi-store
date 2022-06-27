<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .navigation a {
                font-size: 16px;
                margin-left: 10px;
                margin-right: 10px;
                list-style: none;
                color: hotpink;
            }
            .search-form {
                position: relative;
                width: 545px;
                margin: auto;
            }
            .list ul{
                list-style: none;
            }
            .list ul li{
                margin: 8px;
            }
            .list ul a:hover {
                text-decoration: none;
            }

        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body class="antialiased">
    <div class="container">
        <div class="row" style="margin-top: 50px; ">
            <div class="col-md-3">
                <div class="header" style="display: flex; flex-flow: row">
                    <a href="/" title="Welcome" aria-label="Welcome">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -2 512 522" width="60" height="60">
                            <path fill="none" d="M0 0h512v512H0z"></path>
                            <path d="M257-3a256 256 0 110 512 256 256 0 010-512zm1.5 79a178.5 178.5 0 100 357 178.5 178.5 0 000-357z" fill="#1D1D1B"></path>
                            <path d="M-16-12zm138.3 414l173-103.8-69.4-68.2-103.6 172z" fill="#999"></path>
                            <path d="M404 120L231 223.8l69.4 68.2L404 120z" fill="#D9217D"></path>
                        </svg>
                    </a>
                    <div class="logo-text">
                        <a href="/" title="Welcome" aria-label="Welcome">
                            <p style="margin-left: 5px; color: black; font-weight: bold;">Your <br> Promos</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="navigation" style="display: flex;flex-flow: row">
                    <a href="/magasins">Stores</a>
                    <a href="/categorie">Stores by Category</a>
                    <a href="/localisations">Locations</a>
                    <a href="/produits">Products</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 offset-3" style="margin-top: 20px">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type the product, brand, store ">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 70px">
            <div class="col-12 text-center">
                <h1>Stores</h1>
            </div>
            <div class="col-12" style="margin-top: 30px">
                <div class="list">
                    <ul style="display: flex;">
                            <li>
                                <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        HAS
                                    </span>
                                </a>
                            </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        B
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        VS
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        D
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        E
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        F
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        G
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        H
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        I
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        J
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        K
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        L
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        M
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        NOT
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        O
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        P
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        Q
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        R
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        S
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        T
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        W
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        X
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        Y
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                    <span class="item" style="border: 1px solid black; padding: 7px; color: black; font-weight: bold">
                                        Z
                                    </span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="text-center">
                    <p style="font-size: 11px">Find your favorite store.</p>
                </div>
            </div>
            <div class="col-10 offset-1" style="display: grid; grid-template-columns: repeat(5, 1fr)">
                <div class="single-item">
                    <div class="single-img" style="height: 80px; padding-bottom: 10px">
                        <img src="https://vos-promos.fr/public/gimg/3/4/8/5/3/2/348532-110-160.jpg" alt="" width="110" height="44">
                    </div>
                    <p style="font-size: 14px">E.Leclerc</p>
                </div>
                <div class="single-item">
                    <div class="single-img" style="height: 80px; padding-bottom: 10px">
                        <img src="https://vos-promos.fr/public/gimg/3/4/8/5/3/2/348532-110-160.jpg" alt="" width="110" height="44">
                    </div>
                    <p style="font-size: 14px">E.Leclerc</p>
                </div>
                <div class="single-item">
                    <div class="single-img" style="height: 80px; padding-bottom: 10px">
                        <img src="https://vos-promos.fr/public/gimg/3/4/8/5/3/2/348532-110-160.jpg" alt="" width="110" height="44">
                    </div>
                    <p style="font-size: 14px">E.Leclerc</p>
                </div>
                <div class="single-item">
                    <div class="single-img" style="height: 80px; padding-bottom: 10px">
                        <img src="https://vos-promos.fr/public/gimg/3/4/8/5/3/2/348532-110-160.jpg" alt="" width="110" height="44">
                    </div>
                    <p style="font-size: 14px">E.Leclerc</p>
                </div>
                <div class="single-item">
                    <div class="single-img" style="height: 80px; padding-bottom: 10px">
                        <img src="https://vos-promos.fr/public/gimg/3/4/8/5/3/2/348532-110-160.jpg" alt="" width="110" height="44">
                    </div>
                    <p style="font-size: 14px">E.Leclerc</p>
                </div>

            </div>
            <div class="col-10 offset-1" style="display: grid; grid-template-columns: repeat(5, 1fr)">
                <div class="single-item">
                    <div class="single-img" style="height: 80px; padding-bottom: 10px">
                        <img src="https://vos-promos.fr/public/gimg/3/4/8/5/2/3/348523-110-160.jpg" alt="" width="110" height="44">
                    </div>
                    <p style="font-size: 14px">E.Leclerc</p>
                </div>
                <div class="single-item">
                    <div class="single-img" style="height: 80px; padding-bottom: 10px">
                        <img src="https://vos-promos.fr/public/gimg/3/4/8/5/2/3/348523-110-160.jpg" alt="" width="110" height="44">
                    </div>
                    <p style="font-size: 14px">E.Leclerc</p>
                </div>
                <div class="single-item">
                    <div class="single-img" style="height: 80px; padding-bottom: 10px">
                        <img src="https://vos-promos.fr/public/gimg/3/4/8/5/2/3/348523-110-160.jpg" alt="" width="110" height="44">
                    </div>
                    <p style="font-size: 14px">E.Leclerc</p>
                </div>
                <div class="single-item">
                    <div class="single-img" style="height: 80px; padding-bottom: 10px">
                        <img src="https://vos-promos.fr/public/gimg/3/4/8/5/2/3/348523-110-160.jpg" alt="" width="110" height="44">
                    </div>
                    <p style="font-size: 14px">E.Leclerc</p>
                </div>
                <div class="single-item">
                    <div class="single-img" style="height: 80px; padding-bottom: 10px">
                        <img src="https://vos-promos.fr/public/gimg/3/4/8/5/2/3/348523-110-160.jpg" alt="" width="110" height="44">
                    </div>
                    <p style="font-size: 14px">E.Leclerc</p>
                </div>

            </div>
        </div>

        <div class="row" style="margin-top: 40px">
            <div class="col-12 text-center">
                <h1>Most popular catalogs</h1>
            </div>
            <div class="col-12" style="margin-top: 30px">
                <div class="row">
                    <div class="col-md-3">
                        <div class="leaflet-thumb">
                            <a href="/e-leclerc-catalogues" title="E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION">
                                <div class="name">
                                    <p style="font-size: 13px; color: black" >E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION</p>
                                </div>
                            </a>
                            <div class="leaflet-img-mobile-detail-flex">
                                <a class="leaflet-img-mobile-detail-flex" href="/e-leclerc-catalogues" title="E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION">
                                    <div class="leaflet-img">
                                        <img loading="lazy" alt="E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION" height="300px" width="220px" src="https://vos-promos.fr/public/gimg/2/9/7/6/5/5/0/catalogue-e-leclerc-21-06-2022-02-07-2022--2976550-350-580.jpg">
                                    </div>
                                </a>
                            </div>
                            <a href="/e-leclerc-catalogues">
                                <small style="font-size: 11px; color: black">07/06 - 25/06/2022</small>
                            </a>
                            <div class="">
                                <a href="/e-leclerc-catalogues" style="font-size: 11px; color: black">View catalog</a>
                            </div>
                        </div>
                    </div><div class="col-md-3">
                        <div class="leaflet-thumb">
                            <a href="/e-leclerc-catalogues" title="E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION">
                                <div class="name">
                                    <p style="font-size: 13px; color: black" >E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION</p>
                                </div>
                            </a>
                            <div class="leaflet-img-mobile-detail-flex">
                                <a class="leaflet-img-mobile-detail-flex" href="/e-leclerc-catalogues" title="E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION">
                                    <div class="leaflet-img">
                                        <img loading="lazy" alt="E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION" height="300px" width="220px" src="https://vos-promos.fr/public/gimg/2/9/7/6/5/5/0/catalogue-e-leclerc-21-06-2022-02-07-2022--2976550-350-580.jpg">
                                    </div>
                                </a>
                            </div>
                            <a href="/e-leclerc-catalogues">
                                <small style="font-size: 11px; color: black">07/06 - 25/06/2022</small>
                            </a>
                            <div class="">
                                <a href="/e-leclerc-catalogues" style="font-size: 11px; color: black">View catalog</a>
                            </div>
                        </div>
                    </div><div class="col-md-3">
                        <div class="leaflet-thumb">
                            <a href="/e-leclerc-catalogues" title="E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION">
                                <div class="name">
                                    <p style="font-size: 13px; color: black" >E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION</p>
                                </div>
                            </a>
                            <div class="leaflet-img-mobile-detail-flex">
                                <a class="leaflet-img-mobile-detail-flex" href="/e-leclerc-catalogues" title="E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION">
                                    <div class="leaflet-img">
                                        <img loading="lazy" alt="E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION" height="300px" width="220px" src="https://vos-promos.fr/public/gimg/2/9/7/6/5/5/0/catalogue-e-leclerc-21-06-2022-02-07-2022--2976550-350-580.jpg">
                                    </div>
                                </a>
                            </div>
                            <a href="/e-leclerc-catalogues">
                                <small style="font-size: 11px; color: black">07/06 - 25/06/2022</small>
                            </a>
                            <div class="">
                                <a href="/e-leclerc-catalogues" style="font-size: 11px; color: black">View catalog</a>
                            </div>
                        </div>
                    </div><div class="col-md-3">
                        <div class="leaflet-thumb">
                            <a href="/e-leclerc-catalogues" title="E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION">
                                <div class="name">
                                    <p style="font-size: 13px; color: black" >E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION</p>
                                </div>
                            </a>
                            <div class="leaflet-img-mobile-detail-flex">
                                <a class="leaflet-img-mobile-detail-flex" href="/e-leclerc-catalogues" title="E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION">
                                    <div class="leaflet-img">
                                        <img loading="lazy" alt="E.Leclerc catalog - HOLIDAY DEPARTURE SELECTION" height="300px" width="220px" src="https://vos-promos.fr/public/gimg/2/9/7/6/5/5/0/catalogue-e-leclerc-21-06-2022-02-07-2022--2976550-350-580.jpg">
                                    </div>
                                </a>
                            </div>
                            <a href="/e-leclerc-catalogues">
                                <small style="font-size: 11px; color: black">07/06 - 25/06/2022</small>
                            </a>
                            <div class="">
                                <a href="/e-leclerc-catalogues" style="font-size: 11px; color: black">View catalog</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="">
            <p style="font-size: 12px">Here you will find all the latest catalogs and promotions on a selection of items. Don't miss fantastic low prices. Shop smart. Search and easily find current promotions in one place: our site. No matter what you're looking for, search by categories, locations, product types or your favorite store. Don't miss a thing - always be up to date with all the specials and limited offers from the most popular stores in your country. Find supermarkets and grocery stores like Auchan, Carrefour, Aldi and Leclerc. Do-it-yourselfers will appreciate the good deals from Castorama or Mr. Bricolage. Take advantage of incredible promotions on beautiful furniture from major brands like IKEA or Conforama.</p>
        </div>

        <div class="footer">
            <div class="row">
                <div class="" style="background:#f7f7f7; height: 300px; width: 100%">
                    <div class="list-footer">
                        <ul>
                            <li style="font-weight: bold; margin-bottom: 10px">INSIGHT</li>
                            <li>Stores</li>
                            <li>Stores by categories</li>
                            <li>Locations</li>
                            <li>Products</li>
                            <li>Archived catalogs</li>
                            <li>About Us</li>
                            <li>Download a missing catalog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>


{{--        <div class="header row">--}}
{{--            <div class="col-sm-3">--}}
{{--                <div class="logo logo-mobile">--}}
{{--                    <a href="/" title="Welcome" aria-label="Welcome">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -2 512 522">--}}
{{--                            <path fill="none" d="M0 0h512v512H0z"></path>--}}
{{--                            <path d="M257-3a256 256 0 110 512 256 256 0 010-512zm1.5 79a178.5 178.5 0 100 357 178.5 178.5 0 000-357z" fill="#1D1D1B"></path>--}}
{{--                            <path d="M-16-12zm138.3 414l173-103.8-69.4-68.2-103.6 172z" fill="#999"></path>--}}
{{--                            <path d="M404 120L231 223.8l69.4 68.2L404 120z" fill="#D9217D"></path>--}}
{{--                        </svg>--}}
{{--                    </a>--}}
{{--                    <div class="logo-text">--}}
{{--                        <a href="/" title="Welcome" aria-label="Welcome">--}}
{{--                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Your </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Promos</font></font></p>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="visible-md visible-lg">--}}
{{--                <div class="col-sm-9">--}}
{{--                    <div class="navication">--}}
{{--                        <a href="/hot-deals"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hot Deals </font></font></a>--}}
{{--                        <a href="/magasins"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Stores </font></font></a>--}}
{{--                        <a href="/categorie"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Stores by Category </font></font></a>--}}
{{--                        <a href="/localisations"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Locations </font></font></a>--}}
{{--                        <a href="/produits"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Products</font></font></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="visible-xs visible-sm">--}}
{{--                <div class="col-sm-1 mobile-navication">--}}
{{--                    <div class="slicknav-btn">--}}
{{--                        <div class="menu">--}}
{{--                            <div class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">--}}
{{--                                        Menu--}}
{{--                                    </font></font></div>--}}
{{--                            <div class="icon-btn">--}}
{{--                                <div class="icon-bar"></div>--}}
{{--                                <div class="icon-bar"></div>--}}
{{--                                <div class="icon-bar"></div>--}}
{{--                            </div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <div id="search-input" class="mobile-navication">--}}
{{--                    <div class="nav">--}}
{{--                        <div class="searchbar">--}}
{{--                            <form action="/" method="post" id="frm-searchBarForm-form">--}}
{{--                                <div>--}}
{{--                                    <div class="search-form">--}}
{{--                                        <input type="text" name="search" placeholder="Type the product, brand, store" class="searchInputWithImage" id="frm-searchBarForm-form-search" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Commencez votre recherche en tapant le nom d'un article dans la barre de recherche&quot;}]">--}}
{{--                                        <input type="submit" name="_submit" class="hidden" id="searchBarSubmitMobile">--}}
{{--                                        <img class="icon" src="/www/img/searchBarIcon.svg" alt="search bar icon">--}}
{{--                                        <img src="/www/img/close.svg" alt="close" class="close visible-xs visible-sm">--}}
{{--                                    </div>--}}
{{--                                    <div class="search-icon visible-xs visible-sm">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <input type="hidden" name="_do" value="searchBarForm-form-submit"><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]-->--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="clearfix"></div>--}}
{{--        </div>--}}

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
