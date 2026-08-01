function dayCountdown() {
  var currentDay = new Date().getTime();
  var weddingDate = new Date("Aug 21, 2027 00:00:00").getTime();

  var countdown = weddingDate - currentDay;
  
  if (countdown < 1) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = `It's here! See you soon!`;

            return;
        }

  var days = Math.floor(countdown / (1000 * 60 * 60 * 24));
    
  document.getElementById("countdown").innerHTML = days.toString() + " days to go!";
}

timer = setInterval(dayCountdown, 1000);


//footer year
var year = new Date().getFullYear();
document.getElementById("footer").innerHTML = `&copy;` + year + " by Skye Danler";