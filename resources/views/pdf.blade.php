<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: 'Firefly';
            font-style: normal;
            font-weight: light;

            src: url(http://example.com/fonts/firefly.ttf) format('truetype');
        }
    </style>
  </head>
  <body>
 <div class="container jumbotron" style="font-family: firefly, DejaVu Sans, sans-serif;font-size : 12px;">
  <div class="row">
  @foreach($show as $sh)
    <div class="col-md-4 alert alert-dark">Pracodawca: 
    
<p>{{$sh->companyName}}</p>
    </div>
    <div class="col-md-4 offset-md-4 alert alert-dark">Pracownik
      <p>
    {{$sh->fname}} 
       </p>
       <p>Numer PESEL : {{$sh->pesel_contract}}</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-2 alert alert-light">
<h3>Wypowiedzenie umowy o charakterze {{$sh->typeContract}} z zachowaniem okresu wypowiedzenia</h3>
<p>Niniejszym wypowiadam umowę o charakterze {{$sh->typeContract}} zawartą dnia {{$sh->dateContract}} w Gdańsk pomiędzy {{$sh->fnameCompany}} a pracownikiem {{$sh->fname}}.</p>
<br>
<p>Informuję jednocześnie, że okres wypowiedzenia upływa w dniu {{date('d.m.Y',strtotime('+14 days'))}}</p>
<p>Przyczyną wypowiedzenia umowy jest :A TAK BEZ POWODU XDDDDDD</p>
<br>
<p>Jednocześnie informuję, że przysługuje Pani/Panu, w terminie 7 dni od dnia otrzymania niniejszego wypowiedzenia, prawo do wniesienia odwołania do Sądu Pracy  - </p>
    </div>

</div>
@endforeach
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>