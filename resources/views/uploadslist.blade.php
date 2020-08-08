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
    <script
  src="https://code.jquery.com/jquery-3.5.1.slim.js"
  integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
  crossorigin="anonymous"></script>
   <script type="text/javascript">
        $(document).ready(function(){
            $("#gallery2 a").append("<span></span>");
            $("#gallery2 a").hover(function(){
                $(this).children("span").fadeIn(600);
            },function(){
                $(this).children("span").fadeOut(200);
            });
        });
</script>
  <script>

function displayWindow(url, width, height) {
        var Win = window.open(url,"displayWindow",'width=' + width + ',height=' + height + ',resizable=0,scrollbars=yes,menubar=no' );
}
</script>
    <title>{{$title}}</title>
  </head>
  <body class="jumbotron jumbotron-fluid">
    <h1>{{$title}}</h1>
    <table class="table table-bordered ">
        <thead class="bg-dark text-white">
            <th>#</th>
            <th>Imię Nazwisko osoby zgłaszającej</th>
            <th>Data złożenia wniosku</th>
            <th>Data modyfikacji wniosku</th>
            <th>Powód złożenia wniosku</th>

            <th>Akcja</th>

        </thead>
        <tbody>
        @foreach($data as $d)    
            <td>{{$d->id}}</td>
            <td>{{$d->name_contract}} {{$d->surname_contract}}</td>
            <td>{{$d->created_at}}</td>
            @if($d->modify_at === "0000-00-00 00:00:00")
            <td></td>
            @else
            <td>{{$d->modify_at}}</td>
            @endif
            <td>{{$d->reason}}</td>
            @if($d->modify_at === "0000-00-00 00:00:00")
            <td>
            <script>
      $(document).ready(function(){
         $("#{{$d->id}}").click(function() {
          $('.{{$d->id}}').toggle();
         });
      })
</script>



                <a href="#" id="{{$d->id}}" class="btn btn-outline-dark btn-sm" ><span class="fas fa-search"></span>&nbsp;Szczegóły</a>
                <a href="javascript:displayWindow('acceptUploads/{{$d->id}}/{{$d->name_contract}}/{{$d->surname_contract}}/{{$d->reason}}/{{$d->newdata}}/{{$d->olddata}}',900,400)" class="btn btn-outline-success btn-sm" ><span class="fas fa-check-circle"></span>&nbsp;Akceptacja</a>
                <a href="javascript:displayWindow('rejectUploads/{{$d->id}}/{{$d->name_contract}}/{{$d->surname_contract}}/{{$d->reason}}',500,500)" class="btn btn-outline-danger btn-sm" ><span class="fas fa-ban"></span>&nbsp;Akceptacja</a>
              
                <div class="card {{$d->id}}" style="width: 38rem; display:none">
  <div class="card-header">
    Wniosek o zmianę danych osobowych pracownika <span class="badge badge-info">{{$d->name_contract}} {{$d->surname_contract}}</span> złożony dnia {{$d->created_atUpload}}
  </div>
  <ul class="list-group list-group-flush text-center">
    <li class="list-group-item"><label class="alert alert-dark"><span class="fas fa-user"></span>&nbsp;{{$d->name_contract}} {{$d->surname_contract}}</label></li>
    <li class="list-group-item"><label class="alert alert-danger"><span class="fas fa-id-card"></span>&nbsp;{{$d->olddata}}</li>
    <li class="list-group-item"><label class="alert alert-success"><span class="fas fa-id-card"></span>&nbsp;{{$d->newdata}}</li>
      <div id="gallery">
          <li class="list-group-item"><label class="alert alert-dark"><span class="fas fa-image"></span>&nbsp;Aby powiększyć kliknij obrazek poniżej</li>
      <a href="{{ URL::to('/') }}/img/{{ $d->fileName }}" target="_blank">
         <img src="{{ URL::to('/') }}/img/{{ $d->fileName }}" alt="zdjęcie" style="height:60px; width:60px;"/>

      </div>

    
    </li>
  </ul>
</div>
            
            
            </td>
            @else
            <script>
      $(document).ready(function(){
         $("#{{$d->id}}").click(function() {
          $('.{{$d->id}}').toggle();
         });
      })
</script>



  
                <td style="display:grid">
                <a href="#" id="{{$d->id}}" class="btn btn-outline-dark btn-sm" ><span class="fas fa-search"></span>&nbsp;Szczegóły</a>
                <div class="card {{$d->id}}" style="width: 18rem; display:none">
  <div class="card-header">
    Wniosek o zmianę danych osobowych pracownika <span class="badge badge-info">{{$d->name_contract}} {{$d->surname_contract}}</span> złożony dnia {{$d->created_atUpload}}
  </div>
  <ul class="list-group list-group-flush text-center">
    <li class="list-group-item"><label class="alert alert-dark"><span class="fas fa-user"></span>&nbsp;{{$d->name_contract}} {{$d->surname_contract}}</label></li>
    <li class="list-group-item"><label class="alert alert-danger"><span class="fas fa-id-card"></span>&nbsp;{{$d->olddata}}</li>
    <li class="list-group-item"><label class="alert alert-success"><span class="fas fa-id-card"></span>&nbsp;{{$d->newdata}}</li>
    <li class="list-group-item"><label class="alert alert-dark"><span class="fas fa-calendar"></span>&nbsp;{{$d->modify_atUpload}}</li>
    </li>
  </ul>
</div>   
            </td>
            @endif
        </tbody>
        @endforeach
    </table>
<a href="/welcomelog" class="btn btn-sm btn-outline-dark">Powrót</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>