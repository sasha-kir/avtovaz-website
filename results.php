<!DOCTYPE html>
<html>
<head>
    <title>Quiz Results</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style_quiz.css" />
    <link href="https://fonts.googleapis.com/css?family=Russo+One|Aldrich" rel="stylesheet">
</head>
<body class="ResultsPage">
    <div id="results-wrap">
        
        <?php
            $answer1 = $_POST['question-1-answers']; //engine/safety/style/offroad
            $answer2 = $_POST['question-2-answers']; //70s/80s/90s/00s
            $answer3 = $_POST['question-3-answers']; //fancy/sweats/jeans/racing
            $answer4 = $_POST['question-4-answers']; //rock/hiphop/pop/electro
            $answer5 = $_POST['question-5-answers']; //pro/special/risky/what

            $kopeyka = $niva = $semerka = $notclassica = $samara8 = $bk = 0;
        
            if ($answer1 == "A") { $bk = $bk + 2; }
            if ($answer1 == "B") { $notclassica = $notclassica + 1; }
            if ($answer1 == "C") { $samara8 = $samara8 + 1; }
            if ($answer1 == "D") { $niva = $niva + 3; }

            if ($answer2 == "A") { $kopeyka = $kopeyka + 2; }
            if ($answer2 == "B") { $semerka = $semerka + 3; }
            if ($answer2 == "C") { $samara8 = $samara8 + 2; }
            if ($answer2 == "D") { $notclassica = $notclassica + 2; }

            if ($answer3 == "A") { $notclassica = $notclassica + 1; }
            if ($answer3 == "B") { $semerka = $semerka + 1; }
            if ($answer3 == "C") { $samara8 = $samara8 + 1;}
            if ($answer3 == "D") { $bk = $bk + 1; }

            if ($answer4 == "A") { $kopeyka = $kopeyka + 1; }
            if ($answer4 == "B") { $bk = $bk + 1; }
            if ($answer4 == "C") { $samara8 = $samara8 + 1; }
            if ($answer4 == "D") { $niva = $niva + 1; }

            if ($answer5 == "A") { $bk = $bk + 3;  }
            if ($answer5 == "B") { $kopeyka = $kopeyka + 2; }
            if ($answer5 == "C") { $samara8 = $samara8 + 1;}
            if ($answer5 == "D") { $notclassica = $notclassica + 1; }

            ?>
        
        
    <div class="results-overlay">

            <?php
            if ($kopeyka === max($kopeyka, $niva, $semerka, $notclassica, $samara8, $bk)) {
                  echo '<div class="results-text"><img src="pics/vaz_2101_quiz.jpg" alt="VAZ-2101" class="results-img" /><div class="results-content"><p class="score">VAZ-2101</p><p class="score-details">Truly a classic. First AvtoVAZ car to ever get off the assembly line, it remains popular and loved to this day. A pefect car if you want to know about how things work. It is so simple and cheap you can build your first vehicle for drifting from scratch without experience.</p><a class="results-button" href="test.php">Play Again</a><a class="results-button" href="index.html">Home</a></div>';
            } elseif ($niva === max($kopeyka, $niva, $semerka, $notclassica, $samara8, $bk)) {
                  echo '<div class="results-text"><img src="pics/niva_quiz.jpg" alt="Lada Niva" class="results-img" /><div class="results-content"><p class="score">Lada Niva</p><p class="score-details">An offroad legend. It was built for Russian roads and was so successful that it is still produced to this day. You can&prime;t expect a stock Niva to wade through deep water, but it sure is a good deal for its price if you are just starting your offroad journey or have enough experience to be bold.</p><a class="results-button" href="test.php">Play Again</a><a class="results-button" href="index.html">Home</a></div>';
            } elseif ($semerka === max($kopeyka, $niva, $semerka, $notclassica, $samara8, $bk)) {
                  echo '<div class="results-text"><img src="pics/vaz_2107_quiz.jpg" alt="VAZ-2107" class="results-img" /><div class="results-content"><p class="score">VAZ-2107</p><p class="score-details">Even though this model is not produced anymore, you can still see a lot of these cars on the roads in Russia. Dubbed "Russian Mercedes" for its characteristic grille, it is truly a car of the 80&prime;s, a car which deserves to be respected and admired.</p><a class="results-button" href="test.php">Play Again</a><a class="results-button" href="index.html">Home</a></div>';
            } elseif ($notclassica === max($kopeyka, $niva, $semerka, $notclassica, $samara8, $bk)) {
                  echo '<div class="results-text"><img src="pics/civic_quiz.jpg" alt="Honda Civic" class="results-img" /><div class="results-content"><p class="score">Not a Classic VAZ</p><p class="score-details">Seems like you do not understand the appeal of AvtoVAZ classic cars. That&prime;s OK. There&prime;s lots of other cool cars out there of course, like this Honda Civic 8th gen Hatchback.</p><a class="results-button" href="test.php">Play Again</a><a class="results-button" href="index.html">Home</a></div>';
            } elseif ($samara8 === max($kopeyka, $niva, $semerka, $notclassica, $samara8, $bk)) {
                  echo '<div class="results-text"><img src="pics/vaz_2108_quiz.jpg" alt="VAZ-2108" class="results-img" /><div class="results-content"><p class="score">VAZ-2108</p><p class="score-details">If you don&prime;t want to burn your tires, but still want to show off, VAZ-2108 is just the right choice for you. It&prime;s a front-wheel-drive, but no one would care when your interior and exterior are on point. Don&prime;t forget to install a cool audio system, and you are ready to win hearts!</p><a class="results-button" href="test.php">Play Again</a><a class="results-button" href="index.html">Home</a></div>';
            } elseif ($bk === max($kopeyka, $niva, $semerka, $notclassica, $samara8, $bk)) {
                  echo '<div class="results-text"><img src="pics/bk_quiz.jpg" alt="Boevaya Classica" class="results-img" /><div class="results-content"><p class="score">Boevaya Classica</p><p class="score-details">If you want speed and oversteer control in a VAZ, be ready to make some major changes. For people in the <a target="_blank" href="https://vk.com/boevayaclassica">"Boevaya Classica"</a> community, tuning of classic Russian cars is more than a hobby. Join them if you too take drifting and burnout seriously.</p><a class="results-button" href="test.php">Play Again</a><a class="results-button" href="index.html">Home</a></div>';
            } 
        ?>     
                </div>
    </div>
    
</body>
</html>
