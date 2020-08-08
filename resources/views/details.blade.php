<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5629bafd13.js" crossorigin="anonymous"></script>
    <script>

function displayWindow(url, width, height) {
        var Win = window.open(url,"displayWindow",'width=' + width + ',height=' + height + ',resizable=0,scrollbars=yes,menubar=no' );
}
function refresh() {
  window.open('/list','_self');
}
</script>
    <title>{{$title}}</title>
  </head>
  <body >
  <div class="jumbotron jumbotron-fluid">
  <div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Dane podstawowe + kontaktowe </a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Adres zameldowania</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Adres korespondencyjny </a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Dane dot. umowy </a>
    </div>
  </div>
  <div class="col-9">
  <button onclick="refresh()" class="btn btn-sm btn-dark">Odśwież dane</button>
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
      <ul class="list-group">
        <label class="badge badge-iight"><a href="javascript:displayWindow('/edit/section1/{{$id_contract}}/{{$name_contract}}/{{$surname_contract}}/{{$pesel_contract}}/{{$document_contract}}/{{$telephone_contract}}/{{$email_contract}}',800,700)" class="btn btn-sm btn-outline-success"><span class="fas fa-pencil-alt"></span>&nbsp;Edytuj sekcję Dane podstawowe + kontaktowe</a></label>
        <li class="list-group-item"><label class="alert alert-primary">ID</label>&nbsp;{{$id_contract}}</li>
        <li class="list-group-item"><label class="alert alert-primary">Imię</label>&nbsp;{{$name_contract}} </li>
  <li class="list-group-item"><label class="alert alert-primary">Nazwisko</label>&nbsp;{{$surname_contract}} </li>
  <li class="list-group-item"><label class="alert alert-primary">Numer telefonu</label>&nbsp;{{$telephone_contract}} </li>
  <li class="list-group-item"><label class="alert alert-primary">Adres e-mail</label>&nbsp;{{$email_contract}}</li>
  <li class="list-group-item"><label class="alert alert-primary">PESEL</label>&nbsp;{{$pesel_contract}}</li>
  <li class="list-group-item"><label class="alert alert-primary">Dokument</label>&nbsp;{{$document_contract}} </li>
</ul>

      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      <ul class="list-group">
        <label  class="badge badge-iight"> <a href="javascript:displayWindow('/edit/section2/{{$id_contract}}/{{$regCode}}/{{$regCountry}}/{{$regCity}}/{{$regStreet}}/{{$regHouse}}/{{$regFlat}}',800,700)" class="btn btn-sm btn-outline-success"><span class="fas fa-pencil-alt"></span>&nbsp;Edytuj sekcję Adres zameldowania</a></label>
        <li class="list-group-item"><label class="alert alert-primary">Kod pocztowy</label>&nbsp;{{$regCode}} </li>
        <li class="list-group-item"><label class="alert alert-primary">Kraj</label>&nbsp;{{$regCountry}} </li>
        <li class="list-group-item"><label class="alert alert-primary">Miejscowość</label>&nbsp;{{$regCity}} </li>
        <li class="list-group-item"><label class="alert alert-primary">Ulica</label>&nbsp;{{$regStreet}} </li>
        <li class="list-group-item"><label class="alert alert-primary">Numer domu</label>&nbsp;{{$regHouse}}</li>
        <li class="list-group-item"><label class="alert alert-primary">Numer lokalu</label>&nbsp;{{$regFlat}}</li>
</ul>

      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
      <ul class="list-group">
        <label class="badge badge-light"><a href="javascript:displayWindow('/edit/section3/{{$id_contract}}/{{$corrCode}}/{{$corrCountry}}/{{$corrCity}}/{{$corrStreet}}/{{$corrHouse}}/{{$corrFlat}}',800,700)" class="btn btn-sm btn-outline-success"><span class="fas fa-pencil-alt"></span>&nbsp;Edytuj sekcję Adres korespondencyjny</a></label>
  <li class="list-group-item"><label class="alert alert-primary">Kraj</label>&nbsp;{{$corrCountry}} </li>
  <li class="list-group-item"><label class="alert alert-primary">Kod pocztowy</label>&nbsp;{{$corrCode}} </li>
  <li class="list-group-item"><label class="alert alert-primary">Miejscowość</label>&nbsp;{{$corrCity}} </li>
  <li class="list-group-item"><label class="alert alert-primary">Ulica</label>&nbsp;{{$corrStreet}} </li>
  <li class="list-group-item"><label class="alert alert-primary">Numer domu</label>&nbsp;{{$corrHouse}}</li>
  <li class="list-group-item"><label class="alert alert-primary">Numer lokalu</label>&nbsp;{{$corrFlat}} </li>
</ul>

      </div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
      <ul class="list-group">
        <label class="badge badge-light"><a href="javascript:displayWindow('/edit/section4/{{$id_contract}}/{{$typeContract}}/{{$dateContract}}/{{$branchContract}}',1200,500)" class="btn btn-sm btn-outline-success"><span class="fas fa-pencil-alt"></span>&nbsp;Edytuj sekcję Dane dot. umowy</a>
  <li class="list-group-item"><label class="alert alert-primary">Rodzaj umowy</label>&nbsp;{{$typeContract}} </li>
  <li class="list-group-item"><label class="alert alert-primary">Data podpisania umowy</label>&nbsp;{{$dateContract}}</li>
  <li class="list-group-item"><label class="alert alert-primary">Dział</label>&nbsp;{{$branchContract}}</li>
</ul>


      </div>
    </div>
  </div>
</div>
<a href="/welcomelog" class="btn btn-outline-primary">Powrót do strony głównej</a> 
<p class="text-muted">ALBO</p>
<a href="/list" class="btn btn-outline-secondary">Powrót do listy umów</a>
<div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>