<!DOCTYPE html>

<html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>admin: matematický trenažer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="source/MPstyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>matematický trenažér</h1>
            <p>admine, připrav hru...</p> 
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="container">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">jak na to</a></li>
    <li><a data-toggle="tab" href="#menu1">příprava obrázku</a></li>
    <li><a data-toggle="tab" href="#menu2">příprava hry</a></li>
    <li><a data-toggle="tab" href="#menu3">Výběr hry</a></li>   
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <h3 class="plocha">postup návrhu hry</h3>
      <ul>
          <br><li>Navrhněte obrázek. Zadejte jednoslovný název obrázku a klikáním na trojúhelníky je obarvíte.<br> Stejným způsobem jako se hraje samotná hra. Pak už jen tlačítkem uložíte.</li>
          <br><li>Napište zadání příkladů a výsledky do příslušných formulářových polí.<br> Vyberte jméno obrázku hry a je hotovo. </li>
          <br><li>vyberte hru</li>
      </ul>
    </div>
    <div id="menu1" class="tab-pane fade plocha">
      <h3>návrh obrázku</h3>
                                <div class="container">

                                    <form action="source/ulozObrazek.php"  method="post">
                                        <div class="form-group">
                                            <label for="nazev">Jméno obrázku:</label>
                                            <input name="jmenoObrazku" type="text" class="form-control" id="jemnoObrazku" placeholder="zadej jednoslovná název obrázku">
                                            <input type="hidden" id="s1" name="segment1" value="11111111">
                                            <input type="hidden" id="s2" name="segment2" value="11111111">
                                            <input type="hidden" id="s3" name="segment3" value="11111111">
                                            <input type="hidden" id="s4" name="segment4" value="11111111">
                                            <input type="hidden" id="s5" name="segment5" value="11111111">
                                            <input type="hidden" id="s6" name="segment6" value="11111111">
                                            <input type="hidden" id="s7" name="segment7" value="11111111">
                                            <input type="hidden" id="s8" name="segment8" value="11111111">
                                            <input type="hidden" id="s9" name="segment9" value="11111111">
                                            <input type="hidden" id="s10" name="segment10" value="11111111">
                                            <input type="hidden" id="s11" name="segment11" value="11111111">
                                            <input type="hidden" id="s12" name="segment12" value="11111111">
                                            <input type="hidden" id="s13" name="segment13" value="11111111">
                                            <input type="hidden" id="s14" name="segment14" value="11111111">
                                            <input type="hidden" id="s15" name="segment15" value="11111111">
                                        </div>

                                        <button type="submit" class="btn btn-default">Máš-li hotovo, ulož</button>
                                    </form><br><hr></div>
                                <div>
                                    <?php include './source/funkceMP.php';
                                    $aktualniHra = new hra(); ?>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(1); ?></svg>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(2); ?></svg>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(3); ?></svg>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(4); ?></svg>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(5); ?></svg><br>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(6); ?></svg>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(7); ?></svg>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(8); ?></svg>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(9); ?></svg>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(10); ?></svg><br>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(11); ?></svg>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(12); ?></svg>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(13); ?></svg>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(14); ?></svg>
                                    <svg width="120" height="120" class="segment" id="<?php $aktualniHra->idSegmentu();?>"><?php $aktualniHra->adminSegment(15); ?></svg><br></div>
 </div>
    <div id="menu2" class="tab-pane fade plocha">
        <h3>návrh hry</h3><br>
         <?php
        include './source/adminUtil.php';
        $aktualniObrazky = new adminUtil();
        $aktualniObrazky->obrazky();
        ?>
        <hr>
      <form action="source/hra.php" method="post">
          <div class="form-group">
    <label for="jmenoHry">jméno hry</label>
    <input name="jmenoHry" class="form-control" id="jmenoHry" placeholder="jméno hry">
  </div>
          <div class="form-group">
    <label for="jmeno_obrazku">jméno obrázku</label>
    <select class="form-control" name="obrazek"><?php for($i=0;$i<count($aktualniObrazky->obrazky);$i++){echo '<option value = "'. $aktualniObrazky->obrazky[$i] . '">'. $aktualniObrazky->obrazky[$i] . '</option>' ;}?></select>
          </div><hr>
  <div class="form-group">
    <label for="priklad1">příklad 1</label>
    <input name="priklad1" class="form-control" id="priklad1" placeholder="příklad">
    <input name="vysledek1" class="form-control" id="vysledek1" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad2">příklad 2</label>
    <input name="priklad2" class="form-control" id="priklad2" placeholder="příklad">
    <input name="vysledek2" class="form-control" id="vysledek2" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad3">příklad 3</label>
    <input name="priklad3" class="form-control" id="priklad3" placeholder="příklad">
    <input name="vysledek3" class="form-control" id="vysledek3" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad4">příklad 4</label>
    <input name="priklad4" class="form-control" id="priklad4" placeholder="příklad">
    <input name="vysledek4" class="form-control" id="vysledek4" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad5">příklad 5</label>
    <input name="priklad5" class="form-control" id="priklad5" placeholder="příklad">
    <input name="vysledek5" class="form-control" id="vysledek5" placeholder="výsledek">
  </div>
          <div class="form-group">
    <label for="priklad6">příklad 6</label>
    <input name="priklad6" class="form-control" id="priklad6" placeholder="příklad">
    <input name="vysledek6" class="form-control" id="vysledek6" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad7">příklad 7</label>
    <input name="priklad7" class="form-control" id="priklad7" placeholder="příklad">
    <input name="vysledek7" class="form-control" id="vysledek7" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad8">příklad 8</label>
    <input name="priklad8" class="form-control" id="priklad8" placeholder="příklad">
    <input name="vysledek8" class="form-control" id="vysledek8" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad9">příklad 9</label>
    <input name="priklad9" class="form-control" id="priklad9" placeholder="příklad">
    <input name="vysledek9" class="form-control" id="vysledek9" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad10">příklad 10</label>
    <input name="priklad10" class="form-control" id="priklad10" placeholder="příklad">
    <input name="vysledek10" class="form-control" id="vysledek10" placeholder="výsledek">
  </div>
          <div class="form-group">
    <label for="priklad11">příklad 11</label>
    <input name="priklad11" class="form-control" id="priklad11" placeholder="příklad">
    <input name="vysledek11" class="form-control" id="vysledek11" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad12">příklad 12</label>
    <input name="priklad12" class="form-control" id="priklad12" placeholder="příklad">
    <input name="vysledek12" class="form-control" id="vysledek12" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad13">příklad 13</label>
    <input name="priklad13" class="form-control" id="priklad13" placeholder="příklad">
    <input name="vysledek13" class="form-control" id="vysledek13" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad14">příklad 14</label>
    <input name="priklad14" class="form-control" id="priklad14" placeholder="příklad">
    <input name="vysledek14" class="form-control" id="vysledek14" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad15">příklad 15</label>
    <input name="priklad15" class="form-control" id="priklad15" placeholder="příklad">
    <input name="vysledek15" class="form-control" id="vysledek15" placeholder="výsledek">
  </div>
          <hr>
  <button type="submit" class="btn btn-default">ulož hru</button>
</form>
    </div>
       <div id="menu3" class="tab-pane fade plocha">
      <h3>výběr hry</h3>
      <hr>
       <?php
        $aktualniHraVybrat = new adminUtil(); 
        $aktualniHraVybrat->nastaveniHry();
        ?>
        <form action="source/vyberHru.php" method="post">
            <div class="form-group">
            <select class="form-control" name="vybranaHra"><?php for ($i = 0; $i < count($aktualniHraVybrat->hryNaVyber); $i++) {
            echo '<option value = "' . $aktualniHraVybrat->hryNaVyber[$i] . '">' . $aktualniHraVybrat->hryNaVyber[$i] . '</option>';
            } ?></select></div><br>
            <button type = "submit" class = "btn btn-default">změň hru</button>

        </form>
      <?php $aktualniHraJmeno= new hra(); $aktualniHraJmeno->vyberHry();?>
      <hr>
      <strong>aktuální hra: <?php echo $aktualniHraJmeno->jmenoHry;?> </strong>
      </div>
</div>
                </div>
                
                 <script src="source/hriste.js"></script>  
    </body>
</html>
