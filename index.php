<?php
  if(isset($_POST['nume'])){
  $nume = $_POST['nume'];
  $email = $_POST['email'];
  $telefon = $_POST['telefon'];
  $categorie = $_POST['categorie'];

  $servername = "127.0.0.1";
  $username = "autoadyu_root";
  $password = "Saphir987";
  $db = "autoadyu_auto";
  $dbport = "3306";

  $conn = new mysqli($servername,$username, $password, $db, $dbport);

  $comanda = "insert into elevi(nume, email, telefon, categorie)
  values('$nume', '$email', '$telefon', '$categorie');";

  if($conn->query($comanda)){

      $body = 'Nume: '.$nume.' --- Mail: '.$email.' --- Telefon: '.$telefon.' --- Categorie: '.$categorie;

      mail('cgabimihaela@yahoo.com', 'Comanda noua', $body, 'From: _mainaccount@autoaichiconect.ro');

    header('Location: index.php?succes=1');
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>



<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="keywords" content="scoala soferi, Bucuresti, bucuresti, soferi,sector 5, permis,permis auto, categoria B, autoaichiconect, scoli, sofer, talon, legislatie, chestionar, chestionare, legi, auto">
<meta name="description" content="Scoala de Soferi Auto AichiConect Sector 4 Bucuresti: te ajutam sa-ti iei permisul din prima! Cel mai mic pret! Scoala soferi sector 1, sector 2, sector 3, sector 4, sector 5, sector 6, Berceni, Popesti Leordeni, Bucuresti">
<meta name="robots" content="index, follow">
<meta name="language" content="Romanian">
<meta property="og:type" content="website">
<meta property="og:title" content="Scoala de soferi Bucuresti | Autoaichiconect Bucuresti - Scoala de soferi">
<meta property="og:description" content="Scoala de Soferi Auto AichiConect Sector 3 Bucuresti: te ajutam sa-ti iei permisul din prima! Cel mai mic pret! Scoala soferi sector 1, sector 2, sector 3, sector 4 Bucuresti">
<meta property="og:url" content="https:">
<meta property="og:site_name" content="Scoala de soferi Bucuresti | Autoaichiconect Bucuresti - Scoala de soferi">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="Scoala de Soferi Auto AichiConect Sector 3 Bucuresti: te ajutam sa-ti iei permisul din prima! Cel mai mic pret! Scoala soferi sector 1, sector 2, sector 3, sector 4 Bucuresti">
<meta name="twitter:title" content="Scoala de soferi Bucuresti | Autoaichiconect Bucuresti - Scoala de soferi">





  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="icon" href="imgs/1023757.png">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="app.js">

  </script>
  <meta charset="utf-8">
  <title>Scoala de soferi Bucuresti | Autoaichiconect Bucuresti - Scoala de soferi</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    $(document).ready(
      function(){
        AOS.init();
        $(".loading").fadeOut(500);
      }
    );
    </script>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<?php
if( isset($_GET['succes'])){
  echo '<div class="inscris">
    <div class="continut">
      <center><h1>Felicitari! Te-ai inscris cu succes la Scoala Auto AichiConect!</h1> </center>
      <button type="button" onclick="
      $(\'.inscris\').hide(250);
      "
       name="button">X</button>
    </div>
  </div>';
}
?>





  <div class="loading">
    <img src="imgs/91.gif" style="width:100px;" alt="incarcare scoala auto">
  </div>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">AUTOAICHICONECT </a>
        <a class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" href="#navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
      </div>
      <div id="navbar-collapse" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#despre" onclick="
        $('.despre')[0].scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
          ">DESPRE NOI</a></li>
          <li><a href="#preturi" onclick="
        $('.preturi')[0].scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
          ">PRETURI</a></li>

          <li><a href="#informatii" onclick="
        $('.informatii')[0].scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
          ">INFORMATII</a></li>

          <li><a href="#legislatie" onclick="
        $('.legislatie')[0].scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });

          ">LEGISLATIE</a></li>


          <li><a href="#contact" onclick="
        $('.contact')[0].scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });">CONTACT</a></li>

        </ul>
      </div>
    </div>
  </nav>


    <div class="container-fluid" style="padding:0px !important;">
      <div class="container" style="padding: 0px !important; margin:0 !important; width:100% !important;">
        <div id="myCarousel" style="width:100% !important; margin:0px !important;" class="carousel slide" data-ride="carousel">

          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="imgs/2313.jpg" alt="oferta auto " style="width:100%;">
              <div class="carousel-caption">
                <h2 style="color:white !important; font-size: 4vh;">Bine ai venit!</h2>

                <h2 style="color:#ffffff !important; font-size: 5vw;">0749693313</h2>
              </div>
            </div>

            <div class="item">
              <img src="imgs/2391.jpg" alt="scoala soferi auto" style="width:100%;">
              <div class="carousel-caption">
                <h2 style="color:white !important; font-size: 4vh;">Scoala de soferi</h2>
                <h1 style="color:white !important; font-size: 6vh;">AICHI CONECT</h1>
                <h2 style="color:#ffffff !important; font-size: 5vw;">0749693313</h2>
              </div>
            </div>
          </div>

          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <br>
    </div>


  <div class="despre" style="height:51px;">
  </div>

  <h1>
    <center> Despre noi </center>
  </h1>
  <div class="row">
      <div class="col-md-10 col-md-offset-1">


    <p style="font-size:20px;">
      <center>Scoala de soferi Aichi Conect ofera servicii de instruire practica si teoretica in vederea obtinerii permisului auto, categoria B.<br> Scoala noastra este situata intr-o locatie facila, la 10 minute de mers pe jos de statia de metrou Dimitrie Leonida. Asiguram servicii de instruire practica
         pentru zona Bucuresti, Berceni, pe masini W Golf verificate periodic.<br>
         Avem profesori de legislatie, instructori autorizati de Ministerul Transporturilor si sala de cursuri moderna dotata cu videoproiector si calculatoare. <br>
         De asemenea, colaboram cu clinici de specialitate pentru efectuarea analizelor medicale si testarii psihologice<br>
       </center>
    </p>
    <br><br>
  </div>
</div>

  <br><br>

  <div class="row">
    <center>
  <h1>De ce noi?</h1>
  <br><br>
</center>
  <div class="row" data-aos="fade-right" data-aos-duration="3000">
    <div class="col-md-2 col-md-offset-1">
      <center> <i style="font-size:90px;"class="fa fa-car"></i>
        <h3>Instructori experimentati si autoturisme perfect functionale, agreate RAR </h3>
      </center>
    </div>

    <div class="col-md-2">
      <center><i style="font-size:90px;"class="glyphicon glyphicon-tags"></i>
        <h3>Campanii de reduceri</h3>
      </center>
    </div>

    <div class="col-md-2">
      <center><i style="font-size:90px;" class="fa fa-calendar icon"></i>
        <h3>Alegerea orelor de practica preferential, inclusiv sambata si duminica</h3>
      </center>
    </div>

    <div class="col-md-2">
      <center><i style="font-size:90px;" class="glyphicon glyphicon-credit-card"></i>
        <h3>Plata in rate</h3>
      </center>
    </div>
    <div class="col-md-2">
      <center><i style="font-size:90px;" class="glyphicon glyphicon-folder-open"></i>
        <h3>Te ajutam sa intocmesti dosarul pentru inscriere</h3>
      </center>
    </div>
  </div>
</div>
  <br>
  <br>




  <div class="preturi" style="height:51px;">
  </div>

  <div class="row" data-aos="zoom-in-up" data-aos-duration="3000">

    <div class="col-md-10 col-md-offset-1 col-xs-12">
      <center>
        <h1> Preturi categoria B</h1>
      </center>
    </div>
      <br>

      <div style="margin-bottom:50px; padding:0;" class="col-md-2 gallery col-md-offset-2 col-xs-10 col-xs-offset-1 ">
          <div class="col-md-8">
              <h3>Oferta A </h3>
          </div>
        <div style="padding:0;" class="col-md-4">
          <img  style="width:100px; float:right;" src="imgs/promo.png" alt="oferta auto a">
        </div>
          <center>
          <br>
          <img src="imgs/38119.jpg" alt="ofert auto">
          <br> <br>
          <p>30 de ore de pregatire practica (50 min/ora-10 min pauza; o sedinta are 100 de minute)</p>
          <p>24 de ore de pregatire teoretica care cuprind legislatie rutiera, prim ajutor, conducere preventiva, controlul si intretinerea autovehicolului, teste suplimentare de simulare a examenului si rezervarea masinii pentru examen.</p>
          <p>Nu include cazierul judiciar si taxa de permis.</p>
          <p>Avans minim 400 Lei</p>
          <p>Programarea la orele de condus se face in functie de orele disponibile ale scolii si de achitarea cursului.</p>
          <p><b> <del>1750</del> 1600 lei </b></p>
          <button onclick="
          $('.inscrieri')[0].scrollIntoView({
              behavior: 'smooth',
              block: 'start'
          });
          $('#categorie').val('a');
          " class="btn ntn-primary" type="button" name="button">Inscrie-te
            acum</button>
          <br><br>
        </center>
      </div>

      <div style="margin-bottom:50px; padding:0;" class="col-md-2 gallery col-md-offset-1 col-xs-10 col-xs-offset-1">
          <div class="col-md-8">
              <h3>Oferta B</h3>
          </div>
        <div style="padding:0;" class="col-md-4">
          <img  style="width:100px; float:right;" src="imgs/promo.png" alt="oferta auto b">
        </div>
        <center>
          <br>
          <img src="imgs/8577.jpg" alt="oferta b">
          <br> <br>

          <p>30 de ore de pregatire practica (50 min/ora-10 min pauza; o sedinta are 100 de minute)</p>
          <p>24 de ore de pregatire teoretica care cuprind legislatie rutiera, prim ajutor, conducere preventiva, controlul si intretinerea autovehicolului, teste suplimentare de simulare a examenului, costul testului psihologic, al fisei medicale efectuate la unitatea medicala cu care colaboram si rezervarea masinii pentru examen cu posibilitatea alegerii orelor de condus preferential, inclusiv sambata.</p>

          <p>Avans minim 400 Lei</p>
          <p>Programarea la orele de condus se face in functie de programul elevului.</p>
          <p><b> 1800 lei </b></p>

          <button onclick="
          $('.inscrieri')[0].scrollIntoView({
              behavior: 'smooth',
              block: 'start'
          });
          $('#categorie').val('b');
          " class="btn ntn-primary" type="button" name="button">Inscrie-te
            acum</button>
          <br><br>
        </center>
      </div>


      <div style="margin-bottom:50px; padding:0;" class="col-md-2 gallery col-md-offset-1 col-xs-10 col-xs-offset-1">

          <div class="col-md-8">
              <h3>Oferta C</h3>
          </div>
        <div style="padding:0;" class="col-md-4 ">
          <img  style="width:100px; float:right;" src="imgs/promo.png" alt="oferta plata">
        </div>
        <center>
          <br>
          <img src="imgs/939.jpg" alt="oferta">
          <br>

          <p> <b> Scoala in regim de urgenta</b> <br> 30 de ore de pregatire practica (50 min/ora-10 min pauza; o sedinta are 100 de minute) <br> 24 de ore de pregatire teoretica care cuprind legislatie rutiera, prim ajutor, conducere preventiva, controlul si intretinerea autovehicolului, teste suplimentare de simulare a examenului, costul testului psihologic, al fisei medicale efectuate la unitatea medicala cu care colaboram si rezervarea masinii pentru examen cu posibilitatea alegerii orelor de condus preferential, inclusiv sambata si duminica.</p>

          <p>Avans minim 400 Lei</p>
          <p>Programarea la orele de condus se face in functie de programul elevului.</p>
          <p><b> 2000 lei </b></p>
          <button onclick="
        $('.inscrieri')[0].scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
        $('#categorie').val('c');
          " class="btn ntn-primary" type="button" name="button">Inscrie-te
            acum</button>
          <br><br>
        </center>
      </div>


      <div class="col-md-3 gallery">
      </div>
    </div>
  </div>
<br>
  <div class="row" style="margin-top: 100px;">
  <div class="col-xs-6 col-xs-offset-3 gallery" style="background-color: #00000000;">
    <h2>Preturi pentru sedinte suplimentare</h2>
    <p>1 sedinta 100-200 RON</p>

    <p>*sedinta suplimentara dureaza 100 min</p>
  </div>
