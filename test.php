<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style_quiz.css" />
    <link href="https://fonts.googleapis.com/css?family=Russo+One|Aldrich" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="TestPage">
    
    <div id="quiz-wrap">
        
	<form action="results.php" method="post" id="quiz">
          <div class="test-sheet" id="test-questions"> <!--  this is the element that moves up -->
                <div class="test-question">
                    <div class="quiz-overlay"></div>
		    <br>
		    <div class="test-grid-container">
                        <div class="test-message"><h3>What is the most important thing in a car?</h3></div>
			<div></div>	
		        <div class="test-options">
			<div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                            <label for="question-1-answers-A" class="fwrd labela">Powerful engine</label>
                        </div>
                        <div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                            <label for="question-1-answers-B" class="fwrd labelb">Safety features</label>
                        </div>
                        <div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                            <label for="question-1-answers-C" class="fwrd labelc">Stylish design</label>
                        </div>
                        <div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                            <label for="question-1-answers-D" class="fwrd labeld">Off-road capability</label>
			</div>
			</div>
			<div></div>
			<div></div>
			<div></div>
			<div class="quiz-progress">1 of 5</div>
		    </div>
                </div>
                <div class="test-question">
                    <div class="quiz-overlay"></div>
		    <br>
		    <div class="test-grid-container">
                        <div class="test-message"><h3>Which decade brought us the best cars?</h3></div>
                        <div></div>
                        <div class="test-options">
                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                            <label for="question-2-answers-A" class="fwrd labela">1970s</label>
                        </div>
                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                            <label for="question-2-answers-B" class="fwrd labelb">1980s</label>
                        </div>
                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                            <label for="question-2-answers-C" class="fwrd labelc">1990s</label>
                        </div>
                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                            <label for="question-2-answers-D" class="fwrd labeld">2000s</label>
                        </div>
                        </div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="quiz-progress">2 of 5</div>
		</div>
		</div>
                <div class="test-question">
                    <div class="quiz-overlay"></div>
                    <br>
		   <div class="test-grid-container">
                        <div class="test-message"><h3>What clothes do you wear while driving?</h3></div>
                        <div></div>
                        <div class="test-options">
                        <div>
                            <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                            <label for="question-3-answers-A" class="fwrd labela">A fancy suit</label>
                        </div>
                        <div>
                            <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                            <label for="question-3-answers-B" class="fwrd labelb">A t-shirt and sweatpants</label>
                        </div>
                        <div>
                            <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                            <label for="question-3-answers-C" class="fwrd labelc">A simple shirt and jeans</label>
                        </div>
                        <div>
                            <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                            <label for="question-3-answers-D" class="fwrd labeld">Racing overalls</label>
                        </div>
                        </div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="quiz-progress">3 of 5</div>
                </div>
                </div>
                <div class="test-question">
                    <div class="quiz-overlay"></div>
		    <br>
		    <div class="test-grid-container">
                        <div class="test-message"><h3>What music do you listen to while in the car?</h3></div>
			<div></div>
                        <div class="test-options">
                        <div>
                            <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                            <label for="question-4-answers-A" class="fwrd labela">Rock</label>
                        </div>
                        <div>
                            <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                            <label for="question-4-answers-B" class="fwrd labelb">Hip-hop</label>
                        </div>
                        <div>
                            <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                            <label for="question-4-answers-C" class="fwrd labelc">Pop</label>
                        </div>
                        <div>
                            <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                            <label for="question-4-answers-D" class="fwrd labeld">Electronic music</label>
                        </div>
                        </div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="quiz-progress">4 of 5</div>
                </div>
                </div>
                <div class="test-question">
                    <div class="quiz-overlay"></div>
		    <br>
		    <div class="test-grid-container">
                        <div class="test-message"><h3>Are you into drifting?</h3></div>
			<div></div>
                        <div class="test-options">
                        <div>
                            <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                            <label for="question-5-answers-A" class="fwrd labela">Of course, I'm a pro</label>
                        </div>
                        <div>
                            <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                            <label for="question-5-answers-B" class="fwrd labelb">Yeah, but you need a special car for that</label>
                        </div>
                        <div>
                            <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                            <label for="question-5-answers-C" class="fwrd labelc">No, it's too risky for me</label>
                        </div>
                        <div>
                            <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                            <label for="question-5-answers-D" class="fwrd labeld">What's drifting?</label>
                        </div>
                        </div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="quiz-progress">5 of 5</div>
                </div>
                </div>
                <div class="test-end">
		    <div class="quiz-overlay"></div>
		    <div class="test-grid-container">
                    	<div class="test-message"><h3 class="final-message">Let's calculate the results!</h3></div>
			<div></div>
			<div><input type="submit" value="submit quiz" id="submit-quiz" /></div>
			<div></div>
		    </div>
                </div>
            </div>
	</form>
        <div class="nomargin"></div>
    </div>
    <script>
        // QUIZ: when .fwrd element is clicked, move the screen up to show next question//

        (function($) 
        {
            var timeout= null;
            var $mt = 0;
            $("#quiz .fwrd").click(function ()
                {
                    clearTimeout(timeout);
                    timeout = setTimeout(function ()
                        { 
                            $mt = $mt - 475;
                            $("#test-questions").css("margin-top", $mt); 
                        }, 333);
                });
        }(jQuery))
        
    </script>
</body>
</html>
