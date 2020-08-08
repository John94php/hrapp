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
  <body class="jumbotron jumbotron-fluid">
    <h3>{{$title}}</h3>
    <table class="table table-hover ">
        <tbody>
            <tr>
            <td><label class="{{$labelclass}}">{{$fname}}</label></td>        
            <td> {{$name_contract}} {{$surname_contract}}</td>
        </tr>
        <tr>
            <td><label class="{{$labelclass}}">{{$old}}</label></td>
            <td> {{$olddata}}</td>
        </tr>
        <tr>
            <td><label class="{{$labelclass}}">{{$new}}</label></td>
            <td> {{$newdata}}</td>
        </tr>
        <tr>
            <td><label class="{{$labelclass}}">{{$reasontitle}}</label></td>
            <td> {{$reason}}</td>
        </tr>
        </tbody>
    </table>
    <form action="/updateUploads" method="post">
      @csrf
      <input type="hidden" value="{{$id}}" name="id"/>
      <input type="text" value="{{$newdata}}" name="newdata"/>
      <input type="text" value="{{date('Y-m-d H:i:s',strtotime('+2 hours'))}}" name="modify_at"/>
      
      <button class="btn btn-outline-success btn-block btn-sm" type="submit">Akceptuj i wyślij wiadomość do wnioskującego</button>

    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>