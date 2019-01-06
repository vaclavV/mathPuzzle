<!DOCTYPE html>
>
<html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>matematický trenažer</title>
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
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <h3 class="plocha">postup návrhu hry</h3>
      <ul>
          <br><li>Navrhněte obrázek. Zadejte jednoslovný název obrázku a klikáním na trojúhelníky je obarvíte.<br> Stejným způsobem jako se hraje samotná hra. Pak už jen tlačítkem uložíte.</li>
          <br><li>Napište zadání příkladů a výsledky do příslušných formulářových polí.<br> Vyberte jméno obrázku hry a je hotovo. </li>
      </ul>
    </div>
    <div id="menu1" class="tab-pane fade plocha">
      <h3>návrh obrázku</h3>
      <div class="container">
 
  <form>
    <div class="form-group">
      <label for="nazev">Jméno obrázku:</label>
      <input type="email" class="form-control" id="jemnoObrazku" placeholder="zadej jednoslovná název obrázku">
    </div>
    
    <button type="submit" class="btn btn-default">Máš-li hotovo, ulož</button>
  </form><br><hr></div>
      <div> <svg width="120" height="120" class="segment" id=""><?php include './source/funkceMP.php';  adminSegment(1);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php adminSegment(2);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php adminSegment(3);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php adminSegment(4);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php adminSegment(5);?></svg><br>
                    <svg width="120" height="120" class="segment" id=""><?php adminSegment(6);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php adminSegment(7);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php adminSegment(8);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php adminSegment(9);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php adminSegment(10);?></svg><br>
                    <svg width="120" height="120" class="segment" id=""><?php adminSegment(11);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php adminSegment(12);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php adminSegment(13);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php adminSegment(14);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php adminSegment(15);?></svg><br></div>
    </div>
    <div id="menu2" class="tab-pane fade plocha">
        <h3>návrh hry</h3><br>
        <hr>
      <form>
          <div class="form-group">
    <label for="jmeno_obrazku">jméno obrázku</label>
    <input type="jmenoObrazku" class="form-control" id="jmenoObrazku">
      </div>
  <div class="form-group">
    <label for="priklad1">příklad 1</label>
    <input type="priklad1" class="form-control" id="priklad1" placeholder="příklad">
    <input type="vysledek1" class="form-control" id="vysledek1" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad2">příklad 2</label>
    <input type="priklad2" class="form-control" id="priklad2" placeholder="příklad">
    <input type="vysledek2" class="form-control" id="vysledek2" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad3">příklad 3</label>
    <input type="priklad3" class="form-control" id="priklad3" placeholder="příklad">
    <input type="vysledek3" class="form-control" id="vysledek3" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad4">příklad 4</label>
    <input type="priklad4" class="form-control" id="priklad4" placeholder="příklad">
    <input type="vysledek4" class="form-control" id="vysledek4" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad5">příklad 5</label>
    <input type="priklad5" class="form-control" id="priklad5" placeholder="příklad">
    <input type="vysledek5" class="form-control" id="vysledek5" placeholder="výsledek">
  </div>
          <div class="form-group">
    <label for="priklad6">příklad 6</label>
    <input type="priklad6" class="form-control" id="priklad6" placeholder="příklad">
    <input type="vysledek6" class="form-control" id="vysledek6" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad7">příklad 7</label>
    <input type="priklad7" class="form-control" id="priklad7" placeholder="příklad">
    <input type="vysledek7" class="form-control" id="vysledek7" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad8">příklad 8</label>
    <input type="priklad8" class="form-control" id="priklad8" placeholder="příklad">
    <input type="vysledek8" class="form-control" id="vysledek8" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad9">příklad 9</label>
    <input type="priklad9" class="form-control" id="priklad9" placeholder="příklad">
    <input type="vysledek9" class="form-control" id="vysledek9" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad10">příklad 10</label>
    <input type="priklad10" class="form-control" id="priklad10" placeholder="příklad">
    <input type="vysledek10" class="form-control" id="vysledek10" placeholder="výsledek">
  </div>
          <div class="form-group">
    <label for="priklad11">příklad 11</label>
    <input type="priklad11" class="form-control" id="priklad11" placeholder="příklad">
    <input type="vysledek11" class="form-control" id="vysledek11" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad12">příklad 12</label>
    <input type="priklad12" class="form-control" id="priklad12" placeholder="příklad">
    <input type="vysledek12" class="form-control" id="vysledek12" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad13">příklad 13</label>
    <input type="priklad13" class="form-control" id="priklad13" placeholder="příklad">
    <input type="vysledek13" class="form-control" id="vysledek13" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad14">příklad 14</label>
    <input type="priklad14" class="form-control" id="priklad14" placeholder="příklad">
    <input type="vysledek14" class="form-control" id="vysledek14" placeholder="výsledek">
  </div>
            <div class="form-group">
    <label for="priklad15">příklad 15</label>
    <input type="priklad15" class="form-control" id="priklad15" placeholder="příklad">
    <input type="vysledek15" class="form-control" id="vysledek15" placeholder="výsledek">
  </div>
          <hr>
  <button type="submit" class="btn btn-default">ulož hru</button>
</form>
    </div>
      </div>
</div>
                </div>
                
                 <script src="source/hriste.js"></script>  
    </body>
</html>
