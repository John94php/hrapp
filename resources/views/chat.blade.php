<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>{{$title}}</title>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
    <h1>{{$title}}</h1>

      <p class="text-muted alert alert-info">Temat wiadomości: <input type="text" maxlength="100" class="form-control" placeholder="Wpisz temat wiadomości(max. 100 znaków)"/></p>
      <p class="text-muted alert alert-info">Odbiorca: 
        <select>
        <option>...</option>
        <option>Tutaj pojawią się wszyscy pracownicy</option>
        </select>
      </p>
      <p class="text-muted alert alert-info">Treść wiadomości: 
      <textarea class="form-control" maxlength="250" placeholder="max. 250 znaków"></textarea>
      </p>
   
   
    </div>
    
    <a href="/welcomelog" class="btn btn-outline-primary">Powrót do strony głównej</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>