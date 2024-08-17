<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
  </head>

  <body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('chi.siamo')}}">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('teachers')}}">Docenti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container-fluid vh-100 bg-background">
        <div class="row h-75 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center dislpay-4 title">
                    I nostri studenti
                </h1>
            </div>
        </div>

        <div class="row justify-content-center align-items center">
              @foreach ($students as $student )
              <div class="col-12 col-md-3 py-5">
                <div class="card mx-auto" style="width: 18rem;">
                  <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{$student['name']}} {{$student['surname']}}</5>                    
                    <a href="{{route('student.detail', ['id'=>$student['id']])}}" class="btn btn-primary">Vai al dettaglio</a>
                  </div>
                </div>
              </div>
              @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>