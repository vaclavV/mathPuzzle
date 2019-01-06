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
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>matematický trenažér</h1>
            <p>nevšimneš si, že se učíš</p> 
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12, plocha">

                    <svg width="120" height="120" class="segment" id=""><?php include './source/funkceMP.php';  drawSegment(1);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php drawSegment(2);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php drawSegment(3);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php drawSegment(4);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php drawSegment(5);?></svg><br>
                    <svg width="120" height="120" class="segment" id=""><?php drawSegment(6);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php drawSegment(7);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php drawSegment(8);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php drawSegment(9);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php drawSegment(10);?></svg><br>
                    <svg width="120" height="120" class="segment" id=""><?php drawSegment(11);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php drawSegment(12);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php drawSegment(13);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php drawSegment(14);?></svg>
                    <svg width="120" height="120" class="segment" id=""><?php drawSegment(15);?></svg><br>
                </div></div>
            <div class="row">
                <div class="col-sm-4">
                    <svg width="120" height="120" class="segment" id=""> 
                    <?php
                    include './Segment.php';
                    $segment1 = new Segment(1, 'test');
                    $segment1->Vypis();
                    ?></svg>
                    <span class="priklad">lorem ipsum</span><br>
                    <svg width="120" height="120" class="segment" id="">
                    <?php
                    $segment2 = new Segment(2, 'test');
                    $segment2->Vypis();
                    ?>
                    </svg>
                    <span class="priklad">lorem ipsum</span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment3 = new Segment(3, 'test');
                    $segment3->Vypis();
                    ?></svg>
                    <span class="priklad">lorem ipsum</span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment4 = new Segment(4, 'test');
                    $segment4->Vypis();
                    ?></svg>
                    <span class="priklad">lorem ipsum</span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment5 = new Segment(5, 'test');
                    $segment5->Vypis();
                    ?></svg>
                    <span class="priklad">lorem ipsum</span><br>
                </div>
                <div class="col-sm-4">
                   <svg width="120" height="120" class="segment" id=""> 
                    <?php
                    $segment6 = new Segment(6, 'test');
                    $segment6->Vypis();
                    ?></svg>
                    <span class="priklad">lorem ipsum</span><br>
                    <svg width="120" height="120" class="segment" id="">
                    <?php
                    $segment7 = new Segment(7, 'test');
                    $segment7->Vypis();
                    ?>
                    </svg>
                    <span class="priklad">lorem ipsum</span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment8 = new Segment(8, 'test');
                    $segment8->Vypis();
                    ?></svg>
                    <span class="priklad">lorem ipsum</span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment9 = new Segment(9, 'test');
                    $segment9->Vypis();
                    ?></svg>
                    <span class="priklad">lorem ipsum</span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment10 = new Segment(10, 'test');
                    $segment10->Vypis();
                    ?></svg>
                    <span class="priklad">lorem ipsum</span><br>
                </div>
                <div class="col-sm-4">        
                    <svg width="120" height="120" class="segment" id=""> 
                    <?php
                    $segment11 = new Segment(11, 'test');
                    $segment11->Vypis();
                    ?></svg>
                    <span class="priklad">lorem ipsum</span><br>
                    <svg width="120" height="120" class="segment" id="">
                    <?php
                    $segment12 = new Segment(12, 'test');
                    $segment12->Vypis();
                    ?>
                    </svg>
                    <span class="priklad">lorem ipsum</span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment13 = new Segment(13, 'test');
                    $segment13->Vypis();
                    ?></svg>
                    <span class="priklad">lorem ipsum</span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment14 = new Segment(14, 'test');
                    $segment14->Vypis();
                    ?></svg>
                    <span class="priklad">lorem ipsum</span><br>
                    <svg width="120" height="120" class="segment" id=""><?php
                    $segment15 = new Segment(15, 'test');
                    $segment15->Vypis();
                    ?></svg>
                    <span class="priklad">lorem ipsum</span><br>
                </div>
            </div>
        </div>
        <script src="source/hriste.js"></script>    
    </body>
</html>
