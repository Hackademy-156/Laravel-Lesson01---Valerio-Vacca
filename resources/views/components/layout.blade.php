<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? "Titolo di Default"}}</title>
    {{-- coalescing operator -> opertaore ternario contratto --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- mai mettere il ; finale, sennò non funziona! --}}
</head>

<body>
    {{-- alt + shif + F dopo aver selezionato tutto il codice --}}

    <x-navbar/>
    
        <div class="min-vh-100">
            {{$slot}}
        </div>

    <x-footer/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- collego il mio javascript --}}
    <script src="/js/index.js"></script>
</body>

</html>
