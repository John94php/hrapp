<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5629bafd13.js" crossorigin="anonymous"></script>

</script>
    <title>{{$title}}</title>
  </head>
  <body class="wrap jumbotron text-center">
    <h1>{{$title}}</h1>
    <form action="addaccount" method="post">
      @csrf
    <label class="alert alert-info">Wybierz pracownika</label>

    <select class="form-control">
  <option >...</option>
    @foreach($info as $i) 
      <option>{{$i->name_contract}} {{$i->surname_contract}}</option>
    @endforeach
  </select>
  <label class="alert alert-info">Wpisz nazwę użytkownika</label>
  <input type="text" name="name" class="form-control" placeholder="imie.nazwisko"/>
  <label class="alert alert-info">Wpisz adres @</label>
  <input type="email" name="email" class="form-control"/>
</div>
  <label class="alert alert-info">Utwórz hasło</label>
  <div class="form-group">
    <p class="badge badge-info"  >Skopiuj wygenerowane hasło do pola poniżej:</p> <p type="text" class="copier-value"  id="password"></p>
  </div>

  <input type="password" name="password" class="form-control" minlength="8" />
  <button type="submit" class="btn btn-success btn-sm"><span class="fas fa-plus"></span>&nbsp;Dodaj</button>
  <button type="reset" class="btn btn-danger btn-sm"><span class="fas fa-ban"></span>&nbsp;Wyczyśc dane</button>
</form>
  <a href="/welcomelog" class="btn btn-outline-dark btn-sm">Powrót do strony głównej</a>
</body>

  
  
    <!-- Optional JavaScript -->
    <script >
 function generatePassword() {
    var buf = new Uint8Array(6);
    window.crypto.getRandomValues(buf);
    return btoa(String.fromCharCode.apply(null, buf));
}
document.getElementById('password').innerHTML = generatePassword();

</script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>