<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- collego il mio css --}}
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Welcome</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('chiSiamo')}}">Chi Siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('doveAndiamo')}}">Dove Andiamo?</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    
      <header class="container-fluid bg-homepage">
            <div class="row vh-100">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <h1 class="display-1 fw-bold text-decoration-underline">Pagina Dettaglio</h1>
                </div>

                <div class="col-12 d-flex flex-column align-items-center">
                    <h2>{{$student['name']}} {{$student['surname']}} </h2>
                    <h4>Ciao, ho {{$student['age']}} anni e la mia materia preferita è {{$student['subject']}}</h4>
                    <a href="{{route('chiSiamo')}}" class="btn btn-success">Tornare Indietro</a>
                </div>
            </div>
      </header>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- collego il mio javascript --}}
    <script src="/js/index.js"></script>
  </body>
</html>