// window.console.log = function () {
//     console.warn("%cSTOP RIGHT YOU ARE CRIMINAL SCUM!", "font: 3em sans-serif; color: yellow; background-color: red;");
//     console.warn("%cAttempting to manipulate anything in this system will lead to serious reperation.", "font: 2em sans-serif; color: yellow; background-color: red;");
//     console.warn("You are attempting to use a feature intended for web developers.");
//     console.warn("If you are here by mistake, press F12 and never look back.")
//     window.console.log = function () {
//         return null;
//     }
// }
console.log("Trying to warn you of using a feature intended for web developers!");

function MoveQuestion(id){
    $('.nav-item a[href="#q' + id + '"]').tab('show');
}

function enableQuiz() {
    $(".disabled").removeClass("disabled");
    $("#v-pills-welcome-tab").addClass("disabled");
    $('.nav-item a[href="#q1"]').tab('show');


     // Show timer
     document.getElementById("timer").style.display = "block";

     // Start countdown timer
     var countdown = 300; // 5 minutes in seconds
     var timer = setInterval(function() {
       countdown--;
       if(countdown<=30)
            document.getElementById("timer").style.backgroundColor = "red";
       var minutes = Math.floor(countdown / 60);
       var seconds = countdown % 60;
       document.getElementById("countdown").innerHTML = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
       if (countdown <= 0) {
         clearInterval(timer);
         document.getElementById("submit").click();
       }
     }, 1000);
}

function theFinalCountdown(){
    
}