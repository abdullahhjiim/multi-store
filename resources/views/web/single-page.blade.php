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
        .list-footer ul {
            list-style: none;
        }

        .header-content {
            background: linear-gradient(#fff,#f3f3f3);
            padding: 0 20px;
            height: auto;
            width: 100%;
            border-radius: 5px 5px 0 0;
        }

        .location-area {
            color: #fff;
            border: 3px solid #d9217d;
            border-radius: 5px;
            background-color: #d9217d;
        }
        .location-area :hover {
            background-color: #ffffff;
            color: black;
        }
        .location-area p {
            padding: 10px;
        }
        .item-single {
            font-size: 14px;
            display: block;
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
            border: 1px solid #d9217d;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        .item-single-product {
            font-size: 14px;
            display: block;
            width: 100%;
            padding-top: 10px;
            border: 1px solid #d9217d;
            margin-bottom: 10px;
            border-radius: 10px;
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

    <div class="title-content" style="margin-top: 70px">
        <div class="row">
            <div class="header-content">
                <h4>B&M catalogs and flyers</h4>
            </div>
            <div class="" style="margin-top: 10px">
                <p style="font-size: 11px">If you're looking for B&M catalogs on the web, you've come to the right place. We offer you the latest brochures of the B&M brand, which will allow you to obtain unbeatable prices and the good deals available in your store. If you want to save money with promotions offered in the ads of the week from the B&M store and take advantage of the special offers and weekly promotions from the B&M store , then you have come to the right site.</p>
            </div>
        </div>
    </div>

    <div class="location-search">
        <div class="row">
            <div class="col-12" style="padding: 0 10px">
                <div class="location-area">
                    <p>Catalogs may only be valid in certain stores.</p>
                </div>
            </div>
            <div class="col-12">
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
        </div>
    </div>

    <div class="row" style="margin-top: 40px">
        <div class="col-12 text-center">
            <h1>B&M ARCHIVES</h1>
        </div>
        <div class="content-details">
            <div class="">
                <p style="font-weight: bold; font-size: 12px">The best B&M catalogs and leaflets available on the Internet</p>
                <p style="font-size: 11px">We inform you about almost all the promotions and advertisements offered throughout France! Whether they are in the catalogue, on the Internet or offline, you can consult them on our site.</p>
            </div>

            <div class="">
                <p style="font-weight: bold; font-size: 12px">Discover unmissable B&M</p>
                <p style="font-size: 11px">deals Thousands of people like you want to save money in their B&M store . Thanks to all the information we have on the promotions offered by B&M, you can get the most attractive prices and realize real savings. Just check out the latest catalogs and flyers available on our site to find out how you can save money on quality products. Remember that success depends on your ability to save!</p>
            </div>
            <div class="">
                <p style="font-weight: bold; font-size: 12px">Invest time to earn money!</p>
                <p style="font-size: 11px">What matters when it comes to saving money is the necessary mindset. You may only save a few dollars for now, but every little bit helps and saving through store catalogs is a great way to put your money to good use. All you need is. It takes a bit of time, but our flyers can save you a lot of money!</p>
            </div>
            <div class="">
                <p style="font-size: 11px">On this page you will find 1 current B&M catalogs valid until 06/28/2022 . In these catalogs, discover special offers and sales, mainly on products from the DIY, garden, home category , in particular: home , windscreen washer, suitcase, fan, air freshener, water bottle, pencil, coloring, sheet, bag , that you can buy in one of the 96 stores in Marseille , Nîmes, Brest, Le Mans, Mulhouse, etc. If you are interested in discounts, promotions or special offers from other stores, consult the flyers of one of the 228 retailers available on Your Promos . You will also be able to browse the B&M archives to view 59 catalogs that are no longer valid.</p>
            </div>

        </div>
    </div>

    <div class="row" style="margin-top: 40px">
        <div class="col-12 text-center" style="margin-bottom: 20px">
            <h1>B&M Stores</h1>
        </div>
        <div class="col-4">
            <div class="">
                <a href="" class="text-center item-single" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                    <p style="color: #d9217d">Marseille Grand Littoral Shopping Center ZAC Saint André BP 326</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                    <p style="color: #d9217d">Marseille Grand Littoral Shopping Center ZAC Saint André BP 326</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                    <p style="color: #d9217d">Marseille Grand Littoral Shopping Center ZAC Saint André BP 326</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                    <p style="color: #d9217d">Marseille Grand Littoral Shopping Center ZAC Saint André BP 326</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                    <p style="color: #d9217d">Marseille Grand Littoral Shopping Center ZAC Saint André BP 326</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                    <p style="color: #d9217d">Marseille Grand Littoral Shopping Center ZAC Saint André BP 326</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                    <p style="color: #d9217d">Marseille Grand Littoral Shopping Center ZAC Saint André BP 326</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                    <p style="color: #d9217d">Marseille Grand Littoral Shopping Center ZAC Saint André BP 326</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                    <p style="color: #d9217d">Marseille Grand Littoral Shopping Center ZAC Saint André BP 326</p>
                </a>
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


    <div class="row" style="margin-top: 40px">
        <div class="col-12 text-center" style="margin-bottom: 20px">
            <h1>Products</h1>
        </div>
        <div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
            </div>
        </div><div class="col-4">
            <div class="">
                <a href="" class="text-center item-single-product" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                    <p style="color: #d9217d">B&M</p>
                </a>
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



    <div class="">
        <p style="font-size: 12px">Here you will find all the latest catalogs and promotions on a selection of items. Don't miss fantastic low prices. Shop smart. Search and easily find current promotions in one place: our site. No matter what you're looking for, search by categories, locations, product types or your favorite store. Don't miss a thing - always be up to date with all the specials and limited offers from the most popular stores in your country. Find supermarkets and grocery stores like Auchan, Carrefour, Aldi and Leclerc. Do-it-yourselfers will appreciate the good deals from Castorama or Mr. Bricolage. Take advantage of incredible promotions on beautiful furniture from major brands like IKEA or Conforama.</p>
    </div>

    <div class="footer">
        <div class="row">
            <div class="" style="background:#f7f7f7; width: 100%;padding-top: 14px">
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


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
