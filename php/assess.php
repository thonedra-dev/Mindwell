<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <title>Self-Assessment Quiz</title>
    <style>
        .quiz-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .question-group {
            display: none;
        }

        .question-group.active {
            display: block;
        }

        .question {
            margin-bottom: 20px;
        }

        .options label {
            display: block;
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            margin: 10px 5px;
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .btn:hover {
            background-color: #218838;
        }

        .result-page {
            display: none;
            text-align: center;
        }

        .result-page.active {
            display: block;
        }

        .result-page h2 {
            color: #28a745;
        }
        .nav-header {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px 40px;
        }

        .nav-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand-logo {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            font-family: 'Arial', sans-serif;
        }

        .brand-logo span {
            color:  #28a745;
        }

        .menu-list {
            list-style: none;
            display: flex;
            gap: 25px;
            margin: 0;
            padding: 0;
        }

        .menu-list a {
            text-decoration: none;
            color: #555;
            font-size: 1rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .menu-list a:hover {
            color:  #28a745;
        }

        .nav-contact-btn {
            background-color:  #28a745;
            color: #fff;
            text-transform: uppercase;
            font-size: 1rem;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .nav-contact-btn:hover {
            background-color: #28a745;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-container {
                flex-wrap: wrap;
            }

            .menu-list {
                flex-direction: column;
                gap: 15px;
                align-items: center;
                margin-top: 10px;
            }

            .nav-contact-btn {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
<header class="nav-header">
        <nav class="nav-container">
            <div class="brand-logo">MIND<span>WELL</span></div>
            <ul class="menu-list">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="article.php">Resources</a></li>
                <li><a href="register.php">Register</a></li>    
                <li><a href="assess.php">Assess</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
            <a href="mastermind.php" class="nav-contact-btn">Contact</a>
        </nav>
    </header>
    <section id="self-assessment">
        <div class="quiz-container">
            <form id="quiz-form">
                <!-- Question Groups -->
                <div class="question-group active" data-group="1">
                    <div class="question">
                        <p>1. How often do you feel energized and excited about your day?</p>
                        <div class="options">
                            <label><input type="radio" name="q1" value="1"> Always</label>
                            <label><input type="radio" name="q1" value="2"> Often</label>
                            <label><input type="radio" name="q1" value="3"> Rarely</label>
                            <label><input type="radio" name="q1" value="4"> Never</label>
                        </div>
                    </div>
                    <div class="question">
                        <p>2. How often do you find it difficult to focus on tasks?</p>
                        <div class="options">
                            <label><input type="radio" name="q2" value="1"> Never</label>
                            <label><input type="radio" name="q2" value="2"> Rarely</label>
                            <label><input type="radio" name="q2" value="3"> Often</label>
                            <label><input type="radio" name="q2" value="4"> Always</label>
                        </div>
                    </div>
                    <div class="question">
                        <p>3. How often do you feel satisfied with your relationships and social interactions?</p>
                        <div class="options">
                            <label><input type="radio" name="q3" value="1"> Always</label>
                            <label><input type="radio" name="q3" value="2"> Often</label>
                            <label><input type="radio" name="q3" value="3"> Rarely</label>
                            <label><input type="radio" name="q3" value="4"> Never</label>
                        </div>
                    </div>
                </div>

                <!-- Question Group 2 -->
                <div class="question-group" data-group="2">
                    <div class="question">
                        <p>4. How often do you feel overwhelmed by your responsibilities?</p>
                        <div class="options">
                            <label><input type="radio" name="q4" value="1"> Never</label>
                            <label><input type="radio" name="q4" value="2"> Rarely</label>
                            <label><input type="radio" name="q4" value="3"> Often</label>
                            <label><input type="radio" name="q4" value="4"> Always</label>
                        </div>
                    </div>
                    <div class="question">
                        <p>5. How often do you take time for self-care or relaxation?</p>
                        <div class="options">
                            <label><input type="radio" name="q5" value="1"> Always</label>
                            <label><input type="radio" name="q5" value="2"> Often</label>
                            <label><input type="radio" name="q5" value="3"> Rarely</label>
                            <label><input type="radio" name="q5" value="4"> Never</label>
                        </div>
                    </div>
                    <div class="question">
                        <p>6. How often do you feel physically exhausted or drained?</p>
                        <div class="options">
                            <label><input type="radio" name="q6" value="1"> Never</label>
                            <label><input type="radio" name="q6" value="2"> Rarely</label>
                            <label><input type="radio" name="q6" value="3"> Often</label>
                            <label><input type="radio" name="q6" value="4"> Always</label>
                        </div>
                    </div>
                </div>

                <!-- Question Group 3 -->
                <div class="question-group" data-group="3">
                    <div class="question">
                        <p>7. How often do you feel a sense of purpose or direction in life?</p>
                        <div class="options">
                            <label><input type="radio" name="q7" value="1"> Always</label>
                            <label><input type="radio" name="q7" value="2"> Often</label>
                            <label><input type="radio" name="q7" value="3"> Rarely</label>
                            <label><input type="radio" name="q7" value="4"> Never</label>
                        </div>
                    </div>
                    <div class="question">
                        <p>8. How often do you feel proud of your accomplishments?</p>
                        <div class="options">
                            <label><input type="radio" name="q8" value="1"> Always</label>
                            <label><input type="radio" name="q8" value="2"> Often</label>
                            <label><input type="radio" name="q8" value="3"> Rarely</label>
                            <label><input type="radio" name="q8" value="4"> Never</label>
                        </div>
                    </div>
                    <div class="question">
                        <p>9. How often do you feel that you have control over your emotions?</p>
                        <div class="options">
                            <label><input type="radio" name="q9" value="1"> Always</label>
                            <label><input type="radio" name="q9" value="2"> Often</label>
                            <label><input type="radio" name="q9" value="3"> Rarely</label>
                            <label><input type="radio" name="q9" value="4"> Never</label>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button type="button" class="btn btn-prev" style="display:none;">Previous</button>
                <button type="button" class="btn btn-next">Next</button>
                <button type="submit" class="btn btn-submit" style="display:none;">Submit</button>
            </form>

            <!-- Result Page -->
            <div class="result-page" id="result-page">
                <h2>Your Assessment Result</h2>
                <p id="result-text"></p>
            </div>
        </div>
    </section>

    <script>
        const questionGroups = document.querySelectorAll(".question-group");
        const btnPrev = document.querySelector(".btn-prev");
        const btnNext = document.querySelector(".btn-next");
        const btnSubmit = document.querySelector(".btn-submit");
        const form = document.getElementById("quiz-form");
        const resultPage = document.getElementById("result-page");
        const resultText = document.getElementById("result-text");

        let currentGroup = 0;

        function showGroup(index) {
            questionGroups.forEach((group, i) => {
                group.classList.toggle("active", i === index);
            });
            btnPrev.style.display = index === 0 ? "none" : "inline-block";
            btnNext.style.display = index === questionGroups.length - 1 ? "none" : "inline-block";
            btnSubmit.style.display = index === questionGroups.length - 1 ? "inline-block" : "none";
        }

        btnNext.addEventListener("click", () => {
            if (currentGroup < questionGroups.length - 1) {
                currentGroup++;
                showGroup(currentGroup);
            }
        });

        btnPrev.addEventListener("click", () => {
            if (currentGroup > 0) {
                currentGroup--;
                showGroup(currentGroup);
            }
        });

        function validateForm() {
            const unanswered = Array.from(questionGroups).some(group => {
                const radios = group.querySelectorAll("input[type='radio']");
                return !Array.from(radios).some(radio => radio.checked);
            });

            if (unanswered) {
                alert("Please answer all questions before submitting.");
                return false;
            }
            return true;
        }

        form.addEventListener("submit", (e) => {
            e.preventDefault();

            if (!validateForm()) return;

            let totalScore = 0;
            const inputs = form.querySelectorAll("input[type='radio']:checked");
            inputs.forEach(input => totalScore += parseInt(input.value));

            let result;
            if (totalScore <= 9) result = "Excellent";
            else if (totalScore <= 18) result = "Good";
            else if (totalScore <= 27) result = "Struggle";
            else result = "Very Struggle";

            resultText.textContent = `Your mental health condition is: ${result}.`;
            form.style.display = "none";
            resultPage.classList.add("active");
        });

        showGroup(currentGroup);
    </script>
</body>
</html>
