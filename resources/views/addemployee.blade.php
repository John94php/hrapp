<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5629bafd13.js" crossorigin="anonymous"></script>

    <title>Dodawanie nowej umowy</title>
  </head>
  <body>
    <h3>Dodaj nową umowę</h3>
    <div class=" jumbotron jumbotron-fluid">
    <h1></h1>
    <form action="submit" method="post" name="form1">
      @csrf
      <table class="table table-sm">
        <tr>
          <td class="badge badge-info">Dział:</td>
         <td>    
               <select  class="form-control" name="branchContract">
            @foreach($branchlist as $el)

          <option value="{{$el}}">{{$el}}</option>

    @endforeach
    </select>

        </td>
        </tr>
        <tr>
          <td class="badge badge-info">Imię</td>
          <td ><input type="text" class="form-control" name="name_contract"/></td>
        </tr>
        <tr>
          <td class="badge badge-info">Nazwisko</td>
          <td ><input type="text" class="form-control" name="surname_contract"/></td>
        </tr>
        <tr>
          <td class="badge badge-info">PESEL</td>
          <td ><input type="text" class="form-control" name="pesel_contract"/></td>
        </tr>
        <tr>

        <tr>
          <td class="badge badge-info">NUMER I SERIA DOWODU OSOBISTEGO</td>
          <td ><input type="text" class="form-control" name="document_contract"/></td>
        </tr>
        <tr>
          <td class="badge badge-info">Adres e-mail</td>
          <td ><input type="text" class="form-control" name="email_contract"/></td>
        </tr>
        
        <tr>
          <td class="badge badge-info">Numer telefonu</td>
          <td ><input type="text" class="form-control" name="telephone_contract"/></td>
        </tr>
        <table class="table table-hovered">
        <tr>
          <td>&nbsp;</td>
          <td>Adres korespondencyjny</td>
</tr>
        <tr>
            <td class="badge badge-info">Kraj</td>
            <td><input type="text" class="form-control" name="corrCountry"/></td>
          </tr>
          <tr>
            <td class="badge badge-info">Kod pocztowy</td>
            <td><input type="text" class="form-control" name="corrCode"/></td>
          </tr>
          <tr>
            <td class="badge badge-info">Miejscowość</td>
            <td><input type="text" class="form-control" name="corrCity"/></td>
          </tr>
          <tr>
            <td class="badge badge-info">Ulica <p class="muted">Jeśli brak wpisz "-"</p></td>
            <td><input type="text" class="form-control" name="corrStreet"/></td>
          </tr>
          <tr>
            <td class="badge badge-info">Numer domu</td>
            <td><input type="text" class="form-control" name="corrHouse"/></td>
          </tr>
          <tr>
            <td class="badge badge-info">Numer lokalu <p class="muted">Jeśli brak wpisz "-"</p></td>
            <td><input type="text" class="form-control" name="corrFlat"/></td>
          </tr>
        </table>
        <table class="table table-hovered">
        <tr>
          <td>&nbsp;</td>
          <td>Adres zameldowania<input type="checkbox" name="box1" onChange="copy()"></td>
        </tr>  
        <tr>
            <td class="badge badge-info">Kraj</td>
            <td><input type="text" class="form-control" name="regCountry"/></td>
          </tr>
          <tr>
            <td class="badge badge-info">Kod pocztowy</td>
            <td><input type="text" class="form-control" name="regCode"/></td>
          </tr>
          <tr>
            <td class="badge badge-info">Miejscowość</td>
            <td><input type="text" class="form-control" name="regCity"/></td>
          </tr>
          <tr>
            <td class="badge badge-info">Ulica <p class="text-muted">Jeśli brak wpisz "-"</p></td>
            <td><input type="text" class="form-control" name="regStreet"/></td>
          </tr>
          <tr>
            <td class="badge badge-info">Numer domu</td>
            <td><input type="text" class="form-control" name="regHouse"/></td>
          </tr>
          <tr>
            <td class="badge badge-info">Numer lokalu <p class="text-muted">Jeśli brak wpisz "-"</p></td>
            <td><input type="text" class="form-control" name="regFlat"/></td>
          </tr>
          <tr>
        <td class="badge badge-info">Rodzaj umowy</td>
        <td><input type="text" class="form-control" name="typeContract">
        </tr>
        <tr>
        <td class="badge badge-info">Data podpisania umowy<p class="text-muted">Format daty YYYY-MM-DD</p></td>
        <td><input type="datetime" class="form-control" name="dateContract">
        </tr>
        </table>

        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><button class="btn btn-outline-success form-control" type="submit"><span class="fas fa-check"></span>&nbsp;Zapisz</button><button class="btn btn-outline-warning form-control" type="reset">Wyczyśc dane</button> 
        </tr>
      </table>
    </form>
    <a href="/welcomelog" class="btn btn-outline-primary">Powrót do strony głównej</a>
    </div>

    <!-- Optional JavaScript -->
    <script language="JavaScript">
  function copy() {
    if(!document.form1.regCountry.value)
    document.form1.regCountry.value=document.form1.corrCountry.value;
    else
    document.form1.regCountry.value ='';
  if(!document.form1.regCode.value)
  document.form1.regCode.value=document.form1.corrCode.value;
  else
  document.form1.regCode.value ='';
  if(!document.form1.regCity.value)
  document.form1.regCity.value=document.form1.corrCity.value;
  else
  document.form1.regCity.value ='';
  if(!document.form1.regStreet.value)
  document.form1.regStreet.value=document.form1.corrStreet.value;
  else
  document.form1.regStreet.value='';
  if(!document.form1.regHouse.value)
  document.form1.regHouse.value=document.form1.corrHouse.value;
  else
  document.form1.regHouse.value='';
  if(!document.form1.regFlat.value)
  document.form1.regFlat.value=document.form1.corrFlat.value;
  else
  document.form1.regFlat.value ='';
  }
  </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>