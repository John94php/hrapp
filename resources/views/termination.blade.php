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

  <form action ="/addpdf" method="post">
    @csrf
  <div class="container jumbotron">
  <div class="row">
    <div class="col-md-4 alert alert-dark">Pracodawca: 
    
    <p>{{$companyName}}</p>
    <p>{{$companyAddress}}</p>
    </div>
    <div class="col-md-4 offset-md-4 alert alert-dark">Pracownik
      <p>{{$name_contract}} {{$surname_contract}}</p>
<p>Zamieszkały: {{$corrCode}} {{$corrCity}} {{$corrStreet}} {{$corrHouse}} {{$corrFlat}}</p>
<p>Zameldowany: {{$regCode}} {{$regCity}} {{$regStreet}} {{$regHouse}} {{$regFlat}}</p>
<p>Numer PESEL: {{$pesel_contract}} </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-2 alert alert-light">{{$title}}
<h3>Wypowiedzenie umowy o charakterze {{$typeContract}} z zachowaniem okresu wypowiedzenia</h3>
<p>Niniejszym wypowiadam umowę o charakterze {{$typeContract}} zawartą dnia {{$dateContract}} w {{$companyCity}} pomiędzy {{$fnameCompany}} a pracownikiem {{$name_contract}} {{$surname_contract}}.</p>
<br>
<p>Informuję jednocześnie, że okres wypowiedzenia upływa w dniu {{date('d.m.Y',strtotime('+14 days'))}}</p>
<p>Przyczyną wypowiedzenia umowy jest : </p>
<br>
<p>Jednocześnie informuję, że przysługuje Pani/Panu, w terminie 7 dni od dnia otrzymania niniejszego wypowiedzenia, prawo do wniesienia odwołania do Sądu Pracy  - </p>
    </div>

    </div>

  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <input type="hidden" name="companyName" value="{{$companyName}}"/>
      <input type="hidden" name="companyAddress" value="{{$companyAddress}}"/>
      <input type="hidden" name="fname" value="{{$name_contract}} {{$surname_contract}}"/>
      <input type="hidden" name="regAddress" value="{{$regCode}} {{$regCity}} {{$regStreet}} {{$regHouse}} {{$regFlat}}"/>
      <input type="hidden" name="corrAddress" value="{{$corrCode}} {{$corrCity}} {{$corrStreet}} {{$corrHouse}} {{$corrFlat}}"/>
      <input type="hidden" name="pesel_contract" value="{{$pesel_contract}}"/>
      <input type="hidden" name="typeContract" value="{{$typeContract}}"/>
      <input type="hidden" name="dateContract" value="{{$dateContract}}"/>
      <input type="hidden" name="fnameCompany" value="{{$fnameCompany}}"/>
      <input type="hidden" name="terminationdata" value="{{date('d.m.Y',strtotime('+14 days'))}}"/>
      <input type="hidden" name="created_at" value="{{date('d.m.Y')}}"/>

    </form>
  
    <button class="btn btn-outline-dark btn-block" type="submit">Zatwierdź</button>

</form>
  <a href="/list" class="btn btn-outline-danger btn-block">Anuluj zmiany i wróć do listy</a>

    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>