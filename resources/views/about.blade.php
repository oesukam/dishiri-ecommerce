<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashiki</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <header class="with-background">
            <div class="top-nav container">
                <div class="top-nav-left">
                    <div class="logo">Ecommerce</div>
                    {{ menu('main', 'partials.menus.main') }}
                </div>
                <div class="top-nav-right">
                    @include('partials.menus.main-right')
                </div>
            </div> <!-- end top-nav -->
            <div class="hero container">
                <h1>Dashiki</h1>
            </div> <!-- end hero -->
        </header>
        <div class="container">
            <p style="padding: 20px 0px;">
                The dashiki is a colorful garment for women and men worn mostly in West Africa.
                It covers the top half of the body. It has formal and informal versions and varies 
                from simple draped clothing to fully tailored suits. 
                A common form is a loose-fitting pullover garment, with an ornate V-shaped collar,
                and tailored and embroidered neck and sleeve lines. It is frequently worn with a 
                brimless Kufi cap, which is worn in Islamic communities in Africa and the African diaspora, 
                and a pair of pants.
            </p>
        </div>

        @include('partials.footer')


    </body>
</html>
