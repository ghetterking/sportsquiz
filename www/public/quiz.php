<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 <style>
body {
  background-color: black;
  font-family: cursive;
}

.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>
</head>
<body>

<h1 class="glow">Sport Quiz</h1>
     
</body>   
 <meta charset=UTF-8" />
 
 <title>Sport QUIZ | Webdevtrick.com</title>
 
 <link rel="stylesheet" type="text/css" href="style.css" />
 <link rel="stylesheet" href="result.php">
</head>
 
<body>
 
 <div id="page-wrap">
 
 
 
 <form action="result.php" method="post" id="quiz">
 
            <ol>
            
                <li>  
                    <div class="card" id="q1">
                        <div class="card-body">
                        <h3>What sport is described as “the beautiful game?</h3>
                        </div>

                        <div class="card-bottom" id="card_q1">
                          <div class="card-questions" >
                            <div>
                                <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                                <label for="question-1-answers-A">A) football </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                                <label for="question-1-answers-B">B) Ballet-Dance </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                                <label for="question-1-answers-C">C) Valleyball </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                                <label for="question-1-answers-D">D) Basketball </label>
                                </div>
                          </div>
                        </div>
                    </div>
                </li>
                

                <li>
                    <div class="card" id="q2">
                        <div class="card-body">
                        <h3> Which country won the first ever football world cup?</h3>
                        </div>

                        <div class="card-bottom" id="card_q2">
                          <div class="card-questions" >                    
                            <div>
                                <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                                <label for="question-2-answers-A">A) Uruguay </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                                <label for="question-2-answers-B">B) Egypt </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                                <label for="question-2-answers-C">C) China </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                                <label for="question-2-answers-D">D) Usa </label>
                                </div>
                          </div>
                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="card" id="q3">
                        <div class="card-body">
                        <h3>How many regulation strokes are there in swimming?</h3>
                        </div>

                        <div class="card-bottom" id="card_q3">
                          <div class="card-questions" >
                            <div>
                                <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                                <label for="question-3-answers-A">A) 2 </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                                <label for="question-3-answers-B">B) 6 </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                                <label for="question-3-answers-C">C) 4 </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                                <label for="question-3-answers-D">D) 1 </label>
                            </div>
                          </div>
                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="card" id="q4">
                        <div class="card-body">
                        <h3> How long is the total distance of a marathon?</h3>
                        </div>

                        <div class="card-bottom" id="card_q4">
                          <div class="card-questions" >

                            <div>
                                <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                                <label for="question-4-answers-A">A)  20.16 kilometres </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                                <label for="question-4-answers-B">B)  42.16 kilometres </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                                <label for="question-4-answers-C">C)  100.00 kilometres</label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                                <label for="question-4-answers-D">D)  40.00 kilometres</label>
                            </div>
                          </div>
                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="card" id="q5">
                        <div class="card-body">
                            <h3>How many gold medals has Usain Bolt won?</h3>
                        </div>

                        <div class="card-bottom" id="card_q5">
                          <div class="card-questions" >
                            <div>
                                <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                                <label for="question-5-answers-A">A) 10 </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                                <label for="question-5-answers-B">B) 4 </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                                <label for="question-5-answers-C">C) 7 </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                                <label for="question-5-answers-D">D) 8 </label>
                            </div>
                          </div>
                        </div> 
                    </div>
                </li>

                <li>
                <div class="card" id="q">
                        <div class="card-body">
                        <h3>What is his world record time for the 100 metres?</h3>
                        </div>

                        <div class="card-bottom" id="card_q6">
                          <div class="card-questions">
                            <div>
                                <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                                <label for="question-6-answers-A">A) 9.55 seconds </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                                <label for="question-6-answers-B">B) 9.52 seconds </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                                <label for="question-6-answers-C">C) 11.00 seconds </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                                <label for="question-6-answers-D">D) 9.58 seconds </label>
                                </div>
                          </div>
                        </div>
                    </div>
                </li>

                <li>
                <div class="card" id="q7">
                        <div class="card-body">
                        <h3>What five colours make up the Olympic rings?</h3>

                        </div>

                        <div class="card-bottom" id="card_q7">
                          <div class="card-questions" >
                            <div>
                                <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                                <label for="question-7-answers-A">A) orange, black, green, red and yellow </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                                <label for="question-7-answers-B">B) Blue, black, green, red and yellow </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                                <label for="question-7-answers-C">C) Blue, black, grey, red and yellow </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                                <label for="question-7-answers-D">D) Blue, black, green, red and orange </label>
                             </div>
                          </div>
                        </div>
                    </div>
                </li>

                <li>
                <div class="card" id="q8">
                        <div class="card-body">
                        <h3>What has Muhammad Ali’s original name?</h3>
                        </div>

                        <div class="card-bottom" id="card_q8">
                          <div class="card-questions" >
                            <div>
                                <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                                <label for="question-8-answers-A">A) Cassius Clay </label>
                            </div>
                            
                           <div>
                                <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                                <label for="question-8-answers-B">B) Markus Klay </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                                <label for="question-8-answers-C">C) Markus Meier </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-10-answers" id="question-8-answers-D" value="D" />
                                <label for="question-8-answers-D">D) Harry Peter </label>

                            </div>
                          </div>
                        </div>
                    </div>
                </li>

                <li>
                <div class="card" id="q9">
                        <div class="card-body">
                        <h3>What is the only sport to be played on the moon?</h3>
                        </div>

                        <div class="card-bottom" id="card_q9">
                          <div class="card-questions" >
                            <div>
                                <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                                <label for="question-9-answers-A">A) Ballet- Dance </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                                <label for="question-9-answers-B">B) Golf </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                                <label for="question-9-answers-C">C) Diving </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                                <label for="question-9-answers-D">D) Swimming </label>
                            </div>
                          </div>
                        </div>
                    </div>
                </li>

                <li>
                <div class="card" id="q10">
                        <div class="card-body">
                        <h3>How many NBA championships did Michael Jordan win with the Chicago Bulls?</h3>
                        </div>

                        <div class="card-bottom" id="card_q10">
                          <div class="card-questions" >
                            <div>
                                <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                                <label for="question-10-answers-A">A) 2 </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                                <label for="question-10-answers-B">B) 5 </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                                <label for="question-10-answers-C">C) 6 </label>
                            </div>
                            
                            <div>
                                <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                                <label for="question-10-answers-D">D) 8 </label>
                                </div>
                          </div>
                        </div>
                    </div>
                </li>
            
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
 
 </form>
 
 </div>
 <h1 class="glow">Submit</h1>
 
</body>
 
</html>
