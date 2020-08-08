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
  <body class="jumbotron">
    <div class="wrap">
  <h1 class="alert alert-dark">{{$title}}</h1>   
  <table class="table table-bordered">
    <tr>
      <td><label class="{{$labelclass}}">{{$label1}}</label>
      <td><input type="text" class="form-control" name="corrCountry" placeholder="jezeli brak zmiany wpisz poprzednie : {{$corrCountry}}"/></td>
    </tr>
    <tr>
      <td><label class="{{$labelclass}}">{{$label2}}</label>
      <td><input type="text" class="form-control" name="corrCode" placeholder="jezeli brak zmiany wpisz poprzednie : {{$corrCode}}"/></td>
    </tr>

    <tr>
      <td><label class="{{$labelclass}}">{{$label3}}</label>
      <td><input type="email" class="form-control" name="corrCity" placeholder="jezeli brak zmiany wpisz poprzednie : {{$corrCity}}"/></td>
    </tr>

    <tr>
      <td><label class="{{$labelclass}}">{{$label4}}</label>
      <td><input type="email" class="form-control" name="corrStreet" placeholder="jezeli brak zmiany wpisz poprzednie : {{$corrStreet}}"/></td>
    </tr>
    
    <tr>
      <td><label class="{{$labelclass}}">{{$label5}}</label>
      <td><input type="text" class="form-control" name="regHouse" placeholder="jezeli brak zmiany wpisz poprzednie : {{$corrHouse}}"/></td>
    </tr>
    <tr>
      <td><label class="{{$labelclass}}">{{$label6}}</label>
      <td><input type="text" class="form-control" name="regFlat" placeholder="jezeli brak zmiany wpisz poprzednie : {{$corrFlat}}"/></td>
    </tr>

  </table>
  <button type="submit" class="btn btn-sm btn-outline-success btn-block">Zapisz</button>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>