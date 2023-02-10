<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Migration Seeder</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <section class="container">
            <div class="row">
                <div class="col-12">
                    <h1>
                        Treni
                    </h1>
                    <h2>Treni del giorno</h2>
                </div>
            </div>
        </section>
    </header>

    <main>
        <section class="container">
            <div class="row">
                @forelse ($trains as $train)
                    <div class="col-3">
                        <p>
                            Codice del treno: {{ $train->codice_treno }}
                        </p>
                        <h5>
                            Stazione di partenza: {{ $train->stazione_di_partenza }}
                        </h5>
                        <h5>
                            Stazione di arrivo: {{ $train->stazione_di_arrivo }}
                        </h5>
                        <h5>
                            Orario di partenza: {{ $train->orario_di_partenza }}
                        </h5>
                        <p>
                            Azienda: {{ $train->azienda }}
                        </p>
                    </div>
                @empty
                    <p>Non ci sono treni da mostrare</p>
                @endforelse
            </div>
        </section>
    </main>

</body>

</html>
