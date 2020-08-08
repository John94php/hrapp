<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HrApp!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/5629bafd13.js" crossorigin="anonymous"></script>
<script>

function czas() {

 if (!document.layers&&!document.getElementById&&!document.all)
 return

  var godzina, minuty, sekundy, dzien, licz_dzien, miesiac, dzisiaj, rok, tekst_miesiac, tekst_dzien;
  dzisiaj = new Date();
  godzina=dzisiaj.getHours();
  minuty=dzisiaj.getMinutes();
  sekundy=dzisiaj.getSeconds();
  rok=dzisiaj.getYear();
  dzien=dzisiaj.getDate();
  licz_dzien=dzisiaj.getDay();
  if (licz_dzien==0) {tekst_dzien="Niedziela"}
  if (licz_dzien==1) {tekst_dzien="Poniedziałek"}
  if (licz_dzien==2) {tekst_dzien="Wtorek"}
  if (licz_dzien==3) {tekst_dzien="Środa"}
  if (licz_dzien==4) {tekst_dzien="Czwartek"}
  if (licz_dzien==5) {tekst_dzien="Piątek"}
  if (licz_dzien==6) {tekst_dzien="Sobota"}
  miesiac=dzisiaj.getMonth()+1;
  if (miesiac==1) {tekst_miesiac="stycznia"}
  if (miesiac==2) {tekst_miesiac="lutego"}
  if (miesiac==3) {tekst_miesiac="marca"}
  if (miesiac==4) {tekst_miesiac="kwietnia"}
  if (miesiac==5) {tekst_miesiac="maja"}
  if (miesiac==6) {tekst_miesiac="czerwca"}
  if (miesiac==7) {tekst_miesiac="lipca"}
  if (miesiac==8) {tekst_miesiac="sierpnia"}
  if (miesiac==9) {tekst_miesiac="września"}
  if (miesiac==10) {tekst_miesiac="października"}
  if (miesiac==11) {tekst_miesiac="listopada"}
  if (miesiac==12) {tekst_miesiac="grudnia"}
         if ((rok>=00) && (rok<=1900)) {rok=1900+rok;}
         if (miesiac < 10) {miesiac="0"+miesiac;}
         if (dzien < 10) {dzien="0"+dzien;}
         if (godzina < 10) {godzina="0"+godzina;}
         if (minuty < 10) {minuty="0"+minuty;}
         if (sekundy < 10) {sekundy="0"+sekundy;}
  pelnyczas=tekst_dzien + ", " + dzien + " " + tekst_miesiac + " "+rok+"<br>"
        + godzina+":"+minuty+":"+sekundy;


if (document.getElementById){
document.getElementById("Data").innerHTML=pelnyczas
}
else if (document.layers){
document.layers.Data.document.write(pelnyczas)
}
else if (document.all)
Data.innerHTML=pelnyczas

// Czestotliwosc odswiezania
setTimeout("czas()",500)
}

</script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body onload="czas()">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        

                        @if (Route::has('register'))
                           <!-- <a href="{{ route('register') }}">Zalóż konto pracownika</a>-->
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    HrApp!
                </div>
            <p class="alert alert-info">Aby kontynuować <a href="{{ route('login') }}">zaloguj się</a>
            <hr/>
            <span id="Data" class="badge badge-secondary"></span>
            </p>

                </div>
            </div>
        </div>
    </body>
</html>
