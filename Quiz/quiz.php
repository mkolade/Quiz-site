<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body>
        <!-- start Quiz button -->
        <div class="start_btn"><button class="start_button">Start Quiz</button></div>

        <!-- Info Box -->
        <div class="info_box">
            <div class="info-title"><span>Some Rules of this Quiz</span></div>
            <div class="info-list">
                <div class="info">1. You get <span>6 minutes</span> to finish all questions.</div>
                <div class="info">2. You can't select any option once the time has elapsed.</div>
                <div class="info">3. Once you select your answer, it can't be undone.</div>
                <div class="info">4. You can't exit from the Quiz while you're playing.</div>
                <div class="info">5. You'll get points on the basis of your correct answers.</div>
                <div class="info">6. If you all agree to these,click the <span>Continue</span> button</div>
            </div>
            <div class="buttons">
                <button class="quit">Exit Quiz</button>
                <button class="restart">Continue</button>
            </div>
        </div>

        <main class="main">
            <!-- creating a modal for when quiz ends -->
            <div class="modal-container" id="score-modal">

                <div class="modal-content-container">

                    <h1>Congratulations, Quiz Completed.</h1>

                    <div class="grade-details">
                        <p>Attempts : 10</p>
                        <p>Wrong Answers : <span id="wrong-answers"></span></p>
                        <p>Right Answers : <span id="right-answers"></span></p>
                        <p>Grade : <span id="grade-percentage"></span>%</p>
                        <p ><span id="remarks"></span></p>
                    </div>

                    <div class="modal-button-container">
                        <a href="../index.php">Continue</a>
                    </div>

                </div>
            </div>

            <!-- end of modal of quiz details-->

            <div class="game-quiz-container">

                <div class="game-details-container">
                    <h1 id="h1-score">Score : <span id="player-score"></span> / 10</h1>
                    <h1> Question : <span id="question-number"></span> / 10</h1>
                    <div id="timers">
                        <h2>Time Left</h2>
                        <h1 id="timer"> 00:06:00</h1>
                    </div>
                </div>

                <div class="game-question-container">
                    <h1 id="display-question"></h1>
                </div>

                <div class="game-options-container">

                <div class="modal-container" id="option-modal">

                        <div class="modal-content-container">
                            <h1>Please Pick An Option</h1>

                            <div class="modal-button-container">
                                <button id="phew" onclick="closeOptionModal()">Continue</button>
                            </div>

                        </div>

                </div>

                    <span>
                        <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
                        <label for="option-one" class="option" id="option-one-label"></label>
                    </span>


                    <span>
                        <input type="radio" id="option-two" name="option" class="radio" value="optionB" />
                        <label for="option-two" class="option" id="option-two-label"></label>
                    </span>


                    <span>
                        <input type="radio" id="option-three" name="option" class="radio" value="optionC" />
                        <label for="option-three" class="option" id="option-three-label"></label>
                    </span>


                    <span>
                        <input type="radio" id="option-four" name="option" class="radio" value="optionD" />
                        <label for="option-four" class="option" id="option-four-label"></label>
                    </span>


                </div>

                <div class="next-button-container">
                    <button onclick="handleNextQuestion()">Next Question</button>
                </div>

            </div>
        </main>
        <script src="js/scrit.js"></script>
    </body>
</html>