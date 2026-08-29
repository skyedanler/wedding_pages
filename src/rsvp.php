<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Life+Savers:wght@400;700;800&family=Ysabeau:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="rsvp.style.css">
    <script src="script.js" defer></script>
    <script src="rsvp.js" defer></script>
    <title>RSVP | S+Z</title>
    </head>
  
    <body>
  <!--Put header and nav here when these pages are relevant-->
   <?php include 'nav.php'; ?>
    <main>
    <h3 class="first-h3">Please RSVP by <time datetime="2027-07-10T15:00">July 1oth, 2027.</time></h3>
    <h3 class="second-h3">We hope to see you there! :)</h3>


      
<!--form-->
  <!--search guest name-->
  <div class="search-guest-container">
  <form class="search-form">
    <label for="find-name">Find your invitation:</label>
    <div class="search-div">
      <input type="text" id="find-name" name="find-name" placeholder="search by name..."/>
    <button type="submit" id="search-guests">Search</button>
      </div>
  </form>
    <ul id="matches" class="matches"></ul>
    <button type="submit" class="find-invite" style="display: none">Select Invitation</button>
    </div>
      
  <!--actual RSVP form-->    
  <form id="userForm" class="rsvp-form" method="post" style="display: none">
    <!--personal information-->
    <fieldset class="personal-info">
      <legend>Personal Information</legend>
      <label for="full-name">Name: <input type="text" id="full-name" name="full-name" required></label>

      <label for="email">Email: <input type="email" id="email" name="email"></label>
    </fieldset>

    <!--rsvp choice-->
    <fieldset class="attendance">
      <legend>Will we be graced with your presence?</legend>

      <label for="yes"><input type="radio" id="yes" name="attendance" checked>Heck yes, see you at the shindig!</label>

      <label for="no"><input type="radio" id="no" name="attendance">... No, *sad face*</label>
    </fieldset>

    <!--meal and dietary restrictions-->
    <fieldset class="food">
      <legend>Select your food option</legend>

      <label for="beef"><input type="radio" id="beef" name="meal-choice">Braised Beef</label>
      <label for="chicken"><input type="radio" id="chicken" name="meal-choice">Lemon Dill Chicken</label>
      <label for="soup"><input type="radio" id="soup" name="meal-choice">Clam Chowder</label>
      <label for="vegetarian"><input type="radio" id="vegetarian" name="meal-choice">Vegetarian</label>

      <label class="dietary-restrictions" for="dietary-restrictions">Please list any allergies/dietary restrictions and we'll do our best to accomodate them.</label>
      <textarea id="dietary-restrictions" name="dietary-restrictions" cols="20" rows="3" placeholder="e.g. gluten-free, nuts, etc."></textarea>
    </fieldset>

    <button type="submit">Submit RSVP</button>
</form>


  <!--
      <div class=rsvp-split>
    <div class="rsvp-photos">
      <img src=/photos/IMG_0177.jpeg class=beer>
      <img src=/photos/IMG_0505.jpeg class=peppers>
      <img src=/photos/IMG_0558.JPG class=rick>
    </div>
    <div class=rsvp-form>
      
      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSczOUuY3q3ajO3nRJ7Z8qWTG3eusqCAWawcJhg8XWJugRrlBw/viewform?embedded=true" width="640" height="1409" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
      
      </div>
    </div>
      -->
    </main>
    <footer>&copy;2026 Skye Danler</footer>
  </body>
</html>