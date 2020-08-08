<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5629bafd13.js" crossorigin="anonymous"></script>
   

    <title>{{$title}}</title>
  </head>
  <body>
  <a href="/welcomelog" class="btn btn-outline-primary">Powrót do strony głównej</a>
    <div class=" jumbotron jumbotron-fluid">
    <h1>{{$title}}</h1>
        <table class="table table-hover">
            <thead>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>PESEL</th>
                <th>Typ umowy</th>
                <th>Data podpisania umowy</th>
                <th>Akcja</th>
            </thead>
            <tbody>
              @foreach($data as $d)
                <tr>
                    <td>{{$d->name_contract}}</td>
                    <td>{{$d->surname_contract}}</td>
                    <td>{{$d->pesel_contract}}</td>
                    <td>{{$d->typeContract}}</td>
                    <td>{{$d->dateContract}}</td>
                    <td style="display:grid">
                        <a class="btn btn-outline-success" href="/details/{{$d->id_contract}}/{{$d->name_contract}}/{{$d->surname_contract}}/{{$d->pesel_contract}}/{{$d->document_contract}}/{{$d->telephone_contract}}/{{$d->email_contract}}/{{$d->corrCountry}}/{{$d->corrCode}}/{{$d->corrCity}}/{{$d->corrStreet}}/{{$d->corrHouse}}/{{$d->corrFlat}}/{{$d->regCode}}/{{$d->regCountry}}/{{$d->regCity}}/{{$d->regStreet}}/{{$d->regHouse}}/{{$d->regFlat}}/{{$d->typeContract}}/{{$d->dateContract}}/{{$d->branchContract}}"><span class="fas fa-user"></span>&nbsp;Szczegóły</a>
                        <a class="btn btn-outline-danger" href="/termination/{{$d->id_contract}}/{{$d->name_contract}}/{{$d->surname_contract}}/{{$d->pesel_contract}}/{{$d->document_contract}}/{{$d->telephone_contract}}/{{$d->email_contract}}/{{$d->corrCountry}}/{{$d->corrCode}}/{{$d->corrCity}}/{{$d->corrStreet}}/{{$d->corrHouse}}/{{$d->corrFlat}}/{{$d->regCountry}}/{{$d->regCode}}/{{$d->regCity}}/{{$d->regStreet}}/{{$d->regHouse}}/{{$d->regFlat}}/{{$d->typeContract}}/{{$d->dateContract}}" ><span class="fas fa-ban"></span> Wygeneruj wypowiedzenie</a>
                    </td>
</tr>
@endforeach
            </tbody>
        </table>
        <a href="/welcomelog" class="btn btn-outline-primary">Powrót do strony głównej</a>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>