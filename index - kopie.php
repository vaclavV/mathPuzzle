<!DOCTYPE html>

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
            <p>nevšimneš si, že se učíš <a href="#" data-toggle="tooltip" data-placement="top" title="najdi správný výsledek, klikáním myši na trojúhelníky u příkladu obkresli tvar"><i class="fas fa-info-circle"></i></a>
</p> 
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12, plocha">
                    <?php  include './source/funkceMP.php';  $aktualniHra= new hra(); $aktualniHra->vyberHry();?>
                                
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(1);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(2);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(3);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(4);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(5);?></svg><br>
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(6);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(7);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(8);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(9);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(10);?></svg><br>
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(11);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(12);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(13);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(14);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php $aktualniHra->drawSegment(15);?></svg><br>
                </div></div>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <svg width="120" height="120" class="segment" id=""> 
                    <?php include './Segment.php'; ?>
                    <?php
                    $segment1 = new Segment(1, 'test');
                    $segment1->Vypis();
                    ?></svg>
                    <span class="priklad"><?php $segment1->Vysledek($aktualniHra->jmenoHry);?></span><br>
                    <svg width="120" height="120" class="segment" id="">
                    <?php
                    $segment2 = new Segment(2, 'test');
                    $segment2->Vypis();
                    ?>
                    </svg>
                    <span class="priklad"><?php $segment2->Vysledek($aktualniHra->jmenoHry);?></span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment3 = new Segment(3, 'test');
                    $segment3->Vypis();
                    ?></svg>
                    <span class="priklad"><?php $segment3->Vysledek($aktualniHra->jmenoHry);?></span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment4 = new Segment(4, 'test');
                    $segment4->Vypis();
                    ?></svg>
                    <span class="priklad"><?php $segment4->Vysledek($aktualniHra->jmenoHry);?></span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment5 = new Segment(5, 'test');
                    $segment5->Vypis();
                    ?></svg>
                    <span class="priklad"><?php $segment5->Vysledek($aktualniHra->jmenoHry);?></span><br>
                </div>
                <div class="col-sm-4">
                   <svg width="120" height="120" class="segment" id=""> 
                    <?php
                    $segment6 = new Segment(6, 'test');
                    $segment6->Vypis();
                    ?></svg>
                    <span class="priklad"><?php $segment6->Vysledek($aktualniHra->jmenoHry);?></span><br>
                    <svg width="120" height="120" class="segment" id="">
                    <?php
                    $segment7 = new Segment(7, 'test');
                    $segment7->Vypis();
                    ?>
                    </svg>
                    <span class="priklad"><?php $segment7->Vysledek($aktualniHra->jmenoHry);?></span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment8 = new Segment(8, 'test');
                    $segment8->Vypis();
                    ?></svg>
                    <span class="priklad"><?php $segment8->Vysledek($aktualniHra->jmenoHry);?></span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment9 = new Segment(9, 'test');
                    $segment9->Vypis();
                    ?></svg>
                    <span class="priklad"><?php $segment9->Vysledek($aktualniHra->jmenoHry);?></span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment10 = new Segment(10, 'test');
                    $segment10->Vypis();
                    ?></svg>
                    <span class="priklad"><?php $segment10->Vysledek($aktualniHra->jmenoHry);?></span><br>
                </div>
                <div class="col-sm-4">        
                    <svg width="120" height="120" class="segment" id=""> 
                    <?php
                    $segment11 = new Segment(11, 'test');
                    $segment11->Vypis();
                    ?></svg>
                    <span class="priklad"><?php $segment11->Vysledek($aktualniHra->jmenoHry);?></span><br>
                    <svg width="120" height="120" class="segment" id="">
                    <?php
                    $segment12 = new Segment(12, 'test');
                    $segment12->Vypis();
                    ?>
                    </svg>
                    <span class="priklad"><?php $segment12->Vysledek($aktualniHra->jmenoHry);?></span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment13 = new Segment(13, 'test');
                    $segment13->Vypis();
                    ?></svg>
                    <span class="priklad"><?php $segment13->Vysledek($aktualniHra->jmenoHry);?></span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment14 = new Segment(14, 'test');
                    $segment14->Vypis();
                    ?></svg>
                    <span class="priklad"><?php $segment14->Vysledek($aktualniHra->jmenoHry);?></span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment15 = new Segment(15, 'test');
                    $segment15->Vypis();
                    ?></svg>
                    <span class="priklad"><?php $segment15->Vysledek($aktualniHra->jmenoHry);?></span><br>
                </div>
            </div>
        </div>
        <script src="source/hriste.js"></script>    
    </body>
</html>
