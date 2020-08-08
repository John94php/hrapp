<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5629bafd13.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>    
    <title>{{$title}}</title>
  </head>
  <body class="jumbotron">
    <h1>{{$title}}</h1>
<table class="table table-hover">
    <thead>
    <th>#</th>
    <th>Dane osoby zgłaszającej</th>
    <th>Rodzaj wniosku</th>
    <th>Status wniosku</th>
    <th>Przedział czasowy</th>
    <th>Ilość dni</th>
    <th>Akcja</th>
    </thead>
    <tbody>
        <tr>
            @foreach($data as $d)
            <td>{{$d->id_vacation}}</td>
            <td>{{$d->name_contract}} {{$d->surname_contract}}</td>
            <td>{{$d->type_vacation}}</td>
            @if($d->status_vacation ==='Accepted')
            <td class="alert alert-success">{{$d->status_vacation}}</td>
            @elseif($d->status_vacation ==='Waiting')
            <td class="alert alert-warning">{{$d->status_vacation}}</td>
            @elseif($d->status_vacation === 'Rejected')
            <td class="alert alert-danger">{{$d->status_vacation}}</td>
            @endif
            <td>{{$d->dateStart}} - {{$d->dateEnd}}</td>
            <td>{{$d->countDays}}</td>
            <td>
            
            <script>
      $(document).ready(function(){
         $("#{{$d->id_vacation}}").click(function() {
          $('.{{$d->id_vacation}}').toggle();
         });
      })
</script>
            <a href="#"  id="{{$d->id_vacation}}" class="btn btn-outline-dark btn-sm"><span class="fas fa-search"></span>&nbsp;Szczegóły</a>            
            <a href="#"  class="btn btn-outline-success btn-sm"><span class="fas fa-check"></span>&nbsp;Akceptacja</a>
            <a href="#"  class="btn btn-outline-danger btn-sm"><span class="fas fa-ban"></span>&nbsp;Odmowa</a>
            <div class="card {{$d->id_vacation}}" style="width: 18rem; display:none">
  <div class="card-header">
    Wniosek urlopowy pracownika {{$d->name_contract}} {{$d->surname_contract}} złożony dnia {{$d->created_atVacation}}
  </div>
  <ul class="list-group list-group-flush text-center">
    <li class="list-group-item"><label class="alert alert-dark"><span class="fas fa-user"></span>&nbsp;{{$d->name_contract}} {{$d->surname_contract}}</label></li>
    <li class="list-group-item"><label class="alert alert-dark"><span class="fas fa-file-contract"></span>&nbsp;{{$d->typeContract}}</li>
    <li class="list-group-item"><label class="alert alert-dark"><span class="fas fa-calendar"></span>&nbsp;{{$d->dateContract}}</li>
      <li class="list-group-item"><label class="alert alert-dark">Liczba przyslugujących dni urlopowych:</label>
    
     <!--   if(typeContract === 'Umowa o pracę' AND dateContract > (date('Y-m-d') - date('Y-m-d',strototime('-6 months') ) ) AND $d->type_vacation ==='Urlop płatny'  )-->

      <table class="table table-small">
        <thead>
          <th>Rodzaj</th>
          <th>Ilość dni</th>
        </thead>
        <tbody>
          <tr>
            <td>Urlop na żądanie</td>
            <td>3</td>
    </tr>
    <tr>
      <td>Urlop wypoczynkowy</td>
      <td>2</td>
    </tr>
        </tbody>
      </table>
    
    </li>
  </ul>
</div>
         
          </td>
</tr>
        @endforeach
    </tbody>
</table>

<a href="/welcomelog" class="btn btn-outline-primary">Powrót do strony głównej</a> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>