<?php

  if(isset($_GET['var'])){

  }
  else{
    $_GET['var'] = "citta";
    $_GET['var2'] = "manduria";
  }

  if(isset($_GET['var2'])){

  }
  else{
    $_GET['var2'] = "manduria";
  }
  echo'
  <!DOCTYPE html>
    <html>
      <head>
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css">
      </head>
    <body>
      <div id="box">
        <div id="menu">
          <a class="link1" href="index.php?var=mare">mare</a>';


          if($_GET['var'] == "mare"){
            echo '
              <a class="link2" href="index.php?var=mare&var2=blu">mare del brasile</a>
                <a class="link2" href="index.php?var=mare&var2=blu">mare mediterraneo</a>
                <a class="link2" href="index.php?var=mare&var2=blu">mare indiano</a>
                <a class="link2" href="index.php?var=mare&var2=blu">mare americano</a>
            ';
          }


          echo'<a class="link1" href="index.php?var=montagne">Montagne</a>';

          if($_GET['var'] == "montagne"){
            echo '
              <a class="link2" href="index.php?var=montagne&var2=everest">everest</a>
              <a class="link2" href="index.php?var=montagne&var2=monte bianco">monte bianco</a>
              <a class="link2" href="index.php?var=montagne&var2=kilimangiaro">kilimangiaro</a>
            ';
          }

          echo'<a class="link1" href="index.php?var=fiori">Fiori</a>';

          if($_GET['var'] == "fiori"){
            echo '
              <a class="link2" href="index.php?var=fiori&var2=viola">viola</a>
              <a class="link2" href="index.php?var=fiori&var2=girasole">girasole</a>
              <a class="link2" href="index.php?var=fiori&var2=orchidea">orchidea</a>
              <a class="link2" href="index.php?var=fiori&var2=rosa">rosa</a>
              <a class="link2" href="index.php?var=fiori&var2=ciliegio">ciliegio</a>
            ';
          }

          echo'<a class="link1" href="index.php?var=citta">Città</a>';

          if($_GET['var'] == "citta"){
            echo '
              <a class="link2" href="index.php?var=citta&var2=manduria">Manduria</a>
              <a class="link2" href="index.php?var=citta&var2=bari">Bari</a>
              <a class="link2" href="index.php?var=citta&var2=lecce">lecce</a>
              <a class="link2" href="index.php?var=citta&var2=gallipoli">gallipoli</a>
              <a class="link2" href="index.php?var=citta&var2=otranto">otranto</a>
              <a class="link2" href="index.php?var=citta&var2=ostuni">ostuni</a>
              <a class="link2" href="index.php?var=citta&var2=napoli">napoli</a>
              <a class="link2" href="index.php?var=citta$var2=napoli">pescara</a>
            ';
          }

          echo'<a class="link1" href="index.php?var=hitech">HiTech</a>';

          if($_GET['var'] == "hitech"){
            echo '
              <a class="link2" href="index.php?var=hitech&var2=smartphone">smartphone</a>
              <a class="link2" href="index.php?var=hitech&var2=pc">PC</a>
              <a class="link2" href="index.php?var=hitech&var2=monitor">monitor</a>
            ';
          }

        echo'</div>
        <div id="center">';

        echo'<img src="' . $_GET['var2'] . '.jpg">';

        echo'</div>
      </div>
    </body>
    </html>
  ';
?>