</div>



  <div class="informatii" style="height:51px;">
  </div>

  <h1>
    <center> Informatii </center>
  </h1>
  <div class="col-md-10 col-md-offset-1">


    <div style="font-size:20px;">
      <center>
        <h3>Informatii despre desfasurarea cursurilor practice si teoretice</h3>
        <p>Cursurile teoretice se efectueaza la sediul nostru de catre profesorii nostrii autorizati. Pregatirea se va face cu ajutorul unui soft special,
          identic cu cel de la DRPCTV, soft care asigura si examinarea cursantilor in vederea promovarii examenului teoretic.</p>
        <p>Prin aceasta metoda va veti familiariza cu procedura si gradul de dificultate al examenului real, sustinut in cadrul institutiei calificate.</p>
        <p>Cursurile practice vor putea incepe dupa ce cursantul a absolvit cursurile de legislatie rutiera, acesta desfasurandu-se pe autovehiculele
        agreate de RAR, pe trasee aprobate de Politia Rutiera, cu instructori autorizati.</p>
        <p>Orele de practica se vor programa in functie de disponibilitatea cursantului si al instructotului auto.</p>
      </center> <br>
      <h2>Documente necesare instrierii</h2>
      <ol>
        <li>Cerere</li>
        <li>Copie BI/CI</li>
        <li>Cazierul Judiciar cu mentiunea "Examen Auto" (nu mai vechi de 6 luni de la data eliberarii)</li>
        <li>Aviz Psihologic cu mentiunea "Apt psihologic categoria B"</li>
        <li>Buletin de Analize Medicale cu stampila unitatii sanitare autorizate din care sa reiasa ca ati efectuat setul de analize medicale
        si ca sunteti apt din punct de vedere medical. In cazul in care nu aveti efectuate Testarea Psihologica si/sau Analizele Medicale, va vom trimite
      in aceeasi zi la o clinica autorizata cu care colaboram pentru a obtine avizele necesare</li>
      <li>Fisa de scolarizare eliberata de scoala noastra</li>
      <li>Copie permis, daca este cazul</li>
      </ol>
    </div>
    <br><br>
  </div>




  <div class="galsc" style="height:51px;">
  </div>

  <div class="row" data-aos="zoom-in-up" data-aos-duration="3000">
    <div class="col-md-10 col-md-offset-1">
      <center>
        <h1> Galerie </h1>
      </center>
      <br>
      <!-- The four columns -->
      <center>
        <div class="row">
          <div class="column">
            <img src="imgs/g1.JPG" alt="Exterior scoala soferi" style="width:100%" onclick="myFunction(this);">
          </div>
          <div class="column">
            <img src="imgs/g2.JPG" alt="Exterior scoala soferi" style="width:100%" onclick="myFunction(this);">
          </div>
          <div class="column">
            <img src="imgs/g3.JPG" alt="Sala curs" style="width:100%" onclick="myFunction(this);">
          </div>
          <div class="column">
            <img src="imgs/g4.JPG" alt="Sala curs" style="width:100%" onclick="myFunction(this);">
          </div>
        </div>


        <div class="gal-container container" style="width: 100% !important;">
          <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
          <img id="expandedImg" style="width:100%">
          <div id="imgtext"></div>
        </div>
      </center>

    </div>
  </div>





  <div class="legislatie" style="height:51px;">
  </div>
  <div class="row" data-aos="zoom-in-up" data-aos-duration="3000">
    <div class="col-md-10 col-md-offset-1">
      <center>
        <h1> Legislatie rutiera </h1>
      </center>

      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Dispozitii generale</a>
            </h4>
          </div>
          <div id="collapse1" aria-expanded="false" style="height: 0px;" class="panel-collapse collapse">
            <div class="panel-body">Art. 1. – (1) Circulatia pe drumurile publice a vehiculelor, pietonilor si a celorlalte categorii de participanti la trafic, drepturile, obligatiile si răspunderile ce revin persoanelor
              fizice si juridice, precum
              si atributiile unor autorităti ale administratiei publice, institutii si organizatii în legătură cu acestea sunt supuse dispozitiilor prevăzute în prezenta ordonantă de urgentă si în regulamentul de aplicare a acesteia.
              <br>(2) Dispozitiile prevăzute în prezenta ordonantă de urgentă au ca scop asigurarea desfăsurării fluente si în sigurantă a circulatiei rutiere, apărarea vietii si integritătii corporale, a sănătătii persoanelor, proprietătii publice
              si private, protectia mediului înconjurător, precum si a drepturilor si intereselor legitime ale persoanelor în acest domeniu.
              <br>(3) Autoritatea competentă în domeniul circulatiei rutiere, precum si de exercitare a controlului respectării normelor din acest domeniu este Inspectoratul General al Politiei Române.
              <br>(4) Reglementările privind circulatia pe drumurile publice se emit de către autoritătile publice centrale si locale cu atributii în acest domeniu numai cu acordul Inspectoratului General al Politiei Române si cu respectarea
              întelegerilor internationale la care România este parte.
              <br>(5) Prevederile prezentei ordonante de urgentă se aplică tuturor participantilor la trafic, precum si autoritătilor care au atributii în domeniul circulatiei si sigurantei rutiere.
              <br>Art. 2. – Îndrumarea, supravegherea si controlul respectării normelor de circulatie rutieră se fac de către politisti specializati si anume desemnati prin dispozitie a inspectorului general al Inspectoratului General al Politiei
              Române, care au obligatia de a lua măsurile legale în cazul în care constată încălcări ale normelor privind circulatia pe drumurile publice.
              <br>Art. 3. – Circulatia pe drumurile publice din zona de frontieră si din alte zone pentru care, potrivit legii, s-au stabilit restrictii se face cu respectarea reglementărilor instituite pentru acele zone.
              <br>Art. 4. – (1) Controlul circulatiei vehiculelor apartinând Ministerului Apărării Nationale se efectuează de către politie, precum si de către personalul din structura desemnată de acest minister.
              <br>(2) Cercetarea accidentelor de circulatie în care au fost angajate vehicule din categoria celor prevăzute la alin. (1) se efectuează de către politie. La locul accidentului poate asista si un reprezentant al Ministerului Apărării
              Nationale.
              <br>Art. 5. – (1) Administratorul drumului public este obligat să semnalizeze corespunzător orice obstacol aflat pe partea carosabilă, care stânjeneste sau pune în pericol siguranta circulatiei, si să ia toate măsurile de înlăturare de
              îndată a acestuia.
              <br>(2) Se interzice amplasarea constructiilor de orice fel în zona statiilor mijloacelor de transport în comun, cu exceptia celor destinate refugiilor pentru călători.
              <br>(3) În caz de producere a unui eveniment rutier ca urmare a stării tehnice a drumului public sau a semnalizării necorespunzătoare a obstacolelor ori lucrărilor care se execută pe acesta, administratorul drumului public, respective
              executantul lucrărilor, răspunde contraventional, civil sau penal, după caz.
              <br>(4) Orice măsură de restrictie a circulatiei pe drumurile publice se dispune de către administratorul drumului numai cu acordul politiei.
              <br>Art. 6. – În sensul prezentei ordonante de urgentă, expresiile si termenii de mai jos au următorul înteles:
              <br>1. drum public – orice cale de comunicatie terestră, destinată traficului rutier, dacă este deschisă circulatiei publice. Drumurile care sunt închise circulatiei publice sunt semnalizate la intrare cu inscriptii vizibile;
              <br>2. localitate – spatiul ce cuprinde clădiri, ale cărui intrări si iesiri sunt semnalizate ca atare;
              <br>3. zonă rezidentială – perimetrul dintr-o localitate unde se aplică reguli speciale de circulatie, având intrările si iesirile semnalizate ca atare;
              <br>4. zonă pietonală – perimetrul care cuprinde una sau mai multe străzi rezervate circulatiei pietonilor, unde accesul vehiculelor este supus unor reguli speciale de circulatie, având intrările si iesirile semnalizate ca atare;
              <br>5. parte carosabilă – portiunea din platforma drumului destinată circulatiei vehiculelor. Un drum poate cuprinde mai multe părti carosabile complet separate una de cealaltă printr-o zonă despărtitoare sau prin diferentă de nivel;
              <br>6. acostament – fâsia laterală cuprinsă între limita părtii carosabile si marginea platformei drumului;
              <br>7. bandă de circulatie – spatiu longitudinal al părtii carosabile, materializat sau nu prin marcaje rutiere, dacă are o lătime corespunzătoare pentru circulatia cu usurintă a unui sir de vehicule, altele decât vehiculele care se
              deplasează pe două roti;
              <br>8. bandă reversibilă – subdiviziunea longitudinală a părtii carosabile, situată lângă axul drumului, destinată circulatiei autovehiculelor într-un sens sau în altul, în functie de intensitatea traficului;
              <br>9. bandă pentru stationarea de urgentă – subdiviziunealongitudinală suplimentară situată la extremitatea dreaptă a autostrăzii, destinată exclusiv stationării autovehiculelor în cazuri de fortă majoră;
              <br>10. pistă pentru biciclete – una dintre subdiviziunile părtii carosabile sau o portiune din trotuar ori acostament, materializată prin marcaje rutiere si/sau semnalizată prin indicatoare, destinată numai circulatiei bicicletelor si
              ciclomotoarelor;
              <br>11. trotuar – spatiul din partea laterală a drumului, separat în mod vizibil de partea carosabilă prin diferentă sau fără diferentă de nivel, destinat circulatiei pietonilor;
              <br>12. intersectie – orice încrucisare, jonctiune sau bifurcare de drumuri, inclusiv spatiile formate de acestea;
              <br>13. autostradă – drumul conceput si construit special pentru circulatia autovehiculelor cu sau fără remorci, care nu serveste proprietăti alăturate si care:
              – are pentru cele două sensuri de circulatie părti carosabile distincte, separate între ele printr-un spatiu care nu este destinat circulatiei sau, exceptional, prin alte modalităti, cu exceptia locurilor speciale sau cu caracter
              temporar;
              – nu intersectează la nivel drumuri, căi ferate sau linii de tramvai;
              – este prevăzută cu semnalizare specială;
              <br>14. trecere la nivel – încrucisarea la nivel dintre un drum public si o cale ferată sau linie de tramvai, care dispune de o platformă independentă;
              <br>15. vehicul – un sistem mecanic care se deplasează pe drum, cu sau fără mijloace de autopropulsare, utilizat în mod curent pentru transportul de persoane si/sau bunuri ori pentru efectuarea de servicii sau lucrări;
              <br>16. bicicletă – vehiculul prevăzut cu două roti si pedale sau manivele, care se deplasează pe drum, actionat de forta musculară a utilizatorilor;
              <br>17. motocicletă – autovehiculul cu două sau trei roti, al cărui motor are o capacitate cilindrică mai mare de 50 cm, cu sau fără atas si/sau o viteză maximă, prin constructie, mai mare de 50 km/h, a cărui masă proprie nu depăseste
              400 kg;
              <br>18. ciclomotor – vehiculul cu două sau trei roti, care este prevăzut cu un motor cu ardere internă, având o capacitate cilindrică de cel mult 50 cm, care păstrează caracteristicile generale ale bicicletei, putând fi pus în miscare
              si cu ajutorul pedalelor, si a cărui viteză de deplasare, prin constructie, nu depăseste 50 km/h;
              <br>19. autovehicul – vehiculul prevăzut cu un dispozitiv mecanic propriu de propulsie; vehiculele care se deplasează pe sine, denumite tramvaie, si ciclomotoarele nu sunt considerate autovehicule. Definitia include si termenul
              automobil, care reprezintă oricare dintre vehiculele cu motor care servesc în mod normal transportului pe drum al persoanelor sau bunurilor ori la tractarea pe drum a vehiculelor utilizate pentru transportul de persoane sau bunuri.
              Acest termen include troleibuzele, adică vehiculele care sunt cuplate la o retea electrică, dar care nu circulă pe sine. Acesta nu include vehiculele, cum ar fi tractoarele agricole, a căror utilizare pentru transportul rutier de
              persoane sau mărfuri ori pentru tractarea unor vehicule care transportă persoane sau mărfuri nu este decât ocazională;
              <br>20. tractor – autovehiculul destinat prin constructie si echipare tractării altor vehicule sau efectuării unor lucrări specifice;
              <br>21. remorcă – vehiculul fără motor destinat a fi tractat de un autovehicul;
              <br>22. semiremorcă – remorca a cărei masă totală maximă autorizată este preluată în parte de către autovehiculul trăgător;
              <br>23. remorcă usoară – remorcă a cărei masă totală maximă autorizată nu depăseste 750 kg;
              <br>24. masă totală maximă autorizată – masa totală maximă a unui vehicul încărcat, declarată admisibilă de către autoritatea competentă;
              <br>25. vehicul cu mase si/sau dimensiuni de gabarit depăsite – vehiculul care, datorită dimensiunilor sale ori mărfurilor transportate, depăseste în lungime, lătime sau în înăltime limitele maxime ori masele maxime admise prin
              legislatia în vigoare;
              <br>26. conducător – persoana care determină punerea în miscare si actionează asupra directiei de deplasare pe drum a vehiculelor si animalelor izolate sau în turmă, celor de tractiune, povară ori de călărie;
              <br>27. participant la trafic – conducătorul sau pietonul care circulă pe drumul public;
              <br>28. coloană oficială – autovehiculul sau grupul de autovehicule însotit de cel putin un vehicul al politiei ce are în functiune mijloacele speciale sonore si luminoase;
              <br>29. vehicul în circulatie internatională sau în trafic international – vehiculul care, prin deplasarea sa, depăseste cel putin o frontieră de stat.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                Vehicule</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">Art. 7. – Orice vehicul care circulă pe drumurile publice trebuie să corespundă normelor tehnice privind siguranta circulatiei rutiere, protectia mediului si folosinta conform destinatiei.
              <br>Art. 8. – Autovehiculele si remorcile înmatriculate în alte state pot circula în trafic international pe teritoriul României dacă îndeplinesc cel putin conditiile tehnice prevăzute în Conventia internatională asupra circulatiei
              rutiere, încheiată la Viena la 8 noiembrie 1968 si ratificată de România prin Decretul nr. 318/1980.
              <br>Art. 9. – (1) Pentru a fi înmatriculate, înscrise si mentinute în circulatie, autovehiculele, remorcile si tramvaiele se supun inspectiei tehnice.
              <br>(2) Inspectia tehnică se efectuează periodic în statii autorizate, conform legislatiei în vigoare.
              <br>(3) Pentru autovehiculele apartinând Ministerului Apărării Nationale, Ministerului Administraţiei şi Internelor, Serviciului Român de Informatii, Serviciului de Informatii Externe, Serviciului de Protectie si Pază si Serviciului de
              Telecomunicatii Speciale, inspectia tehnică se efectuează în statii proprii, autorizate potrivit legii.
              <br>Art. 10. – (1) Este interzisă circulatia pe drumurile publice a vehiculelor care nu corespund din punct de vedere tehnic, precum si în cazul în care termenul de valabilitate al inspectiei tehnice a expirat.
              <br>(2) Starea tehnică a autovehiculelor, remorcilor si tramvaielor care circulă pe drumurile publice se verifică de către politie împreună cu institutiile abilitate de legislatia în vigoare.

              <br>Înmatricularea, înregistrarea si radierea vehiculelor din evidenta circulatiei

              <br>Art. 11. – Proprietarii de vehicule sunt obligati să solicite înmatricularea sau înregistrarea acestora înainte de a le pune în circulatie ori să ceară radierea lor din evidente.
              <br>Art. 12. – (1) Pentru a circula pe drumurile publice vehiculele, cu exceptia bicicletelor, ciclomotoarelor si a celor trase sau împinse cu mâna, trebuie să fie înmatriculate ori înregistrate, după caz, si să poarte plăcute de
              înmatriculare sau de înregistrare, ale căror forme si dimensiuni se stabilesc prin regulamentul de aplicare a prezentei ordonante de urgentă, denumit în continuare regulament.
              <br>(2) Tractoarele, precum si vehiculele care nu sunt supuse înmatriculării pot circula pe drumurile publice numai pe traseele si în conditiile stabilite prin regulament.
              <br>Conducătorii tractoarelor, masinilor si utilajelor autopropulsate agricole, forestiere sau pentru lucrări sunt obligati să posede permis de conducere valabil pentru categoriile prevăzute în regulament.
              <br>Art. 13. – (1) Autovehiculele si remorcile se înmatriculează permanent, temporar sau pentru probe la autoritatea competentă în a cărei rază proprietarii sau detinătorii îsi au domiciliul ori resedinta, în conditiile stabilite prin
              regulament. Autovehiculele care apartin Ministerului Apărării Nationale si Ministerului Administraţiei şi Internelor se înregistrează la aceste ministere si pot, după caz, să fie înmatriculate si la autoritatea competentă.
              <br>(2) Autovehiculele si remorcile pot circula până la înmatriculare cu număr de ordine provizoriu, pe baza unei autorizatii speciale eliberate de autoritatea competentă.
              <br>(3) Evidenta vehiculelor supuse înmatriculării se tine la unitatea de politie competentă pe raza căreia îsi are domiciliul sau resedinta proprietarul.
              <br>Art. 14. – Tramvaiele, troleibuzele, precum si vehiculele care, datorită destinatiei lor, nu circulă în mod obisnuit pe drumurile publice se înregistrează de către consiliile locale în conditiile stabilite în regulament.
              <br>Art. 15. – (1) Persoanele care domiciliază sau îsi stabilesc domiciliul ori resedinta în România si detin autovehicule ori remorci înmatriculate în alte state sunt obligate ca în termen de 90 de zile să le înmatriculeze în
              circulatie în România.
              <br>(2) Termenul prevăzut la alin. (1) se calculează:
              <br>a) de la data intrării în tară a autovehiculului ori remorcii, pentru persoanele care domiciliază sau care au resedinta în România;
              <br>b) de la data stabilirii domiciliului ori resedintei, pentru persoanele care îsi stabilesc domiciliul ori resedinta în România.
              <br>(3) Pentru cetătenii străini ai statelor cu care România a încheiat întelegeri bilaterale termenul prevăzut la alin. (1) se poate prelungi în conditiile stabilite în aceste întelegeri.
              <br>Art. 16. – (1) La data înmatriculării sau înregistrării unui vehicul autoritatea competentă eliberează un certificat de înmatriculare ori de înregistrare, după caz, precum si plăcute cu numere de înmatriculare sau de înregistrare.
              <br>(2) Este interzisă punerea în circulatie a unui vehicul care nu are montate plăcute cu numere de înmatriculare sau de înregistrare atribuite de autoritatea competentă.
              <br>Art. 17. – Înmatricularea sau înregistrarea unui vehicul se anulează de către autoritatea care a efectuat-o, în cazul în care această operatiune s-a făcut cu încălcarea normelor legale sau prin mijloace frauduloase.
              <br>Art. 18. – (1) Radierea din evidenta circulatiei a vehiculelor se face la autoritatea care a efectuat înmatricularea si înregistrarea, astfel:
              <br>a) la cererea proprietarului;
              <br>b) la trecerea vehiculelor în proprietatea altei persoane;
              <br>c) la schimbarea domiciliului sau sediului proprietarului pe raza altei unităti de politie judetene sau a municipiului Bucuresti;
              <br>d) la scoaterea definitivă din România a autovehiculelor sau remorcilor;
              <br>e) în cazul schimbării caroseriei sau sasiului autovehiculelor.
              <br>(2) Radierea din evidenta circulatiei a vehiculelor indisponibilizate prin instituirea unui sechestru asigurător se poate face în baza hotărârii instantei de judecată, conform legii, de către autoritatea care a efectuat
              înmatricularea sau înregistrarea.
              <br>(3) Este interzisă circulatia pe drumurile publice a vehiculelor radiate din evidentă.
              <br>Art. 19. – (1) Înmatricularea, înregistrarea si radierea din evidentă a vehiculelor se fac în conditiile stabilite prin regulament.
              <br>(2) Categoriile de vehicule care nu sunt supuse înmatriculării sau înregistrării se stabilesc prin instructiuni comune ale Ministerului de Interne si Ministerului Lucrărilor Publice, Transporturilor si Locuintei.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                Conducatorii de vehicule</a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">

              <br>Art. 20. – (1) Conducătorii de autovehicule trebuie să posede permis de conducere si să aibă vârsta minimă de 18 ani împliniti, cu exceptia celor care conduc un ciclomotor, care trebuie să aibă cel putin vârsta minimă de 16 ani
              împliniti.
              <br>(2) Conducătorii autovehiculelor care efectuează transport public de persoane trebuie să aibă vârsta minimă de 21 de ani împliniti si să facă dovada că sunt angajati ai unui operator de transport, iar cei care conduc vehicule cu
              mase si/sau dimensiuni de gabarit depăsite sau care efectuează transport de mărfuri trebuie să posede atestat profesional.
              <br>(3) Conditiile de obtinere a permisului de conducere si a atestatului profesional se stabilesc prin regulament.
              <br>(4) Persoanele care nu au împlinit vârsta de 14 ani pot conduce biciclete numai pe drumurile special amenajate si semnalizate corespunzător de către administratorul drumului respectiv.
              <br>Art. 21. – (1) Cadrele medicale abilitate, atunci când constată în cadrul atributiilor de serviciu că o persoană care posedă permis de conducere este inaptă medical sau psihologic pentru a conduce un autovehicul sau tramvai, sunt
              obligate să comunice despre aceasta de îndată politiei specializate în a cărei rază teritorială îsi desfăsoară activitatea.
              <br>(2) Lista cu afectiunile medicale incompatibile cu calitatea de conducător de autovehicule sau tramvaie se stabileste prin ordin al ministrului sănătătii si familiei si se publică în Monitorul Oficial al României, Partea I.
              <br>Art. 22. – (1) Conducătorii de autovehicule sau tramvaie trebuie să aibă cunostintele si îndemânarea necesare conducerii si să fie apti din punct de vedere medical si psihologic.
              <br>(2) Conducătorii prevăzuti la alin. (1) vor fi verificati periodic din punct de vedere medical si psihologic. Politia poate propune examinarea medicală sau psihologică, precum si verificarea cunoasterii regulilor de circulatie a
              conducătorilor de autovehicule sau tramvaie ori de câte ori constată că acestia, prin modul de conducere sau comportamentul lor în trafic, pun în pericol siguranta circulatiei.
              <br>(3) Verificarea medicală si psihologică prevăzută la alin. (1) si (2) se efectuează în conditiile stabilite prin ordin comun al ministrului sănătătii si familiei si al ministrului lucrărilor publice, transporturilor si locuintei.
              <br>(4) Permisul de conducere al persoanei care este declarată inaptă medical sau psihologic pentru a conduce autovehicule ori tramvaie se retrage de către politia specializată si poate fi redobândit numai după încetarea motivului
              pentru care s-a luat această măsură. În situatia în care permisul a fost retras pe o durată mai mare de 3 ani, pentru a-l redobândi titularul acestuia trebuie să promoveze un test de cunoastere a regulilor de circulatie.

              <br>Art. 23. – (1) Dreptul de a conduce un autovehicul sau tramvai pe drumurile publice îl are numai persoana care posedă permis de conducere corespunzător categoriei sau dovadă înlocuitoare a acestuia cu drept de circulatie.
              <br>(2) Au dreptul de a conduce autovehicule sau tramvaie pe drumurile publice si persoanele care urmează un curs de pregătire practică, în vederea obtinerii permisului de conducere, numai în prezenta si sub supravegherea directă a
              unui instructor autorizat în acest sens.
              <br>(3) Persoanele care solicită prezentarea la examen în vederea obtinerii permisului de conducere sau a unor noi categorii ale acestuia trebuie să îndeplinească, potrivit legii, conditiile de vârstă, să fie apte din punct de vedere
              medical si psihologic si să facă dovada pregătirii teoretice si practice, prin cursuri organizate de unităti autorizate.
              <br>(4) Programa de învătământ a unitătilor care organizează cursuri de pregătire, conform alin. (2), se elaborează de Ministerul Educatiei si Cercetării si se avizează de către Ministerul de Interne prin Inspectoratul General al
              Politiei Române.
              <br>(5) Categoriile de vehicule pentru care se eliberează permise de conducere, precum si conditiile concrete de obtinere a acestora se stabilesc prin regulament.
              <br>(6) Organizarea si desfăsurarea cursurilor în vederea obtinerii permisului de conducere se fac în baza unei metodologii elaborate de către Ministerul Lucrărilor Publice, Transporturilor si Locuintei împreună cu Ministerul Educatiei
              si Cercetării si Ministerul de Interne.
              <br>Art. 24. – (1) Permisul de conducere se obtine pe bază de examen si se eliberează de autoritatea competentă.
              <br>(2) Persoana care a fost condamnată prin hotărâre judecătorească rămasă definitivă pentru o infractiune la regimul circulatiei pe drumurile publice sau de omor, lovire ori vătămare cauzatoare de moarte, vătămare corporală gravă,
              tâlhărie, ultraj sau furtul unui autovehicul poate fi admisă la examenul pentru obtinerea permisului de conducere sau a brevetului de conducător, în conditiile prevăzute la art. 103 alin. (1) lit. a) si b).
              <br>(3) Permisul de conducere se anulează dacă a fost obtinut cu încălcarea normelor legale sau prin mijloace frauduloase.
              <br>Art. 25. – (1) Pentru conducătorii de autovehicule care au mai putin de un an practică în conducere se stabilesc reguli suplimentare de circulatie prin regulament.
              <br>(2) Autovehiculele conduse de persoane care au mai putin de un an practică în conducere vor purta un semn distinctiv, în conditiile stabilite prin regulament.
              <br>Art. 26. – (1) Persoanele care domiciliază sau îsi stabilesc domiciliul ori resedinta în România si sunt titulari ai permiselor de conducere obtinute în străinătate sunt obligate ca în termen de 90 de zile să le preschimbe cu
              permise de conducere românesti, în conditiile stabilite prin regulament.
              <br>(2) Termenul prevăzut la alin. (1) se calculează:
              <br>a) de la data intrării acestora în tară, pentru persoanele care domiciliază sau care au resedinta în România;
              <br>b) de la data stabilirii domiciliului ori resedintei, pentru persoanele care îsi stabilesc domiciliul ori resedinta în România.
              <br>(3) În cazul titularilor permiselor de conducere obtinute într-un stat care nu este membru al Conventiei internationale asupra circulatiei rutiere, încheiată la Viena la 8 noiembrie 1968, si care nu pot fi preschimbate în
              conformitate cu reglementările legale, acestia se pot prezenta la examen pentru obtinerea dreptului de a conduce un autovehicul pe teritoriul României fără a urma în acest scop un curs de pregătire.
              <br>(4) Este interzisă detinerea simultană a mai mult de un permis de conducere national.
              <br>Art. 27. – (1) Persoanele care îsi stabilesc domiciliul ori resedinta în România pot sustine examenul pentru obtinerea permisului de conducere la autoritătile competente pe a căror rază îsi au domiciliul sau resedinta.
              <br>(2) Cetătenii români cu domiciliul în străinătate si resedinta în România pot sustine examenul în vederea obtinerii permisului de conducere, în conditiile stabilite la alin. (1).
              <br>Art. 28. – (1) Recunoasterea permiselor de conducere si a certificatelor de înmatriculare a autovehiculelor emise în alte state se face în conditiile prevăzute de Conventia internatională asupra circulatiei rutiere, încheiată la
              Viena la 8 noiembrie 1968, cu exceptia cazurilor în care prin acorduri bilaterale sau prin acte internationale ratificate de România sau la care România a aderat se prevede altfel.
              <br>(2) Permisele de conducere ale membrilor misiunilor diplomatice si oficiilor consulare străine, ale corespondentilor de presă străini, precum si ale reprezentantilor organizatiilor economice, culturale sau ale altor asemenea
              organizatii străine, cu statut diplomatic, eliberate de autoritătile competente din alte state, vor fi recunoscute ca valabile în România pe bază de reciprocitate.
              <br>Art. 29. – Evidenta conducătorilor de autovehicule sau tramvaie se tine la unitatea de politie competentă pe a cărei rază titularul îsi are domiciliul sau resedinta.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                Semnalizarea rutiera</a>
            </h4>
          </div>
          <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">Art. 30. – (1) Mijloacele de semnalizare rutieră sunt:
              <br>a) semnalele luminoase;
              <br>b) indicatoarele;
              <br>c) marcajele.
              <br>(2) Mijloacele de semnalizare rutieră se constituie într-un sistem unitar si coerent, se realizează si se instalează astfel încât să fie observate cu usurintă si din timp de către cei cărora li se adresează si trebuie să fie în
              deplină concordantă între ele si într-o stare tehnică de functionare corespunzătoare.
              <br>(3) Mijloacele de semnalizare rutieră, precum si orice alte dispozitive speciale de acest fel se execută, se instalează si se întretin prin grija administratorului drumului public. Instalarea acestora se execută numai cu acordul
              prealabil al politiei.
              <br>(4) Semnalizarea si presemnalizarea intersectiilor dintre două drumuri de categorii diferite se execută, se instalează si se întretin de către administratorul fiecărui drum.
              <br>(5) Indicatoarele de reglementare a prioritătii de trecere si semnalele cu lumini albe si alternativ-intermitente, precum si de avertizare sonoră de la trecerile la nivel cu calea ferată se instalează si se întretin de
              administratorii căilor ferate.
              <br>(6) Mijloacele de semnalizare rutieră pot fi însotite si de dispozitive speciale de avertizare.
              <br>(7) Se interzic:
              <br>a) amplasarea, în zona drumului public, de constructii, panouri sau dispozitive ce pot fi confundate cu indicatoarele ori instalatiile ce servesc la semnalizarea rutieră ori realizarea de amenajări, care sunt de natură să
              stânjenească participantii la trafic sau să le distragă atentia, punând în pericol siguranta circulatiei;
              <br>b) lipirea de afise, inscriptii sau înscrisuri pe indicatoarele ori dispozitivele ce servesc la semnalizarea rutieră, inclusiv pe suporturile acestora.
              <br>Art. 31. – Ordinea de prioritate între diferitele tipuri de mijloace de semnalizare rutieră si semnalele agentilor de circulatie este următoarea:
              <br>a) semnalele speciale de avertizare, luminoase si/sau sonore;
              <br>b) semnalele si indicatiile agentului de politie rutieră;
              <br>c) semnalizarea temporară care modifică regimul normal de desfăsurare a circulatiei;
              <br>d) semnalele luminoase;
              <br>e) indicatoarele;
              <br>f) marcajele.
              <br>Art. 32. – (1) Semnalele speciale luminoase de avertizare sunt:
              <br>a) lumina rosie, care poate fi folosită numai de către autovehiculele apartinând politiei si pompierilor;
              <br>b) lumina albastră, care poate fi folosită doar de către autovehiculele apartinând politiei, jandarmeriei, politiei de frontieră, serviciului de ambulantă, protectiei civile, Ministerului Apărării Nationale si de cele destinate
              controlului circulatiei vehiculelor din parcul propriu sau care însotesc coloane militare, de cele ale unitătilor speciale ale Serviciului Român de Informatii si ale Serviciului de Protectie si Pază, de cele ale Ministerului Justitiei
              – Directia Generală a <br>Penitenciarelor, precum si de cele ale procurorilor criminalisti din Ministerul Public si ale Parchetului National Anticoruptie, atunci când se deplasează în actiuni de interventie sau în misiuni care au
              caracter de urgentă;
              <br>c) lumina galbenă, care poate fi folosită de către autovehiculele cu gabarite sau mase depăsite ori care însotesc asemenea autovehicule, de cele care transportă substante periculoase, de cele destinate întretinerii, reparării sau
              executării unor lucrări de drumuri, curăteniei străzilor, deszăpezirii sau tractării autovehiculelor rămase în pană, precum si de tractoarele sau utilajele agricole.
              <br>(2) Inspectoratul General al Politiei Române poate autoriza utilizarea dispozitivelor speciale sonore de avertizare montate pe autovehiculele apartinând unor institutii, în conditiile stabilite prin regulament.
              <br>(3) Mijloacele speciale sonore de avertizare sunt echipamente ce se instalează numai pe autovehiculele prevăzute la alin. (1) lit. a) si b).
              <br>(4) Pe autovehiculele apartinând politiei pot fi instalate dispozitive luminoase cu mesaje variabile.
              <br>(5) Conditiile de folosire a semnalelor de avertizare, luminoase si/sau sonore, se stabilesc prin regulament.
              <br>Art. 33. – (1) Semnalizarea si amenajările rutiere de pe drumurile publice situate în vecinătatea unitătilor de învătământ, pietelor, târgurilor si spitalelor sunt obligatorii si se efectuează de către administratorul drumului
              respectiv.
              <br>(2) Semnalizarea sectoarelor de drum pe care se execută lucrări este obligatorie si se efectuează de către executantul lucrărilor astfel încât să se asigure deplasarea în sigurantă a tuturor participantilor la trafic.
              <br>(3) Semnalizarea si amenajările rutiere se realizează în conditiile stabilite prin regulament.
              <br>Art. 34. – Conditiile de circulatie pe viaducte si în tunele, precum si semnalizarea acestora se stabilesc prin regulament.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                Reguli de circulatie</a>
            </h4>
          </div>
          <div id="collapse5" class="panel-collapse collapse">
            <div class="panel-body">

              Obligatiile participantilor la trafic

              <br>Art. 35. – Participantii la trafic trebuie să aibă un comportament care să asigure fluenta si siguranta circulatiei, să nu pună în pericol viata sau integritatea corporală a persoanelor si să nu aducă prejudicii proprietătii
              publice sau private.
              <br>Art. 36. – (1) Conducătorii de autovehicule si pasagerii acestora, care ocupă locuri prevăzute prin constructie cu centuri sau dispozitive de sigurantă omologate, sunt obligati să le poarte în timpul circulatiei pe drumurile
              publice, cu exceptia cazurilor prevăzute în regulament.
              <br>(2) Conducătorii si pasagerii motocicletelor si ciclomotoarelor sunt obligati să poarte în timpul circulatiei pe drumurile publice cască de protectie omologată.
              <br>Art. 37. – (1) Conducătorii de vehicule sunt obligati să oprească cât mai aproape de bordură sau acostament la trecerea autovehiculelor politiei si pompierilor aflate în misiune si care au în functiune semnalele acustice si pe cele
              luminoase de culoare rosie.
              <br>(2) Conducătorii de vehicule sunt obligati să reducă viteza, să circule cât mai aproape de bordură sau acostament si să acorde prioritate la trecerea autovehiculelor apartinând institutiilor prevăzute la art. 32 alin. (1) lit. b)
              si care au în functiune dispozitivele sonore si luminoase.
              <br>(3) În situatiile prevăzute la alin. (1) si (2) pietonilor le este interzisă traversarea.
              <br>(4) Participantii la trafic sunt obligati să respecte semnalele politistilor de frontieră, ale îndrumătorilor de circulatie ai Ministerului Apărării Nationale, agentilor căilor ferate, personalului autorizat din zona lucrărilor pe
              drumurile publice, echipajelor scolare de circulatie care actionează în imediata apropiere a unitătilor de învătământ, precum si ale orbilor, potrivit prevederilor din regulament.
              <br>Art. 38. – Conducătorii de autovehicule si tramvaie sunt obligati ca, la solicitarea politistului, să se supună testării aerului expirat sau, după caz, examinării medicale si recoltării probelor biologice în vederea stabilirii
              alcoolemiei ori a consumului de produse sau substante stupefiante ori a medicamentelor cu efecte similare acestora.
              <br>Art. 39. – Detinătorii de vehicule sunt obligati să comunice politiei, la cererea acesteia, identitatea persoanei căreia i-au încredintat vehiculul pentru a fi condus pe drumurile publice.
              <br>Art. 40. – (1) Regulile de circulatie pe drumurile publice, aplicabile autovehiculelor cu mase si/sau dimensiuni de gabarit depăsite ori care transportă mărfuri sau produse periculoase, se stabilesc prin regulament.
              <br>(2) Conducătorii auto care efectuează transport public de persoane sau de substante ori produse periculoase, precum si cei care conduc autovehicule cu mase si/sau dimensiuni de gabarit depăsite sunt obligati să posede un atestat
              profesional, eliberat de autoritatea competentă.

              <br>Reguli pentru circulatia vehiculelor

              <br>1. Pozitii în timpul mersului si circulatia pe benzi
              <br>Art. 41. – (1) Vehiculele circulă pe partea dreaptă a drumului public, cât mai aproape de marginea părtii carosabile, în directia de mers, cu respectarea semnificatiei semnalizării rutiere sau a regulilor de circulatie.
              <br>(2) Vehiculele cu tractiune animală, cele trase sau împinse cu mâna, animalele de tractiune, povară sau călărie, precum si cele izolate sau în turmă, atunci când circulă pe drumurile publice pe care le este permis accesul, trebuie
              să fie mentinute cât mai aproape de marginea din dreapta a drumului, corespunzător sensului de circulatie.
              <br>(3) Dacă un drum este prevăzut cu o pistă specială destinată circulatiei biciclistilor, acestia, precum si ciclomotoristii vor circula numai pe această pistă.
              <br>Art. 42. – Când circulatia se desfăsoară pe două sau mai multe benzi pe sens, acestea se folosesc de către conducătorii de vehicule în functie de intensitatea traficului si de viteza de deplasare.
              <br>Art. 43. – Dacă un drum este prevăzut cu o bandă destinată vehiculelor lente sau transportului public de persoane, semnalizată ca atare, acestea vor circula numai pe banda respectivă.

              <br>2. Semnalele conducătorilor de vehicule
              <br>Art. 44. – (1) Pe drumurile publice conducătorii de vehicule pot folosi mijloacele de avertizare sonoră si luminoasă, montate prin constructie si omologate, în conditiile stabilite prin regulament.
              <br>(2) Se interzice detinerea în autovehicule, montarea pe acestea sau folosirea în circulatia pe drumurile publice a mijloacelor speciale de avertizare sonoră si luminoasă specifice autovehiculelor prevăzute la art. 32 alin. (1).

              <br>3. Depăsirea
              <br>Art. 45. – Depăsirea este manevra prin care conducătorul unui vehicul îl devansează pe un altul, aflat în mers sau imobilizat, dacă prin aceasta se trece peste axul longitudinal al drumului sau peste marcajul de separare a
              sensurilor de circulatie.
              <br>Art. 46. – (1) Depăsirea se efectuează, de regulă, pe partea stângă.
              <br>(2) Depăsirea vehiculului al cărui conducător a semnalizat intentia si s-a încadrat corespunzător părăsirii sensului de mers spre stânga se face prin partea dreaptă dacă între el si acostamentul drumului există spatiu suficient
              pentru efectuarea acestei manevre.

              <br>4.Trecerea pe lângă vehiculele care circulă din sens opus
              <br>Art. 47. – Conducătorii vehiculelor care circulă din sensuri opuse trebuie să păstreze între ei o distantă laterală suficientă si, la nevoie, să circule cât mai aproape de marginea părtii carosabile corespunzătoare sensului lor de
              circulatie.

              <br>5. Viteza si distanta dintre vehicule
              <br>Art. 48. – (1) Conducătorul de vehicul trebuie să respecte regimul legal de viteză si să o adapteze în functie de conditiile de drum, astfel încât să poată efectua orice manevră în conditii de sigurantă.
              <br>(2) Administratorul drumului public este obligat să stabilească cu acordul politiei regimul de viteză pe sectoarele de drum aflate în administrarea sa, în functie de caracteristicile drumului si de intensitatea traficului.
              <br>Art. 49. – Conducătorul unui vehicul care circulă în spatele altuia are obligatia de a păstra o distantă suficientă fată de acesta, pentru evitarea coliziunii în cazul reducerii bruste a vitezei sau al opririi neasteptate.
              <br>Art. 50. – Este interzisă desfăsurarea de întreceri cu vehicule sau animale pe drumurile publice, cu exceptia întrecerilor sportive care se pot organiza pe drumurile publice numai cu autorizarea administratorului drumului
              respectiv, cu avizul politiei.
              <br>Art. 51. – Administratorul drumului public este obligat să ia măsuri pentru efectuarea de amenajări în vederea limitării vitezei de circulatie a vehiculelor în zonele cu risc sporit de accident, numai cu acordul politiei.

              <br>6. Reguli referitoare la manevre
              <br>Art. 52. – Conducătorul de vehicul care execută o manevră de iesire dintr-un rând de vehicule stationate sau de intrare într-un asemenea rând, de trecere pe o altă bandă de circulatie sau de virare spre dreapta ori spre stânga sau
              care urmează să efectueze o întoarcere ori să meargă cu spatele este obligat să semnalizeze si să se asigure în prealabil că o poate face fără să pună în pericol siguranta celorlalti participanti la trafic.
              <br>Art. 53. – Înainte de a schimba directia de mers conducătorul de vehicul trebuie să îsi anunte intentia în mod clar si vizibil, cu ajutorul luminilor de semnalizare a directiei vehiculului sau, în lipsa acestora, cu bratul.
              Semnalizarea trebuie să se mentină pe întreaga durată a manevrei.
              <br>7. Intersectii si obligatia de a ceda trecerea
              <br>Art. 54. – Intersectiile sunt:
              <br>a) cu circulatie nedirijată;
              <br>b) cu circulatie dirijată. În această categorie sunt incluse si intersectiile în care circulatia se desfăsoară în sens giratoriu.
              <br>Art. 55. – La apropierea de o intersectie conducătorul de vehicul trebuie să circule cu o viteză care să îi permită oprirea, pentru a acorda prioritate de trecere participantilor la trafic care au acest drept.
              <br>Art. 56. – (1) La intersectiile cu circulatie nedirijată conducătorul de vehicul este obligat să cedeze trecerea tuturor vehiculelor care vin din partea dreaptă.
              <br>(2) La intersectiile cu circulatie dirijată prin indicatoare, semafoare sau de către agenti de circulatie conducătorul de vehicul este obligat să respecte semnificatia sau indicatiile acestora.
              <br>(3) În intersectiile cu sens giratoriu vehiculele care circulă în interiorul acestora au prioritate fată de cele care urmează să pătrundă în intersectie.
              <br>Art. 57. – Conducătorul de vehicul care pătrunde pe un drum public venind de pe un drum lateral de categorie inferioară are obligatia de a acorda prioritate de trecere tuturor vehiculelor care circulă pe acel drum.
              <br>Art. 58. – (1) În intersectiile cu circulatie nedirijată conducătorul de vehicul este obligat să acorde prioritate de trecere vehiculelor care circulă pe sine. Acestea pierd prioritatea de trecere când efectuează virajul spre
              stânga sau când semnalizarea rutieră din acea zonă stabileste o altă regulă de circulatie.
              <br>(2) În intersectiile cu circulatie dirijată prin semnale luminoase vehiculele care virează la stânga acordă prioritate de trecere vehiculelor care circulă din sens opus.
              <br>(3) În intersectiile cu circulatie dirijată prin indicatoare de prioritate regula prioritătii de dreapta se respectă numai în cazul în care două vehicule urmează să se întâlnească, fiecare intrând în intersectie de pe un drum
              semnalizat cu un indicator având aceeasi semnificatie de prioritate sau de pierdere a prioritătii.
              <br>(4) Când un semafor cu trei culori are o lumină verde suplimentară montată la acelasi nivel cu lumina verde normală a semaforului, sub forma unei săgeti verzi pe fond negru, cu vârful spre dreapta, aprinderea acesteia semnifică
              permisiunea pentru vehicule de a-si continua drumul în directia indicată de săgeată, indiferent de culoarea semaforului electric, cu conditia acordării prioritătii de trecere vehiculelor si pietonilor care au drept de circulatie.

              <br>8. Trecerea la nivel cu calea ferată
              <br>Art. 59. – (1) Participantii la trafic trebuie să dea dovadă de prudentă sporită la apropierea si traversarea liniilor de cale ferată curentă sau industrială, după caz.
              <br>(2) La trecerea la nivel cu o cale ferată curentă, prevăzută cu bariere sau semibariere, conducătorii de vehicule sunt obligati să oprească în dreptul indicatorului ce obligă la oprire, dacă acestea sunt în curs de coborâre sau în
              pozitie orizontală ori semnalele sonore si luminoase care anuntă apropierea trenului sunt în functiune.
              <br>(3) La trecerea la nivel cu o cale ferată industrială, semnalizată corespunzător, conducătorii de vehicule sunt obligati să se conformeze semnificatiei semnalelor agentului de cale ferată.
              <br>9. Oprirea, stationarea si parcarea
              <br>Art. 60. – (1) Se consideră oprire imobilizarea voluntară a unui vehicul pe drumul public, pe o durată de cel mult 5 minute. Peste această durată imobilizarea se consideră stationare.
              <br>(2) Se consideră parcare stationarea vehiculelor în spatii special amenajate.
              <br>(3) Vehiculul oprit sau stationat pe partea carosabilă trebuie asezat lângă si în paralel cu marginea acesteia, pe un singur rând, dacă printr-un alt mijloc de semnalizare nu se dispune altfel. Motocicletele fără atas,
              ciclomotoarele si bicicletele pot fi oprite sau stationate si câte două, una lângă alta.
              <br>Art. 61. – Politia poate dispune ridicarea si depozitarea în spatii special amenajate a vehiculelor oprite sau stationate neregulamentar pe partea carosabilă si care constituie un obstacol pentru circulatia publică. Contravaloarea
              cheltuielilor pentru transportul si depozitarea vehiculului oprit sau stationat neregulamentar se suportă de proprietarul acestuia.
              <br>Art. 62. – Oprirea, stationarea sau parcarea pe drumul public este permisă numai în conditiile prevăzute în regulament.

              <br>Reguli pentru alti participanti la trafic

              <br>Art. 63. – Conducătorii de vehicule care circulă pe banda situată lângă marginea părtii carosabile au obligatia să permită vehiculelor care efectuează transport public de persoane să reintre în trafic din statiile prevăzute cu
              alveole.
              <br>Art. 64. – Pentru a circula pe drumurile publice bicicletele si ciclomotoarele trebuie să fie echipate cu mijloace de iluminare si dispozitive reflectorizant-fluorescente.
              <br>Art. 65. – (1) Vehiculele cu tractiune animală, animalele de povară, de tractiune sau călărie, precum si animalele izolate sau în turmă nu pot fi conduse pe drumurile nationale, în municipii si orase, precum si pe drumurile la
              începutul cărora există indicatoare care le interzic accesul.
              <br>(2) În cazurile prevăzute la alin. (1) administratorul drumului public este obligat să amenajeze drumuri laterale destinate circulatiei acestora, potrivit competentelor stabilite prin lege.
              <br>(3) Pentru a circula pe drumurile publice pe care le este permis accesul animalele, vehiculele trase sau împinse cu mâna, animalele de povară, de tractiune sau călărie vor avea câte un conducător, iar vehiculele cu tractiune
              animală trebuie să fie echipate si cu mijloace de iluminare si dispozitive reflectorizant-fluorescente.
              <br>Art. 66. – (1) Pietonii sunt obligati să folosească numai trotuarul sau, în lipsa acestuia, să circule pe partea stângă a drumului, în directia lor de mers, cât mai aproape de marginea părtii carosabile, conformându-se regulilor de
              circulatie.
              <br>(2) Sunt asimilate pietonilor persoanele cu handicap locomotor ce se deplasează cu vehicule de constructie specială, precum si cele care folosesc patine sau alte dispozitive cu rotile.
              <br>Art. 67. – (1) Conducătorilor de vehicule sau de animale le este interzis să întrerupă deplasarea coloanelor militare, grupurilor organizate autorizate si a cortegiilor.
              <br>(2) Coloanele militare, grupurile organizate autorizate si cortegiile se vor deplasa pe drumurile publice astfel încât să nu pună în pericol circulatia celorlalti participanti la trafic.

              <br>Circulatia pe autostrăzi

              <br>Art. 68. – (1) Pe autostrăzi este interzisă circulatia pietonilor, autovehiculelor cu gabarite sau mase depăsite, cu exceptia celor autorizate, a vehiculelor cu tractiune animală, a animalelor, vehiculelor trase sau împinse cu
              mâna, bicicletelor, ciclomotoarelor, tractoarelor si masinilor autopropulsate pentru lucrări agricole, precum si a vehiculelor care, prin constructie sau din alte cauze, nu pot depăsi viteza de 50 km/h.
              <br>(2) De asemenea, pe autostrăzi sunt interzise învătarea conducerii unui vehicul, încercările prototipurilor de sasiuri si de autovehicule, manifestatiile, defilările, caravanele publicitare, antrenamentele si competitiile sportive
              de orice fel, precum si cortegiile.
              <br>(3) Se interzic circulatia si imobilizarea voluntară sau abandonarea autovehiculelor pe banda pentru stationarea de urgentă, cu exceptia cazurilor de fortă majoră.
              <br>(4) Circulatia autovehiculelor destinate transportului public de persoane sau de mărfuri se efectuează numai pe banda marginală din partea dreaptă a autostrăzii.

              <br>Obligatii în caz de accident

              <br>Art. 69. – (1) Conducătorul implicat într-un accident de circulatie de pe urma căruia a rezultat moartea sau vătămarea integritătii corporale ori a sănătătii unei persoane este obligat să ia măsuri de anuntare imediată a politiei,
              să nu modifice sau să steargă urmele accidentului si să nu părăsească locul faptei.
              <br>(2) Orice persoană care este implicată sau are cunostintă de producerea unui accident de circulatie soldat cu moartea sau vătămarea integritătii corporale ori a sănătătii uneia sau mai multor persoane, precum si în situatia în care
              în eveniment este implicat un vehicul care transportă mărfuri periculoase este obligată să anunte de îndată politia si să apeleze numărul unic pentru urgente 112, existent în retelele de telefonie din România.
              <br>Art. 70. – Conducătorului implicat într-un accident de circulatie îi este interzis consumul de alcool sau de substante ori produse stupefiante sau medicamente cu efecte similare acestora, după producerea evenimentului până la
              testarea concentratiei alcoolului în aerul expirat sau recoltarea probelor biologice.
              <br>Art. 71. – Conducătorul implicat într-un accident de circulatie de pe urma căruia au rezultat numai pagube materiale este obligat să îl anunte în termen de 48 de ore la cea mai apropiată unitate de politie sau la formatiunea de
              politie specializată.
              <br>Art. 72. – Detinătorul vehiculului avariat într-un accident de circulatie este obligat să ceară politiei specializate autorizatia scrisă, pentru a efectua reparatiile necesare.
              <br>Art. 73. – Societătile de asigurări sunt obligate să comunice politiei periodic datele referitoare la vehiculele asigurate si la conducătorii auto implicati în accidente de circulatie.

              <br>Circulatia autovehiculelor în trafic international

              <br>Art. 74. – (1) Autovehiculele si remorcile înmatriculate în România pot trece frontiera de stat pe drumurile publice, dacă îndeplinesc conditiile cerute pentru a fi admise în circulatia internatională, iar conducătorii lor posedă
              permis de conducere valabil, conform prevederilor Conventiei internationale asupra circulatiei rutiere, încheiată la Viena la 8 noiembrie 1968.
              <br>(2) Autovehiculele si remorcile înmatriculate în alte state pot circula pe drumurile publice din România dacă îndeplinesc conditiile cerute pentru a fi admise în circulatia interna tională, dar numai în perioada cât sunt asigurate
              pentru cazurile de răspundere civilă ca urmare a pagubelor produse prin accidente de autovehicule.
              <br>Art. 75. – Persoanele care domiciliază în alte state, venite temporar în România, pot conduce autovehicule pe drumurile publice dacă posedă permis valabil, eliberat de autoritatea competentă din statul respectiv, după modelul
              stabilit în Conventia internatională asupra circulatiei rutiere, încheiată la Viena la 8 noiembrie 1968, la care România este parte, de asociatii afiliate la Federatia Internatională a Automobilului ori la Alianta Internatională de
              Turism sau a cărui valabilitate este recunoscută pe bază de reciprocitate.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                Infractiuni si pedepse</a>
            </h4>
          </div>
          <div id="collapse6" class="panel-collapse collapse">
            <div class="panel-body">Art. 76. – Încălcarea dispozitiilor prevăzute în prezenta ordonantă de urgentă atrage răspunderea civilă, administrativă si contraventională sau penală, după caz.
              <br>Art. 77. – (1) Punerea în circulatie sau conducerea pe drumurile publice a unui autovehicul ori remorci neînmatriculate sau a unui tramvai neînregistrat se pedepseste cu închisoare de la 1 la 3 ani.
              <br>2) Punerea în circulatie sau conducerea pe drumurile publice a unui autovehicul cu număr fals de înmatriculare ori tractarea unei remorci cu număr fals de înmatriculare se pedepseste cu închisoare de la 1 la 5 ani.
              <br>(3) Conducera pe drumurile publice a unui autovehicul care nu are drept de circulatie în România sau a unui autovehicul al cărui certificat de înamtriculare a fost retinut pentru defectiuni tehnice grave la sistemul de directie ori
              frânare si ale cărui plăcute cu numerele de înmatriculare au fost retrase se pedepseste cu închisoare de la 6 luni la 2 ani.
              <br>Art. 78. – (1) Conducerea pe drumurile publice a unui autovehicul ori a unui tramvai de către o persoană fără permis de conducere se pedepseste cu închisoare de la 1 la 5 ani.
              <br>(2) Conducerea pe drumurile publice a unui autovehicul sau tramvai, de către o persoană al cărei permis de conducere este necorespunzător categoriei din care face parte vehiculul respectiv ori acesta i-a fost retras sau anulat ori
              căreia exercitarea dreptului de a conduce i-a fost suspendată, se pedepseste cu închisoare de la 6 luni la 3 ani sau cu amendă.
              <br>(3) Cu pedeapsa prevăzută la alin. (2) se sanctionează si persoana care încredintează cu stiintă un autovehicul sau tramvai, pentru conducerea pe drumurile publice, unei persoane care se află în una dintre situatiile prevăzute la
              alin. (1) si (2) sau unei persoane care suferă de o boală psihică ori se află sub influenta unor produse ori substante stupefiante sau a medicamentelor cu efecte similare acestora.
              <br>Art. 79. – (1) Conducerea pe drumurile publice a unui autovehicul sau tramvai de către o persoană care are o îmbibatie alcoolică de peste 0,80 g/l alcool pur în sânge ori o concentratie ce depăseste 0,40 mg/l alcool pur în aerul
              expirat sau care se află sub influenta unor substante ori produse stupefiante sau medicamente cu efecte similare acestora se pedepseste cu închisoare de la 1 la 5 ani.
              <br>(2) Lista substantelor cu efect psihoactiv contraindicate conducătorilor de autovehicule si tramvaie se stabileste de către Ministerul Sănătătii si Familiei si se publică în Monitorul Oficial al României, Partea I.
              <br>(3) Dacă persoana aflată în una dintre situatiile prevăzute la alin. (1) si (2) efectuează transport public de persoane ori transportă substante sau produse periculoase, pedeapsa este închisoare de la 2 la 7 ani.
              <br>(4) Refuzul, împotrivirea sau sustragerea unei persoane care conduce pe drumurile publice un autovehicul sau tramvai de a se supune recoltării probelor biologice în vederea stabilirii alcoolemiei ori a consumului de produse sau
              substante stupefiante ori a medicamentelor cu efecte similare acestora sau testării aerului expirat se pedepseste cu închisoare de la 1 la 5 ani.
              <br>Art. 80. – (1) Stabilirea concentratiei de alcool în sânge se face în institutiile medico-legale, în conformitate cu normele metodologice elaborate de Ministerul Sănătătii si Familiei si avizate de Ministerul de Interne, iar în
              aerul expirat, de către politia specializată, cu ajutorul unui mijloc tehnic certificat, potrivit legii.
              <br>(2) Conducătorul auto testat cu un mijloc tehnic certificat poate solicita si recoltarea probelor biologice în vederea stabilirii alcoolemiei.
              <br>(3) Starea de influentă a produselor ori substantelor stupefiante sau a medicamentelor cu efecte similare acestora se constată de către personal medical autorizat.
              <br>Art. 81. – (1) Părăsirea locului accidentului fără încuviintarea politiei ori a procurorului care efectuează cercetarea locului faptei, precum si modificarea sau stergerea urmelor accidentului de către conducătorul oricărui vehicul
              angajat într-un accident de circulatie de pe urma căruia a rezultat uciderea sau vătămarea integritătii corporale ori a sănătătii uneia sau mai multor persoane ori dacă accidentul s-a produs ca urmare a unei infractiuni se pedepsesc cu
              închisoare de la 2 la 7 ani.
              <br>(2) Pot părăsi locul accidentului fără încuviintarea prevăzută la alin. (1):
              <br>a) conducătorii autovehiculelor apartinând politiei, serviciului de ambulantă, pompierilor, apărării civile, Ministerului Apărării Nationale (destinate controlului circulatiei vehiculelor din parcul propriu sau care însotesc
              coloane militare), jandarmeriei, unitătilor speciale ale Serviciului Român de Informatii si Serviciului de Protectie si Pază, care au în functiune dispozitivele de avertizare sonoră si luminoasă si se află în misiune;
              <br>b) conducătorii vehiculelor care, în lipsa altor mijloace de transport, ei însisi transportă persoanele rănite la cea mai apropiată unitate sanitară în măsură a da asistentă medicală necesară, dacă se înapoiază imediat la locul
              accidentului.
              <br>(3) Conducătorii vehiculelor prevăzute la alin. (2) lit. a) vor anunta de îndată unitatea de politie pe a cărei rază s-a produs accidentul, urmând ca după terminarea misiunii să se prezinte la sediul acesteia în vederea întocmirii
              actelor de constatare.
              <br>Art. 82. – (1) Consumul de alcool sau de produse ori substante stupefiante sau al medicamentelor cu efecte similare acestora, după producerea unui accident de circulatie de pe urma căruia a rezultat moartea sau vătămarea
              integritătii corporale ori a sănătătii uneia sau mai multor persoane, până la testarea alcoolului în aerul expirat sau recoltarea probelor biologice, se pedepseste cu închisoare de la 1 la 5 ani.
              <br>(2) Nu constituie infractiune consumul de medicamente cu efecte similare produselor sau substantelor stupefiante, după producerea accidentului de circulatie si până la sosirea politiei la fata locului, dacă acestea sunt
              administrate de personal medical autorizat, în cazul în care acestea sunt impuse de starea de sănătate sau de vătămarea corporală a conducătorului auto.
              <br>Art. 83. – Neîndeplinirea obligatiilor prevăzute la art. 21 alin. (1) de către cadrele medicale abilitate, în cazul producerii unui accident de circulatie de pe urma căruia a rezultat moartea sau vătămarea integritătii corporale
              ori a sănătătii uneia sau mai multor persoane, ca urmare a afectiunilor medicale ale conducătorului auto, se pedepseste cu închisoare de la 1 la 5 ani.
              <br>Art. 84. – (1) Distrugerea, degradarea ori aducerea în stare de neîntrebuintare, cu intentie, a indicatoarelor, semafoarelor, amenajărilor rutiere sau a vehiculelor ori crearea de obstacole pe carosabil, dacă prin aceasta se pune
              în pericol siguranta circulatiei pe drumurile publice, se pedepseste cu închisoare de la 6 luni la 2 ani sau cu amendă.
              <br>(2) Instalarea de mijloace de semnalizare rutieră sau modificarea pozitiilor acestora, fără autorizatie eliberată de autoritătile competente, de natură să inducă în eroare participantii la trafic, dacă prin aceasta s-a cauzat
              producerea unui accident de circulatie, se pedepseste cu închisoare de la 6 luni la 3 ani.
              <br>(3) Organizarea sau participarea la concursuri neautorizate, precum si blocarea cu intentie a drumului public cu obiecte sau vehicule ori de către una ori mai multe persoane, dacă prin aceasta se pune în pericol siguranta
              circulatiei ori se aduce atingere dreptului la liberă circulatie a celorlalti participanti la trafic, se pedepsesc cu închisoare de la 3 luni la 2 ani.
              <br>Art. 85. – (1) Neîndeplinirea sau îndeplinirea defectuoasă a atributiilor de verificare tehnică ori inspectie tehnică a autovehiculelor, remorcilor sau tramvaielor, de către cei care au asemenea îndatoriri ori a celor referitoare
              la efectuarea unor reparatii sau interventii tehnice, în cazul în care au avut ca urmare producerea unui accident de circulatie, se pedepseste cu închisoare de la 6 luni la 5 ani.
              <br>(2) Repararea autovehiculelor având urme de accident, fără autorizatia eliberată de politie, se pedepseste cu închisoare de la 3 luni la 2 ani sau cu amendă.
              <br>Art. 86. – (1) Eliberarea autorizatiei pentru lucrări de construire, modificare, modernizare sau de reabilitare a drumului public, amplasarea unor constructii, panouri sau reclame publicitare în zona drumului, fără acordul politiei
              specializate, se pedepseste cu închisoare de la 6 luni la 3 ani sau cu amendă.
              <br>(2) Cu pedeapsa prevăzută la alin. (1) se sanctionează si persoana care nu respectă conditiile stabilite de politia specializată pentru amenajarea accesului rutier la drumul public, în cazul constructiilor amplasate în zona
              acestuia, dacă prin aceasta se pun în pericol fluenta si securitatea rutieră.
              <br>(3) Neluarea măsurilor pentru semnalizarea trecerilor la nivel cu calea ferată, precum si modificarea acestora fără acordul politiei specializate se pedepsesc cu închisoare de la 6 luni la 3 ani sau cu amendă.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                Raspunderea contraventională</a>
            </h4>
          </div>
          <div id="collapse7" class="panel-collapse collapse">
            <div class="panel-body">Art. 87. – (1) Încălcarea dispozitiilor prezentei ordonante de urgentă, altele decât cele care întrunesc elementele constitutive ale unei infractiuni, constituie contraventie si se sanctionează cu avertisment ori
              cu amendă ca sanctiune principală si, după caz, cu una dintre sanctiunile contraventionale complementare prevăzute de prezenta ordonantă de urgentă.
              <br>(2) Sanctiunile contraventionale prevăzute la alin. (1) se aplică contravenientilor, persoane fizice ori juridice.
              <br>Art. 88. – (1) Sanctiunile contraventionale complementare au ca scop înlăturarea unei stări de pericol si preîntâmpinarea săvârsirii altor fapte interzise de lege si sunt următoarele:
              <br>a) retinerea permisului de conducere, a atestatului profesional, a certificatului de înmatriculare ori înregistrare sau a plăcutelor cu numerele de înmatriculare;
              <br>b) retragerea permisului de conducere;
              <br>c) suspendarea exercitării dreptului de a conduce pe timp limitat;
              <br>d) anularea permisului de conducere;
              <br>e) confiscarea bunurilor destinate ori folosite la săvârsirea contraventiilor prevăzute de prezenta ordonantă de urgentă;
              <br>f) imobilizarea vehiculului.
              <br>(2) Retinerea permisului de conducere ori a certificatului de înmatriculare sau înregistrare se face de către politie, o dată cu constatarea faptei pentru care se dispune una dintre sanctiunile contraventionale complementare
              prevăzute la alin. (1), eliberându-se titularului o dovadă înlocuitoare, cu sau fără drept de circulatie.
              <br>(3) Retragerea permisului de conducere se dispune de către politie când titularul acestuia a fost declarat inapt pentru a conduce vehicule pe drumurile publice de către o institutie medicală autorizată.
              <br>(4) Suspendarea exercitării dreptului de a conduce se aprobă de seful inspectoratului judetean de politie, Directiei Generale de Politie a Municipiului Bucuresti sau al directiei politiei specializate din Inspectoratul General al
              Politiei Române.
              <br>(5) Hotărârea asupra sanctiunilor contraventionale complementare se comunică în scris contravenientului, în termen de cel mult 5 zile de la data constatării faptei.
              <br>(6) Sanctiunile contraventionale complementare prevăzute la alin. (1) lit. e) si f) se dispun prin acelasi proces-verbal de constatare prin care s-a stabilit si amenda contraventională.
              <br>Art. 89. – Constituie contraventii si se sanctionează cu amendă de la 2.000.000 lei la 8.000.000 lei următoarele fapte:
              <br>a) conducerea vehiculului sub influenta băuturilor alcoolice, dacă fapta nu constituie infractiune;
              <br>b) încălcarea normelor legale referitoare la depăsire, cu exceptia prevederilor art. 88 lit. a);
              <br>c) conducerea vehiculului cu defectiuni tehnice grave la sistemul de frânare sau la mecanismul de directie;
              <br>d) depăsirea cu mai mult de 50 km/h a vitezei maxime admise pe sectorul de drum respectiv si pentru categoria din care face parte autovehiculul condus;
              <br>e) nerespectarea regulilor de trecere la nivel cu calea ferată;
              <br>f) nerespectarea semnalelor politistilor la trecerea coloanelor oficiale;
              <br>g) neoprirea la semnalul regulamentar al politistului, în scopul sustragerii de la control.
              <br>Art. 90. – Constituie contraventii si se sanctionează cu amendă de la 1.500.000 lei la 5.000.000 lei următoarele fapte:
              <br>a) depăsirea coloanelor de vehicule oprite la culoarea rosie a semaforului electric sau la trecerile la nivel cu calea ferată;
              <br>b) schimbarea directiei de mers prin încălcarea marcajului longitudinal continuu;
              <br>c) circulatia pe sens opus;
              <br>d) neacordarea prioritătii de trecere vehiculelor care au acest drept;
              <br>e) neprezentarea în termenul prevăzut de lege la unitatea de politie pe a cărei rază s-a produs accidentul de pe urma căruia au rezultat numai pagube materiale.
              <br>Art. 91. – Constituie contraventii si se sanctionează cu amendă de la 1.000.000 lei la 3.000.000 lei următoarele fapte:
              <br>a) pătrunderea în intersectie la culoarea rosie a semaforului electric;
              <br>b) încălcarea normelor referitoare la folosirea pe timp de noapte a luminilor de drum;
              <br>c) depăsirea cu mai mult de 30 km/h a vitezei maxime admise pe sectorul de drum respectiv si pentru categoria din care face parte autovehiculul condus;
              <br>d) neacordarea prioritătii de trecere pietonilor care au acest drept.
              <br>Art. 92. – (1) Săvârsirea de către conducătorul de autovehicul a uneia sau mai multor contraventii atrage, pe lângă sanctiunile contraventionale prevăzute la art. 87 alin. (1), si aplicarea unui număr de puncte de penalizare.
              <br>(2) Faptele pentru care se aplică puncte de penalizare, numărul acestora si procedura de înregistrare se stabilesc prin regulament.
              <br>Art. 93. – (1) Constatarea contraventiilor stabilite prin prezenta ordonantă de urgentă si aplicarea sanctiunilor se fac de către politisti.
              <br>(2) Sanctiunile contraventionale se aplică persoanelor fizice sau juridice care încalcă regulile de circulatie pe drumurile publice, după caz.
              <br>(3) Cuantumul amenzilor prevăzute la art. 89-91 se actualizează prin hotărâre a Guvernului, la propunerea Ministerului Administraţiei şi Internelor.
              <br>(4) Contravenientul poate achita în termen de cel mult 48 de ore de la data încheierii procesului-verbal, la Casa de Economii si Consemnatiuni sau la trezoreria finantelor publice, jumătate din minimul amenzii prevăzute de lege,
              agentul constatator făcând mentiune expresă despre această posibilitate în procesul-verbal.
              <br>(5) Prevederile prezentei ordonante de urgentă referitoare la contraventii se completează cu cele ale Ordonantei Guvernului nr. 2/2001 privind regimul juridic al contraventiilor, aprobată prin Legea nr. 180/2002, cu modificările si
              completările ulterioare, în măsura în care prezenta ordonantă de urgentă nu dispune altfel.
              <br>(6) Prin regulament se pot stabili si alte contraventii la normele privind circulatia pe drumurile publice.
              <br>Art. 94. – (1) Suspendarea exercitării dreptului de a conduce autovehicule se dispune:
              <br>a) pentru o perioadă de 30 de zile, dacă în decurs de un an titularul permisului de conducere a săvârsit contraventii care cumulează 15 puncte de penalizare;
              <br>b) pentru o perioadă de 60 de zile, dacă în decurs de 6 luni de la data expirării duratei de suspendare titularul permisului de conducere a săvârsit contraventii care cumulează 10 puncte de penalizare;
              <br>c) pentru o perioadă de 90 de zile, dacă fapta conducătorului auto a fost urmărită ca infractiune prevăzută de prezenta ordonantă de urgentă, iar instanta de judecată sau procurorul a dispus înlocuirea răspunderii penale cu una
              dintre sanctiunile contraventionale complementare prevăzute la art. 91 din Codul penal sau dacă fapta conducătorului auto constituie una dintre contraventiile pentru care, prin regulament, se dispune ca măsură administrative retinerea
              pe loc a permisului de conducere.
              <br>(2) În cazurile prevăzute la alin. (1) lit. a) si b) contravenientul este obligat să se prezinte la unitatea de politie în termen de 5 zile de la primirea înstiintării scrise comunicate de aceasta, pentru a preda permisul de
              conducere. Neprezentarea la termenul stabilit, în mod nejustificat, atrage majorarea cu 30 de zile a duratei suspendării exercitării dreptului de a conduce, prevăzută la alin. (1) lit. a) si b).
              <br>Art. 95. – În cazul în care împotriva titularului permisului de conducere s-a luat măsura de sigurantă prevăzută la art. 112 lit. c) din Codul penal, suspendarea exercitării dreptului de a conduce se dispune pe întreaga perioadă
              cât durează interzicerea dreptului de a exercita profesia sau ocupatia de conducător de autovehicul.
              <br>Art. 96. – În cazul concursului de contraventii care întrunesc mai mult de 15 puncte de penalizare, perioada de suspendare a exercitării dreptului de a conduce se compune din însumarea perioadelor corespunzătoare fiecărei fapte,
              calculate în conditiile stabilite prin regulament, fără ca această perioadă să depăsească 90 de zile.
              <br>Art. 97. – Perioadele de suspendare pot fi reduse, dar nu mai putin de 30 de zile, dacă titularul permisului absolvă un curs de sigurantă rutieră, în conditiile prevăzute în regulament.
              <br>Art. 98. – Permisul de conducere se retine în următoarele cazuri:
              <br>a) la cumularea a cel putin 15 puncte de penalizare;
              <br>b) când titularul acestuia a săvârsit una dintre infractiunile prevăzute la art. 77, la art. 78 alin. (2), la art. 79 alin. (1), (3) si (4) si la art. 81 alin. (1);
              <br>c) când titularul acestuia a săvârsit una dintre infractiunile prevăzute la art. 178 si 184 din Codul penal, dacă acestea au fost comise ca urmare a nerespectării dispozitiilor legale privind circulatia pe drumurile publice;
              <br>d) la săvârsirea uneia dintre contraventiile pentru care prin regulament se dispune ca măsură administrativă retinerea pe loc a permisului de conducere;
              <br>e) când prezintă modificări, stersături sau adăugări, este deteriorat ori se află în mod nejustificat asupra altei persoane.
              <br>Art. 99. – Certificatul de înmatriculare sau de înregistrare ori plăcutele cu numere de înmatriculare se retin de către politie în conditiile stabilite prin regulament, eliberându-se o dovadă înlocuitoare, cu sau fără drept de
              circulatie, după caz.
              <br>Art. 100. – (1) Permisul de conducere se restituie titularului:
              <br>a) la expirarea perioadei de suspendare;
              <br>b) când, în conditiile art. 88 alin. (4), s-a hotărât că exercitarea dreptului de a conduce nu se suspendă;
              <br>c) la încetarea măsurii de sigurantă prevăzute la art. 112 lit. c) din Codul penal;
              <br>d) în baza ordonantei procurorului prin care s-a dispus neînceperea urmăririi penale, scoaterea de sub urmărirea penală sau încetarea urmăririi penale;
              <br>e) la data rămânerii definitive a hotărârii judecătoresti prin care s-a dispus achitarea;
              <br>f) la încetarea motivelor pentru care s-a dispus retragerea documentului.
              <br>(2) Procedura de restituire a permisului de conducere se stabileste prin regulament.
              <br>Art. 101. – (1) Permisul de conducere se anulează de către seful inspectoratului judetean de politie, Directiei Generale de Politie a Municipiului Bucuresti sau al directiei politiei specializate din Inspectoratul General al
              Politiei Române pe a cărei rază de competentă a fost comisă fapta, în cazul în care titularul acestuia a fost condamnat printr-o hotărâre judecătorească rămasă definitivă:
              <br>a) pentru infractiunile care au avut ca urmare moartea sau vătămarea gravă a integritătii corporale ori sănătătii uneia sau mai multor persoane ori de distrugere a unuia sau mai multor vehicule, săvârsite ca urmare a nerespectării
              regulilor de circulatie;
              <br>b) pentru infractiunile prevăzute la art. 77, art. 78 alin. (2) si la art. 79 alin. (1), (3) si (4);
              <br>c) pentru infractiunile prevăzute la art. 81 alin. (1);
              <br>d) în cazul aplicării pedepsei complementare a interzicerii exercitării profesiei sau ocupatiei de conducător de vehicule.
              <br>(2) Permisul de conducere se anulează si în cazul în care titularul acestuia a decedat.
              <br>(3) Procedura anulării permisului de conducere se stabileste prin regulament.
              <br>Art. 102. – Suspendarea exercitării dreptului de a conduce sau anularea permisului de conducere se dispune de către politie si în cazul în care împotriva titularului acestuia s-a hotărât o astfel de măsură de către o autoritate
              străină competentă, pentru o faptă săvârsită pe teritoriul altui stat, în conditiile stabilite prin Conventia europeană cu privire la efectele internationale ale interzicerii exercitării dreptului de a conduce un vehicul cu motor,
              adoptată la Bruxelles la 3 iunie 1976, ratificată de România prin Legea nr. 126/1997.
              <br>Art. 103. – (1) Persoana al cărei permis de conducere a fost anulat ca urmare a rămânerii definitive a unei hotărâri judecătoresti de condamnare pentru una dintre faptele prevăzute la art. 101 alin. (1) se poate prezenta la examen
              pentru obtinerea unui nou permis de conducere,pentru toate categoriile avute anterior, dacă:
              <br>(a) au trecut 6 luni de la data executării pedepsei în regim de privare de libertate sau a trecut un an de la data rămânerii definitive a hotărârii judecătoresti prin care s-a dispus suspendarea conditionată a executării pedepsei
              ori suspendarea executării pedepsei sub supraveghere;
              <br>(b) a intervenit amnistia sau reabilitarea;
              <br>(c) interzicerea dreptului de a exercita profesia sau ocupatia de conducător de autovehicule a expirat sau a fost revocată.
              <br>(2) Pentru a fi admis la examen în vederea obtinerii unui nou permis de conducere candidatul trebuie să facă dovada:
              <br>a) că este apt din punct de vedere medical si psihologic;
              <br>b) că a absolvit un curs de legislatie rutieră si conduită preventivă organizat de o unitate autorizată, în conditiile legii.
              <br>Art. 104. – (1) Imobilizarea unui vehicul care circulă pe drumul public se dispune în următoarele situatii:
              <br>a) vehiculul nu este înmatriculat sau înregistrat;
              <br>b) are număr de înmatriculare sau înregistrare fals;
              <br>c) circulă fără plăcute cu numere de înmatriculare ori înregistrare;
              <br>d) starea tehnică a vehiculului pune în pericol grav siguranta circulatiei, deteriorează grav drumul public sau mediul înconjurător;
              <br>e) vehiculul circulă cu încălcarea regulilor referitoare la transportul mărfurilor periculoase ori cu gabarite si/sau mase depăsite;
              <br>f) există date sau indicii că vehiculul face obiectul unei infractiuni;
              <br>g) conducătorul auto refuză să se legitimeze;
              <br>h) conducătorul auto se află în stare de ebrietate, sub influenta substantelor stupefiante sau a medicamentelor cu efect similar.
              <br>(2) Procedura de imobilizare a vehiculelor în cazurile prevăzute la alin. (1) se stabileste prin regulament.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                Cai de atac impotriva procesului verbal</a>
            </h4>
          </div>
          <div id="collapse8" class="panel-collapse collapse">
            <div class="panel-body">Art. 105. – (1) Împotriva procesului-verbal de constatare a contraventiei si, după caz, a actului prin care s-a dispus una dintre sanctiunile contraventionale complementare prevăzute la art. 88 alin. (1) se poate
              depune plângere, în termen de 15 zile de la comunicare, la sediul unitătii de politie din care face parte agentul constatator.
              <br>(2) Plângerea suspendă executarea amenzilor si a sanctiunilor contraventionale complementare, de la data înregistrării acesteia la unitatea de politie din care face parte agentul constatator.
              <br>(3) Plângerea, împreună cu dosarul cauzei, se trimite de îndată instantei de judecată pe raza căreia a fost săvârsită fapta.
              <br>(4) Instanta învestită cu solutionarea cauzei dispune asupra legalitătii si sanctiunile contraventionale complementare administrative.
              <br>Art. 106. – (1) Hotărârea pronuntată în primă instantă este supusă recursului.
              <br>(2) Recursul, împreună cu actele care au stat la baza hotârârii, se depune la instanta a cărei hotărâre se atacă,în termen de 15 zile de la comunicare.
              <br>(3) Judecata se face de urgentă, cu citarea părtilor, iar hotărârea tribunalului este definitivă si irevocabilă.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                Atributiile ministerelor</a>
            </h4>
          </div>
          <div id="collapse9" class="panel-collapse collapse">
            <div class="panel-body">Art. 107. – Ministerul Lucrărilor Publice, Transporturilor si Locuintei are următoarele atributii:
              <br>a) ia măsuri ca drumurile pe care le administrează să fie mentinute permanent în stare de viabilitate;
              <br>b) instalează, aplică si întretine mijloacele de semnalizare rutieră, precum si echipamentele destinate sigurantei circulatiei pe drumurile în administrare;
              <br>c) autorizează efectuarea lucrărilor în zonele de sigurantă si protectie a drumurilor din administrare, verifică modul de executare si respectarea termenelor stabilite;
              <br>d) stabileste conditiile tehnice si metodologia de omologare si certificare a echipamentelor, pieselor de schimb si materialelor pentru vehicule rutiere;
              <br>e) autorizează înfiintarea si functionarea statiilor de inspectie tehnică, supraveghează si controlează activitatea acestora si atestă personalul care efectuează inspectia tehnică;
              <br>f) stabileste norme metodologice si organizează pregătirea, examinarea si atestarea profesională a instructorilor si profesorilor de legislatie în domeniul transporturilor rutiere;
              <br>g) stabileste conditiile tehnice si metodologice de omologare pentru circulatia pe drumurile publice, de inspectie tehnică si de verificare tehnică pentru vehicule;
              <br>h) autorizează înfiintarea si functionarea scolilor pentru pregătirea conducătorilor de autovehicule si tramvaie;
              <br>i) stabileste norme obligatorii privind organizarea si desfăsurarea transporturilor rutiere si controlează respectarea acestora;
              <br>j) ia măsuri pentru amenajarea de trotuare si drumuri laterale pentru circulatia pietonilor, vehiculelor cu tractiune animală, a tractoarelor si de piste pentru biciclete, precum si de benzi destinate exclusiv transportului public
              de persoane;
              <br>k) elaborează reglementări specifice în domeniul transporturilor rutiere;
              <br>l) stabileste conditiile tehnice si metodologia de omologare pentru circulatia pe drumurile publice, de inspectie tehnică si de verificare tehnică pentru vehicule;
              <br>m) omologhează pentru circulatie vehicule;
              <br>n) certifică sau omologhează echipamentele, piesele de schimb si materialele pentru vehiculele fabricate în tară sau importate;
              <br>o) autorizează agentii economici care prestează servicii de reparatii la vehicule;
              <br>p) asigură efectuarea verificării tehnice a vehiculelor, cu exceptia celor noi, în vederea înmatriculării acestora.
              <br>Art. 108. – Ministerul Apărării Nationale are următoarele atributii:
              <br>a) îndrumă, supraveghează si controlează circulatia pe drumurile publice a vehiculelor apartinând acestui minister si controlează respectarea de către conducătorii proprii a regulilor de circulatie;
              <br>b) cooperează cu unitătile politiei specializate la realizarea actiunilor de însotire a coloanelor oficiale militare, precum si a vehiculelor din parcul propriu;
              <br>c) înmatriculează sau înregistrează vehiculele din parcul propriu si tine evidenta acestora;
              <br>d) pregăteste personalul propriu pentru conducerea vehiculelor ministerului si autorizează personalul didactic din scolile de pregătire a conducătorilor auto din sistemul propriu;
              <br>e) organizează si execută inspectia tehnică a vehiculelor din unitătile din subordinea sa;
              <br>f) elaborează, împreună cu Ministerul Administraţiei şi Internelor, norme privind conditiile în care pot circula pe drumul public vehiculele speciale de luptă din parcul propriu;
              <br>g) elaborează, împreună cu Ministerul Administraţiei şi Internelor, norme privind controlul circulatiei autovehiculelor apartinând Ministerului Apărării Nationale si însotirea coloanelor militare.
              <br>Art. 109. – Ministerul Educatiei si Cercetării are următoarele atributii:
              <br>a) asigură, prin programa scolară, educatia rutieră a prescolarilor si elevilor din învătământul preuniversitar;
              <br>b) asigură, prin formare initială si continuă, pregătirea în domeniul conducerii autovehiculelor;
              <br>c) îndrumă, coordonează si controlează, prin inspectoratele scolare din subordine, activitatea de educatie rutieră, inclusiv de pregătire si perfectionare a cadrelor didactice desemnate să execute astfel de activităti;
              <br>d) asigură materialul didactic pentru laboratoarele de educatie rutieră si parcurile-scoală proprii de circulatie.
              <br>Art. 110. – (1) Ministerul Sănătătii si Familiei are următoarele atributii:
              <br>a) elaborează norme referitoare la examinarea medicală a conducătorilor de vehicule si la măsurile ce trebuie luate de unitătile sanitare, în scopul prevenirii accidentelor de circulatie generate de cauze medicale;
              <br>b) elaborează norme privind examinarea medicală, recoltarea si analiza probelor biologice, în vederea stabilirii alcoolemiei, consumului de produse sau substante stupefiante ori medicamente cu efecte similare de natură a influenta
              comportamentul conducătorilor de vehicule;
              <br>c) elaborează norme privind examinarea psihologică si medicală în vederea eliberării permisului de conducere;
              <br>d) stabileste programa cursurilor de pregătire a conducătorilor de vehicule, la temele privind acordarea primului ajutor medical în accidente de circulatie si controlează modul cum se realizează aceste activităti;
              <br>e) stabileste semnul distinctiv ce se aplică pe ambalajul medicamentelor contraindicate conducerii vehiculelor;
              <br>f) stabileste continutul truselor medicale de prim ajutor si le certifică.
              <br>(2) Normele prevăzute la alin. (1) lit. a), b) si c) se aprobă prin ordin al ministrului sănătătii si familiei la propunerea autoritătii competente din subordine.
              <br>Art. 111. – Comisia de Supraveghere a Asigurărilor va întocmi programe de preventie rutieră si va îndruma, coordona si controla modul de aplicare a acestora de către societătile autorizate.
              <br>Art. 112. – (1) În scopul coordonării unei strategii unitare, multidisciplinare în domeniul sigurantei circulatiei rutiere, în subordinea Guvernului functionează Consiliul Interministerial pentru Sigurantă Rutieră.
              <br>(2) Atributiile Consiliului Interministerial pentru Sigurantă Rutieră se stabilesc prin hotărâre a Guvernului.
              <br>Art. 113. – (1) Consiliile judetene, consiliile locale si Consiliul General al Municipiului Bucuresti au următoarele atributii:
              <br>a) iau măsuri pentru mentinerea permanentă în stare tehnică bună a drumurilor pe care le administrează;
              <br>b) instalează, aplică si întretin mijloacele de semnalizare rutieră si echipamentele destinate sigurantei circulatiei, tinând evidenta acestora;
              <br>c) întocmesc si actualizează planurile de organizare a circulatiei pentru localitătile urbane si iau măsuri pentru realizarea lucrărilor ce se impun în vederea asigurării fluentei si sigurantei traficului, precum si a reducerii
              nivelurilor de emisii poluante;
              <br>d) stabilesc reglementări referitoare la regimul de acces si circulatie, stationare si parcare pentru diferite categorii de vehicule;
              <br>e) iau măsuri pentru amenajarea de trotuare si drumuri laterale pentru circulatia pietonilor, vehiculelor cu tractiune animală, a tractoarelor si de piste pentru biciclete;
              <br>f) înregistrează si tin evidenta vehiculelor nesupuse înmatriculării;
              <br>g) iau măsuri pentru ridicarea si depozitarea, în spatii special amenajate, a autovehiculelor, remorcilor, caroseriilor sau subansamblurilor acestora, devenite improprii din punct de vedere tehnic pentru a circula pe drumurile
              publice, abandonate sau părăsite pe domeniul public;
              <br>h) iau măsuri pentru asigurarea spatiului si depozitării vehiculelor cu tractiune animală depistate circulând pe drumurile publice pe care le este interzis accesul.
              <br>(2) Proiectele de sistematizare a localitătilor, precum si a drumurilor publice din interiorul si din afara acestora, elaborate de consiliile locale si ale municipiului Bucuresti, vor fi avizate de politia specializată.
              <br>Art. 114. – (1) Ministerul Administraţiei şi Internelor, consiliile locale si ale municipiului Bucuresti vor lua măsuri pentru popularizarea regulilor de circulatie în rândul tuturor persoanelor care folosesc drumurile publice si,
              în acest scop, vor prevedea în planurile anuale fondurile necesare.
              <br>(2) Mass-media va sprijini actiunile Ministerului Administraţiei şi Internelor, ale consiliilor locale si ale municipiului Bucuresti în legătură cu popularizarea regulilor de circulatie pe drumurile publice.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                Alte articole</a>
            </h4>
          </div>
          <div id="collapse10" class="panel-collapse collapse">
            <div class="panel-body">Art. 115. – (1) Detinătorii de autovehicule sunt obligati să doteze autovehiculele pe care le detin cu truse medicale de prim ajutor, pentru fiecare categorie de autovehicul, precum si cu triunghiuri
              reflectorizante si stingătoare de incendiu, conform legislatiei în vigoare.
              <br>(2) Detinătorii de autovehicule, inclusiv ai celor care efectuează transportul public de persoane sau de mărfuri periculoase, sunt obligati:
              <br>a) să asigure testarea anuală a calificării conducătorilor de autovehicule, în scopul însusirii corecte si respectării de către acestia a dispozitiilor legale ce reglementează circulatia pe drumurile publice;
              <br>b) să doteze autovehiculele proprii cu aparate de control al timpilor de odihnă si al vitezei de deplasare, omologate, precum si cu truse medicale de prim ajutor, triunghiuri reflectorizante si stingătoare de incendiu.
              <br>Art. 116. – În desfăsurarea activitătilor de prevenire a accidentelor rutiere politia poate solicita sprijinul unor conducători de autovehicule, care consimt să participe voluntari la acestea, conform legii.
              <br>Art. 117. – (1) Modelele indicatoarelor, marcajelor si semnalelor luminoase, precum si semnalele agentilor de
              circulatie sunt prevăzute în anexa care face parte integrantă din prezenta ordonantă de urgentă.
              <br>(2) Anexa prevăzută la alin. (1) poate fi modificată si completată prin hotărâre a Guvernului, în baza modificărilor si completărilor aduse conventiilor internationale în domeniu la care România este parte.
              <br>Art. 118. – (1) Prezenta ordonantă de urgentă se aplică începând cu data de 1 februarie 2003. Pe aceeasi dată Decretul nr. 328/1966 privind circulatia pe drumurile publice, cu modificările ulterioare, republicat în Buletinul
              Oficial, Partea I, nr. 49 din 28 iunie 1984, precum si orice alte dispozitii contrare prezentei ordonante de urgentă se abrogă.
              <br>(2) În termen de 30 de zile de la data publicării Ministerul de Interne va elabora regulamentul de aplicare a prezentei ordonante de urgentă, care se aprobă prin hotărâre a Guvernului.</div>
          </div>
        </div>
      </div>
      <br>

    </div>
  </div>







  <div class="" style="height:51px;">
  </div>
  <div class="row" data-aos="zoom-in-left" data-aos-duration="3000">
    <div class="col-md-10 col-md-offset-1">
      <center>
        <h1>Indicatoare Rutiere</h1>
      </center>
      <br>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse21">
                Indicatoare de Averizare</a>
            </h4>
          </div>
          <div id="collapse21" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
            <div class="panel-body">
              <div class="semne1">
                <div>
                  <ul id="indicatoare">
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/001.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Curba la stanga</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/002.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Curba la dreapta</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/003.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Curba dubla sau succesiune de mai multe curbe, prima la stanga</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/004.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Curba dubla sau succesiune de mai multe curbe, prima la dreapta</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/038.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Curba deosebit de periculoasa</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/039.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Panouri succesive pentru curbe deosebit de periculoase</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/006.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Coborare periculoasa</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/005.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Urcare cu inclinare mare</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/007.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum ingustat pe ambele parti</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/009.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum ingustat pe partea dreapta</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/008.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum ingustat pe partea stanga</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/010.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Acostament periculos</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/011.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Tunel</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/012.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Pod mobil</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/013.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Iesire spre un chei sau mal abrupt</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/014.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum cu denivelari</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/015.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum alunecos</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/016.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Improscare cu pietris</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/017.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Caderi de pietre</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/018.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Presem-nalizare trecere pietoni</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/019.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Copii</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/020.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Biciclisti</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/021.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Animale</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/036.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Animale</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/022.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Lucrari</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/023.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Semafoare</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/024.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Aeroport</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/025.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Vant lateral</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/032.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Circulatie in ambele sensuri</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/031.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Alte pericole</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/030.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accident</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/029.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Intersectie de drumuri</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/028.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Intersectie cu un drum fara prioritate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/027.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Intersectie cu un drum fara prioritate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/026.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Intersectie cu un drum fara prioritate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/033.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Presemnali-zare intersectie cu sens giratoriu</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/034.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Trecere la nivel cu cale ferata cu bariere sau semibariere</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/035.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Trecere la nivel cu cale ferata fara bariere</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/037.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Trecere la nivel cu linii de tramvai</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/040.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Panouri suplimentare pentru trecerea la nivel cu calea ferata</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/041.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Panouri suplimentare la nodurile rutiere de pe autostrazi</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/042.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Baliza directionala</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/043.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Baliza bidirectionala</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/045.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Trecere la nivel cu o cale ferata simpla fara bariere</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/044.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Trecere la nivel cu o cale ferata dubla fara bariere</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/051.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Cedeaza trecerea</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/046.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Oprire</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/047.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum cu prioritate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/048.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sfarsitul drumului cu prioritate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/049.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Prioritate pentru circulatia din sens invers</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/050.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Prioritate fata de circulatia din sens invers</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/052.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/053.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Circulatia interzisa in ambele sensuri</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/054.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis autovehicu-lelor cu exceptia motocicletelor fara atas</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/056.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis motocicletelor</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/057.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis bicicletelor</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/058.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis vehiculelor destinate transportului de marfuri</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/059.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis autovehiculelor cu remorca, cu exceptia celor cu semiremorca sau remorca cu o osie</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/061.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis autobuzelor</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/062.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis pietonilor</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/063.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis vehiculelor cu tractiune animala</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/064.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis vehiculelor impinse sau trase cu mana</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/065.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis tractoarelor si masinilor agricole</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/066.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis autovehi-culelor</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/067.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis autovehiculelor si vehiculelor cu tractiune animala</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/070.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis vehiculelor cu latime mai mare de … m</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/071.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis vehiculelor cu inaltime mai mare de … m</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/072.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis vehiculelor cu masa mai mare de … t</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/073.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis vehiculelor cu masa mai mare de …t pe osia simpla</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/074.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis vehiculelor cu masa pe osia dubla mai mare de … t</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/075.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis autovehiculelor sau ansamblurilor de vehicule cu o lungime mai mare de … m</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/076.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Interzis autovehicu-lelor de a circula fara a mentine intre ele un interval de cel putin … m</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/060.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Interzis a vira la stanga</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/068.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Interzis a vira la dreapta</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/077.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Intoarcerea interzisa</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/078.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Depasirea autovehicu-lelor, cu exceptia motocicletelor fara atas, interzisa</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/082.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Limitare de viteza</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/079.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Limitare de viteza diferentiata pe categorii de autovehicule</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/083.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Claxonarea interzisa</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/084.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Vama</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/085.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Taxa de trecere</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/086.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Control Politie</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/087.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sfarsitul tuturor restrictiilor</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/088.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sfarsitul limitarii de viteza</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/089.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sfarsitul interzicerii de a depasi</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/090.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Stationarea interzisa</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/091.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Oprirea interzisa</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/092.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Stationare alternanta</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/093.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Stationare alternanta</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/094.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Zona de stationare cu durata limitata</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/095.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sfarsitul zonei de stationare cu durata limitata</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/096.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis vehiculelor care transporta substante explozive sau usor inflamabile</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/097.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis vehiculelor care transporta marfuri periculoase</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/098.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Accesul interzis vehiculelor care transporta substante de natura sa polueze apele</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/099.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Inainte</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/100.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      La dreapta</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/101.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      La dreapta</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/102.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Inainte sau la dreapta</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/103.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Ocolire</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/104.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Ocolire</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/105.jpg" alt="Scoala Auto - Indicatoare rutiere"> Intersectie cu sens giratoriu</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/106.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Pista pentru biciclete</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/107.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum obligatoriu pentru categoria de vehicule</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/108.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum pentru pietoni</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/109.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Delimitarea pistelor pentru pietoni si biciclisti</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/110.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Pista comuna pentru pietoni si biciclisti</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/112.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Viteza minima obligatorie</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/111.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sfarsitul vitezei minime obligatorii</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/113.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Lanturi pentru zapada</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/184.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Presemnalizarea directiilor la o intersectie de drumuri din afara localitatilor</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/182.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Presemnalizarea directiilor la o intersectie denivelata de drumuri</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/185.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Presemnalizarea directiilor indicate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/181.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Presemnalizarea traseului de evitare a localitatii</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/187.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Presemnalizarea directiilor intr-o intersectie cu sens giratoriu</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/186.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum inchis sau deschis</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/183.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Presemnalizarea traseului de urmat in cazul unei restrictii de circulatie</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/188.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Presemnalizarea unui loc periculos, o interzicere sau o restrictie pe un drum lateral</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/220.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Presemnalizarea traseului de urmat in vederea efectuarii virajului la stanga</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/176.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Banda rezervata circulatiei autovehiculelor de transport public de persoane</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/173.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum fara iesire</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/174.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Traseu de urmat pentru anumite categorii de vehicule</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/175.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Selectarea circulatiei pe directii de mers in apropierea intersectiei</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/178.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Banda destinata circulatiei vehiculelor lente</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/179.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Terminarea benzii de circulatie din dreapta partii carosabile</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/180.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Terminarea benzii de circulatie din stanga partii carosabile</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/209.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Limita de judet</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/210.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Curs de apa, tunel sau viaduct</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/198.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      sau</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/199.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Directia spre localitatea indicata</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/200.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Directia spre localitatile indicate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/195.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Directia de urmat pentru autovehicule destinate transportului de marfuri</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/194.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      sau</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/193.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Directia de urmat in cazul devierii temporare a circulatiei</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/202.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Directia spre obiectivul turistic</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/196.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Directia spre obiective locale</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/197.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Directia spre aeroport</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/212.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum national</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/213.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum judetean</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/228.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum comunal</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/214.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum deschis traficului international</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/216.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Directia spre drumul deschis traficului international</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/215.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Traseu de tranzit european</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/227.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Simbolul si numarul autostrazii</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/205.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Intrare in localitate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/206.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Iesire din localitate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/208.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Confirmarea directiei de mers spre localitatile mai importante si distantele pana la acestea</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/201.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Confirmarea directiei de mers spre o localitate si distanta pana la aceasta</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/149.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Trecere pentru pietoni</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/150.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Trecere pentru pietoni</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/140.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Limite generale de viteza</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/123.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Teren pentru caravane (tabara turistica)</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/136.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Teren pentru camping si caravane</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/124.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Loc pentru popas</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/137.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Cabana pentru turisti</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/125.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      WC public</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/128.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Service auto</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/138.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Parcare</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/126.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Parcare</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/139.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Parcare subterana sau in cladire</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/143.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Zona cu viteza recomandata 30km/h</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/144.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sfarsitul zonei cu viteza recomandata 30km/h</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/190.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Complex de servicii</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/145.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Zona rezidentiala</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/146.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sfarsitul zonei rezidentiale</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/121.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Statie de taximetre</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/122.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Drum pentru autovehicule</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/127.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sfarsitul drumului pentru autovehicule</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/129.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Telefon</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/132.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Statie de alimentare cu carbu-ranti</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/133.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Benzinarie, inclusiv benzina fara plumb</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/131.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Hotel sau motel</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/130.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Restaurant</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/134.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Bufet sau cofetarie</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/135.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Teren pentru camping</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/152.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sens unic</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/207.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sens unic</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/117.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Auto-strada</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/118.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sfarsit de auto-strada</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/151.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Spital</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/115.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Politia</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/116.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Post de prim ajutor</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/114.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Pasaj subteran pentru pietoni</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/119.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Statie de autobuz</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/120.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Statie de tramvai</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/142.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Control radar</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/141.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Informatii rutiere</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/211.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Numarul imobilului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/153.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Punct de informare turistica</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/203.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Denumirea strazii</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/204.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Intrarea pe strada indicata</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/170.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Distanta pana la locul la care se refera indicatorul</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/192.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Directia si distanta pana la locul la care se refera indicatorul</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/168.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Intervale de timp in care actioneaza indicatorul</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/219.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Categoria de autovehicule la care se refera indicatorul</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/218.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Trecere la nivel cu calea ferata industriala completand semnificatia indicatorului “Alte pericole”</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/166.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Lungimea sectorului periculos la care se refera indicatorul</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/223.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Inceputul si lungimea zonei de actiune a indicatorului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/224.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Inceputul zonei de actiune a indicatorului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/226.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Confirmarea zonei de actiune a indicatorului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/225.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sfarsitul zonei de actiune a indicatorului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/167.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Folosirea luminilor de intalnire</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/164.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Polei, gheata, zapada</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/158.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Dus</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/156.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Persoane cu handicap</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/163.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Categoriile de autovehicule care trebuie sa respecte semnificatia indicatorului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/157.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Exceptarea unor categorii de vehicule de la semnificatia indicatorului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/159.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Intervale de timp in care este permisa stationarea vehiculelor ce efectueaza aprovizionarea</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/160.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Directia drumului cu prioritate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/161.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Directia drumului cu prioritate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/217.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Viteza recomandata pe un sector de drum cu semafoare sincronizate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/221.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sensul de circulartie pentru care este valabila semnificatia semnalelor luminoase ale semaforului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/222.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Sensul de circulartie pentru care este valabila semnificatia semnalelor luminoase ale semaforului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto - Indicatoare rutiere" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/165.jpg" alt="Scoala Auto - Indicatoare rutiere"><br>
                      Trecere la nivel cu caleaferata prevazuta cu instalatie de semnalizare luminoasa automata</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse22">
                Indicatoare de Prioritate</a>
            </h4>
          </div>
          <div id="collapse22" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="semne2">
                <div>
                  <ul id="indicatoare">
                    <li><img style="vertical-align: middle;" title="Scoala Auto AichiConect - Indicatoare" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/051.jpg" alt="Scoala Auto Auto - Indicatoare"><br>
                      Cedeaza trecerea</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto AichiConect - Indicatoare" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/046.jpg" alt="Scoala Auto AichiConect - Indicatoare"><br>
                      Oprire</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto AichiConect - Indicatoare" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/047.jpg" alt="Scoala Auto AichiConect - Indicatoare"><br>
                      Drum cu prioritate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto AichiConect - Indicatoare" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/048.jpg" alt="Scoala Auto AichiConect - Indicatoare"><br>
                      Sfarsitul drumului cu prioritate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto AichiConect - Indicatoare" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/049.jpg" alt="Scoala Auto AichiConect - Indicatoare"><br>
                      Prioritate pentru circulatia din sens invers</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto AichiConect - Indicatoare" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/050.jpg" alt="Scoala Auto AichiConect - Indicatoare"><br>
                      Prioritate fata de circulatia din sens invers</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse23">
                Indicatoare de Restrictie</a>
            </h4>
          </div>
          <div id="collapse23" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="semne3">
                <div>
                  <ul id="indicatoare">
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/052.jpg" alt="Trafficator"><br>
                      Accesul interzis</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/053.jpg" alt="Trafficator"><br>
                      Circulatia interzisa in ambele sensuri</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/054.jpg" alt="Trafficator"><br>
                      Accesul interzis autovehicu-lelor cu exceptia motocicletelor fara atas</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/056.jpg" alt="Trafficator"><br>
                      Accesul interzis motocicletelor</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/057.jpg" alt="Trafficator"><br>
                      Accesul interzis bicicletelor</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/058.jpg" alt="Trafficator"><br>
                      Accesul interzis vehiculelor destinate transportului de marfuri</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/059.jpg" alt="Trafficator"><br>
                      Accesul interzis autovehiculelor cu remorca, cu exceptia celor cu semiremorca sau remorca cu o osie</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/061.jpg" alt="Trafficator"><br>
                      Accesul interzis autobuzelor</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/062.jpg" alt="Trafficator"><br>
                      Accesul interzis pietonilor</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/063.jpg" alt="Trafficator"><br>
                      Accesul interzis vehiculelor cu tractiune animala</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/064.jpg" alt="Trafficator"><br>
                      Accesul interzis vehiculelor impinse sau trase cu mana</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/065.jpg" alt="Trafficator"><br>
                      Accesul interzis tractoarelor si masinilor agricole</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/066.jpg" alt="Trafficator"><br>
                      Accesul interzis autovehi-culelor</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/067.jpg" alt="Trafficator"><br>
                      Accesul interzis autovehiculelor si vehiculelor cu tractiune animala</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/070.jpg" alt="Trafficator"><br>
                      Accesul interzis vehiculelor cu latime mai mare de … m</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/071.jpg" alt="Trafficator"><br>
                      Accesul interzis vehiculelor cu inaltime mai mare de … m</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/072.jpg" alt="Trafficator"><br>
                      Accesul interzis vehiculelor cu masa mai mare de … t</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/073.jpg" alt="Trafficator"><br>
                      Accesul interzis vehiculelor cu masa mai mare de …t pe osia simpla</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/074.jpg" alt="Trafficator"><br>
                      Accesul interzis vehiculelor cu masa pe osia dubla mai mare de … t</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/075.jpg" alt="Trafficator"><br>
                      Accesul interzis autovehiculelor sau ansamblurilor de vehicule cu o lungime mai mare de … m</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/076.jpg" alt="Trafficator"><br>
                      Interzis autovehicu-lelor de a circula fara a mentine intre ele un interval de cel putin … m</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/060.jpg" alt="Trafficator"><br>
                      Interzis a vira la stanga</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/068.jpg" alt="Trafficator"><br>
                      Interzis a vira la dreapta</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/077.jpg" alt="Trafficator"><br>
                      Intoarcerea interzisa</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/078.jpg" alt="Trafficator"><br>
                      Depasirea autovehicu-lelor, cu exceptia motocicletelor fara atas, interzisa</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/082.jpg" alt="Trafficator"><br>
                      Limitare de viteza</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/079.jpg" alt="Trafficator"><br>
                      Limitare de viteza diferentiata pe categorii de autovehicule</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/083.jpg" alt="Trafficator"><br>
                      Claxonarea interzisa</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/084.jpg" alt="Trafficator"><br>
                      Vama</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/085.jpg" alt="Trafficator"><br>
                      Taxa de trecere</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/086.jpg" alt="Trafficator"><br>
                      Control Politie</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/087.jpg" alt="Trafficator"><br>
                      Sfarsitul tuturor restrictiilor</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/088.jpg" alt="Trafficator"><br>
                      Sfarsitul limitarii de viteza</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/089.jpg" alt="Trafficator"><br>
                      Sfarsitul interzicerii de a depasi</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/090.jpg" alt="Trafficator"><br>
                      Stationarea interzisa</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/091.jpg" alt="Trafficator"><br>
                      Oprirea interzisa</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/092.jpg" alt="Trafficator"><br>
                      Stationare alternanta</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/093.jpg" alt="Trafficator"><br>
                      Stationare alternanta</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/094.jpg" alt="Trafficator"><br>
                      Zona de stationare cu durata limitata</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/095.jpg" alt="Trafficator"><br>
                      Sfarsitul zonei de stationare cu durata limitata</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/096.jpg" alt="Trafficator"><br>
                      Accesul interzis vehiculelor care transporta substante explozive sau usor inflamabile</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/097.jpg" alt="Trafficator"><br>
                      Accesul interzis vehiculelor care transporta marfuri periculoase</li>
                    <li><img style="vertical-align: middle;" title="Trafficator" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/098.jpg" alt="Trafficator"><br>
                      Accesul interzis vehiculelor care transporta substante de natura sa polueze apele</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse24">
                Indicatoare de Obligare si Interzicere</a>
            </h4>
          </div>
          <div id="collapse24" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="semne4">
                <div>
                  <ul id="indicatoare">
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/099.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3"><br>
                      Inainte</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/100.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3"><br>
                      La dreapta</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/101.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3"><br>
                      La dreapta</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/102.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3"><br>
                      Inainte sau la dreapta</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/103.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3"><br>
                      Ocolire</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/104.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3"><br>
                      Ocolire</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/105.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3">
                      Intersectie cu sens giratoriu</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/106.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3"><br>
                      Pista pentru biciclete</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/107.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3"><br>
                      Drum obligatoriu pentru categoria de vehicule</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/108.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3"><br>
                      Drum pentru pietoni</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/109.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3"><br>
                      Delimitarea pistelor pentru pietoni si biciclisti</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/110.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3"><br>
                      Pista comuna pentru pietoni si biciclisti</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/112.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3"><br>
                      Viteza minima obligatorie</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/111.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3"><br>
                      Sfarsitul vitezei minime obligatorii</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/113.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3"><br>
                      Lanturi pentru zapada</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse25">
                Indicatoare de Orientare</a>
            </h4>
          </div>
          <div id="collapse25" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="semne5">
                <div>
                  <ul id="indicatoare">
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/184.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Presemnalizarea directiilor la o intersectie de drumuri din afara localitatilor</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/182.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Presemnalizarea directiilor la o intersectie denivelata de drumuri</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/185.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Presemnalizarea directiilor indicate</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/181.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Presemnalizarea traseului de evitare a localitatii</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/187.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Presemnalizarea directiilor intr-o intersectie cu sens giratoriu</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/186.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Drum inchis sau deschis</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/183.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Presemnalizarea traseului de urmat in cazul unei restrictii de circulatie</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/188.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Presemnalizarea unui loc periculos, o interzicere sau o restrictie pe un drum lateral</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/220.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Presemnalizarea traseului de urmat in vederea efectuarii virajului la stanga</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/176.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Banda rezervata circulatiei autovehiculelor de transport public de persoane</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/173.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Drum fara iesire</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/174.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Traseu de urmat pentru anumite categorii de vehicule</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/175.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Selectarea circulatiei pe directii de mers in apropierea intersectiei</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/178.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Banda destinata circulatiei vehiculelor lente</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/179.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Terminarea benzii de circulatie din dreapta partii carosabile</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/180.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Terminarea benzii de circulatie din stanga partii carosabile</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/209.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Limita de judet</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/210.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Curs de apa, tunel sau viaduct</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/198.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      sau</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/199.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Directia spre localitatea indicata</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/200.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Directia spre localitatile indicate</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/195.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Directia de urmat pentru autovehicule destinate transportului de marfuri</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/194.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      sau</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/193.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Directia de urmat in cazul devierii temporare a circulatiei</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/202.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Directia spre obiectivul turistic</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/196.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Directia spre obiective locale</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/197.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Directia spre aeroport</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/212.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Drum national</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/213.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Drum judetean</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/228.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Drum comunal</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/214.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Drum deschis traficului international</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/216.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Directia spre drumul deschis traficului international</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/215.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Traseu de tranzit european</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/227.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Simbolul si numarul autostrazii</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/205.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Intrare in localitate</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/206.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Iesire din localitate</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/208.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Confirmarea directiei de mers spre localitatile mai importante si distantele pana la acestea</li>
                    <li><img style="vertical-align: middle;" title="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/201.jpg" alt="Scoala de soferi Vlad - Scoala Auto AichiConect sector 3 si sector 2"><br>
                      Confirmarea directiei de mers spre o localitate si distanta pana la aceasta</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse26">
                Indicatoare de Informare</a>
            </h4>
          </div>
          <div id="collapse26" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="semne6">
                <div>
                  <ul id="indicatoare">
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/149.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Trecere pentru pietoni</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/150.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Trecere pentru pietoni</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/140.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Limite generale de viteza</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/123.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Teren pentru caravane (tabara turistica)</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/136.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Teren pentru camping si caravane</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/124.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Loc pentru popas</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/137.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Cabana pentru turisti</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/125.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      WC public</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/128.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Service auto</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/138.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Parcare</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/126.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Parcare</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/139.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Parcare subterana sau in cladire</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/143.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Zona cu viteza recomandata 30km/h</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/144.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Sfarsitul zonei cu viteza recomandata 30km/h</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/190.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Complex de servicii</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/145.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Zona rezidentiala</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/146.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Sfarsitul zonei rezidentiale</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/121.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Statie de taximetre</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/122.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Drum pentru autovehicule</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/127.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Sfarsitul drumului pentru autovehicule</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/129.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Telefon</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/132.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Statie de alimentare cu carbu-ranti</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/133.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Benzinarie, inclusiv benzina fara plumb</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/131.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Hotel sau motel</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/130.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Restaurant</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/134.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Bufet sau cofetarie</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/135.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Teren pentru camping</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/152.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Sens unic</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/207.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Sens unic</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/117.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Auto-strada</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/118.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Sfarsit de auto-strada</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/151.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Spital</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/115.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Politia</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/116.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Post de prim ajutor</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/114.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Pasaj subteran pentru pietoni</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/119.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Statie de autobuz</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/120.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Statie de tramvai</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/142.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Control radar</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/141.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Informatii rutiere</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/211.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Numarul imobilului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/153.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Punct de informare turistica</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/203.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Denumirea strazii</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/204.jpg" alt="Scoala Auto sector 3 Bucuresti - Scoala Auto AichiConect"><br>
                      Intrarea pe strada indicata</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse27">
                Panouri aditionale</a>
            </h4>
          </div>
          <div id="collapse27" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="semne7">
                <div>
                  <ul id="indicatoare">
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/170.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Distanta pana la locul la care se refera indicatorul</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/192.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Directia si distanta pana la locul la care se refera indicatorul</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/168.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Intervale de timp in care actioneaza indicatorul</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/219.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Categoria de autovehicule la care se refera indicatorul</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/218.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Trecere la nivel cu calea ferata industriala completand semnificatia indicatorului “Alte pericole”</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/166.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Lungimea sectorului periculos la care se refera indicatorul</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/223.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Inceputul si lungimea zonei de actiune a indicatorului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/224.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Inceputul zonei de actiune a indicatorului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/226.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Confirmarea zonei de actiune a indicatorului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/225.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Sfarsitul zonei de actiune a indicatorului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/167.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Folosirea luminilor de intalnire</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/164.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Polei, gheata, zapada</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/158.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Dus</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/156.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Persoane cu handicap</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/163.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Categoriile de autovehicule care trebuie sa respecte semnificatia indicatorului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/157.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Exceptarea unor categorii de vehicule de la semnificatia indicatorului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/159.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Intervale de timp in care este permisa stationarea vehiculelor ce efectueaza aprovizionarea</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/160.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Directia drumului cu prioritate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/161.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Directia drumului cu prioritate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/217.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Viteza recomandata pe un sector de drum cu semafoare sincronizate</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/221.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Sensul de circulartie pentru care este valabila semnificatia semnalelor luminoase ale semaforului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/222.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Sensul de circulartie pentru care este valabila semnificatia semnalelor luminoase ale semaforului</li>
                    <li><img style="vertical-align: middle;" title="Scoala Auto Sector 4 Bucuresti" src="http://scoalaautovlad.ro//wp-content/uploads/2016/07/165.jpg" alt="Scoala Auto Sector 4 Bucuresti"><br>
                      Trecere la nivel cu caleaferata prevazuta cu instalatie de semnalizare luminoasa automata</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="inscrieri" style="height:51px;">
  </div>
  <div style="padding-left:15vw; padding-right:15vw;" class="row" data-aos="zoom-in-left" data-aos-duration="3000">
    <div class="col-md-10 col-md-offset-1">
      <center>
        <h1>Inscrieri Online</h1>
      </center>
      <br>
    </div>

    <div class="col-md-8 col-md-offset-2">
      <form method="post" class="form-horizontal" action="index.php">
        <div class="form-group">
          <label class="control-label col-sm-1" for="name">Nume:</label>
          <div class="col-sm-12">
            <input type="" class="form-control" id="name" name="nume" placeholder="*Nume" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-1" for="email">Email:</label>
          <div class="col-sm-12">
            <input type="email" class="form-control" name="email" id="email" placeholder="*Email" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-1" for="text">Telefon:</label>
          <div class="col-sm-12">
            <input type="text " class="form-control" name="telefon" id="text" placeholder="*Telefon" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <select class="form-control" name="categorie" id="categorie" required>
              <option value="a">Oferta A</option>
              <option value="b">Oferta B</option>
              <option value="c">Oferta C</option>
            </select>
          </div>
        </div>
        <input type="submit" class="btn btn-primary btn-block" name="submit" value="Inscrie-te">
      </form>
    </div>
  </div>




  <div class="contact" style="height:51px;">
  </div>

  <div style="padding:40px;" class="row copyright">

    <div class="col-md-6 ">
      <h6>INFORMATII CONTACT</h6>
      <p>Va multumim pentru interesul acordat serviciilor noastre. Mai jos aveti informatii complete pentru a intra in legatura cu noi.</p>
      <i class="glyphicon glyphicon-map-marker"></i>Str. Oituz nr. 77, Popesti Leordeni, Acces metrou M2 (Dimitrie Leonida) <br>
      <i class="glyphicon glyphicon-earphone"></i> <a href="tel:0749693313">0749693313</a> <br>
      <i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/aichiconect">Scoala de Soferi Aichi Conect</a> <br>
      <i class="glyphicon glyphicon-envelope"></i> <a href="mailto:aichiconect@yahoo.com">aichiconect@yahoo.com</a> <br>
      <i class="glyphicon glyphicon-time"></i>Luni - Vineri 8:00 - 20:00. <br> Sambata si Duminica -inchis (program secretariat)<br>
      <br>
    </div>

    <div class="col-md-6">
      <div class="wpb_column vc_column_container vc_col-sm-6">
        <div class="vc_column-inner ">
          <div class="wpb_wrapper">
            <div class="wpb_raw_code wpb_content_element wpb_raw_html">
              <div class="wpb_wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2851.827145751688!2d26.14657011565602!3d44.37513971346459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1fd19ce4fe4af%3A0x91a689239c8e78cb!2zyJhjb2FsxIMgZGUgyJhvZmVyaSBBaWNoaSBDb25lY3Q!5e0!3m2!1sro!2sro!4v1594226063324!5m2!1sro!2sro"
                  width="100%" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe>
              </div>
            </div>
            <style type="text/css">
              #dt-btn-6:hover {
                color: #ffffff;
              }

              #dt-btn-6:hover>.text-wrap * {
                color: #ffffff;
              }
            </style>
            <div class="text-centered"><a href="#!/scoala-auto-inscrieri" class="btn-shortcode dt-btn-m dt-btn outline-bg-btn accent-btn-color custom-btn-hover-color accent-btn-bg-color accent-btn-bg-hover-color anchor-link ripple" id="dt-btn-6"
                style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="text-wrap" style="position: relative; z-index: 2;"></span><span class="rippleWrap" style="position: absolute; z-index: 1; left: 0px; top: 0px; overflow: hidden; border-radius: 4px; opacity: 1; transition: none 0s ease 0s;"><span
                    class="rippleAnimate" style="position: absolute; left: 0px; top: 0px; width: 0px; height: 0px; border-radius: 50%; transform: scale3d(0, 0, 1); transition: none 0s ease 0s;"></span></span></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row copyright">
    <br>
    <center>
      <p>&#9400; Copyright by AUTOAICHICONECT</p>
    </center>
  </div>

  <script>
    function myFunction(imgs) {
      var expandImg = document.getElementById("expandedImg");
      var imgText = document.getElementById("imgtext");
      expandImg.src = imgs.src;
      imgText.innerHTML = imgs.alt;
      expandImg.parentElement.style.display = "block";
    }
  </script>

</body>

</html>
