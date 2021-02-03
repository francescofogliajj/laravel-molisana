<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>La Molisana</title>

        <!-- css -->
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        
    </head>
    <body>

        <header>
            <img src="{{ asset("img/marchio-sito-test.png") }}" alt="la-molisana">
            <ul class="list-inline">
                <li class="active">
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Prodotti</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
            </ul>
        </header>

        <main>
            <section class="container">
                <h2>Le Lunghe</h2>
                <div class="cards">
                    @foreach ($lunghe as $pasta)
                        <div class="card">
                            <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
                            <div class="card-text">
                                <a href="#">{{ $pasta["titolo"] }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="container">
                <h2>Le Corte</h2>
                <div class="cards">
                    @foreach ($corte as $pasta)
                        <div class="card">
                            <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
                            <div class="card-text">
                                <a href="#">{{ $pasta["titolo"] }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="container">
                <h2>Le Cortissime</h2>
                <div class="cards">
                    @foreach ($cortissime as $pasta)
                        <div class="card">
                            <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
                            <div class="card-text">
                                <a href="#">{{ $pasta["titolo"] }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </main>

        <footer></footer>
    </body>
</html>
