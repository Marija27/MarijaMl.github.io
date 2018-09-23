function quizing(){

  let correct = 0;

  document.getElementById('buttonQuiz').addEventListener('click', function(){ 
 
  let  question1 =  document.quiz.question1.value,
       question2 =  document.quiz.question2.value,
       question3 =  document.quiz.question3.value,
       question4 =  document.quiz.question4.value,
       question5 =  document.quiz.question5.value,
       question6 =  document.quiz.question6.value,
       question7 =  document.quiz.question7.value,
       question8 =  document.quiz.question8.value,
       question9 =  document.quiz.question9.value,
       question10 = document.quiz.question10.value;


   if (question1 == "Knife") {
    correct++;
   }
  if (question2 == "Sylvia Plath") {
    correct++;
   } 
  if (question3 == "Rape") {
    correct++;
  }

  if (question4 == "Dolores") {
    correct++;
  }

    if (question5 == "Charlotte") {
    correct++;
  }

   if (question6 == "Fahrenheit") {
    correct++;
  }

   if (question7 == "Spanish") {
    correct++;
  }

   if (question8 == "Frankenstein") {
    correct++;
  }

   if (question9 == "Catcher") {
    correct++;
  }

   if (question10 == "Kerouac") {
    correct++;
  }

document.getElementById('print').innerHTML = "you got " + correct;

      let messages = ["You’re Probably A Genius!", "Not bad, but not great, either.", "Uh-oh! Looks like you need to read a little more."];
      let score;

      if (correct < 4 ) {
        score = 2;
      }

      if (correct >= 4 && correct <= 7) {
        score = 1;
      }

      if (correct > 8) {
        score = 0;
      }

      document.getElementById('after_submitMSG').style.visibility = "visible";
      document.getElementById("message").innerHTML = messages[score];
     });
};

quizing();

