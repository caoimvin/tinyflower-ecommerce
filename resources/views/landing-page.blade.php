<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Ecommerce Example</title>

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
                <div class="logo">TinyFlower</div>
                    {{ menu('main', 'partials.menus.main') }}
                </div>
                <div class="top-nav-right">
                    @include('partials.menus.main-right')
                </div>
            </div> <!-- end top-nav -->
            <div class="hero container">
                <div class="hero-image">
                    {{-- <img src="img/" alt="hero image"> --}}
                </div> <!-- end hero-image -->
                <div class="hero-copy">
                    <h1>Pflanzen und Blumen für zuhause</h1>
                    <p>Die Pflanzen-Boutique im Internet für jeden Geschmack. Hier ist für jeden Haushalt etwas dabei.</p>
                    <div class="hero-buttons">
                        <a href="{{ route('shop.index') }}" class="button">Shop</a>
                        <a href="http://kevinmissback.com" class="button">Über Uns</a>
                    </div>
                </div> <!-- end hero-copy -->

            </div> <!-- end hero -->
        </header>

        <div class="featured-section">

            <div class="container">
                <h1 class="text-center">Schauen Sie sich unser Angebot an.</h1>

                <p class="section-description">Von kleinen bis großen Pflanzen und Blumen ist alles dabei. Schauen sie sich doch mal auf unserer Internetseite um, hier gibt es viel zu entdecken.</p>

                {{-- <div class="text-center button-container">
                    <a href="#" class="button">Featured</a>
                    <a href="#" class="button">On Sale</a>
                </div> --}}

                <div class="products text-center">
                    @foreach ($products as $product)
                        <div class="product">
                            <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ asset('storage/' . $product->image) }}" alt="product"></a>
                            {{-- <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product"></a> --}}
                            <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                            <div class="product-price">{{ $product->presentPrice() }}</div>
                        </div>
                    @endforeach

                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="{{ route('shop.index') }}" class="button">Mehr Pflanzen entdecken</a>
                </div>

            </div> <!-- end container -->

        </div> <!-- end featured-section -->

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">Aus unserem Blog</h1>

                <p class="section-description">Wir kennen uns mit Pflanzen aus, egal ob Rhododendren oder Viola, dass kann man auch in unserem Blog sehen. Hier findet Ihr neue und interessante Themen ganz über die Welt der Pflanzen und wie man sie am besten in die heimischen vier Wände bekommt.</p>

                <div class="blog-posts">
                    <div class="blog-post" id="blog1">
                        <a href="#"><img src="/img/blog-post1.jpg" alt="Blog Image"></a>
                        <a href="#"><h2 class="blog-title">Wasser was braucht es mehr ...</h2></a>
                        <div class="blog-description">Brauchen Blumen nur Wasser und Licht oder ist es dann doch noch mehr als man vermuten könnte.</div>
                    </div>
                    <div class="blog-post" id="blog2">
                        <a href="#"><img src="/img/blog-post2.jpg" alt="Blog Image"></a>
                        <a href="#"><h2 class="blog-title">Dünger das hilt</h2></a>
                        <div class="blog-description">Wie man Pflanzen gut düngt damit sie vital und viel Kraft besitzen erklären wir euch heute.</div>
                    </div>
                    <div class="blog-post" id="blog3">
                        <a href="#"><img src="/img/blog-post3.jpg" alt="Blog Image"></a>
                        <a href="#"><h2 class="blog-title">Ein Meer voll Blüten</h2></a>
                        <div class="blog-description">Es gibt Pflanzen da ist es ein Anlass zur Freude wenn dies blühen, wir zeigen welche.</div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div> <!-- end blog-section -->

        @include('partials.footer')


    </body>
</html>
