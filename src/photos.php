<!DOCTYPE html>
<html>
  <head>
    <!--styling-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Life+Savers:wght@400;700;800&family=Ysabeau:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="photos.style.css">
    <title>Photos | S+Z</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="script.js" defer></script>
    </head>
  
    <body>
  <!--header-->
  <header>
    <div class="header-fun">
      <img src="photos/orange-swirl.png" class="swirl1">
      <h1>Skye & Zach</h1>
      <img src="photos/orange-swirl.png" class="swirl2">
    </div>
    <div class="date">
      
      <!--under title stuff-->
      <h2>
        <time datetime="2027-08-21T15:00">08.21.2027</time>
      </h2>
      <p> | </p>
      <h2 id="countdown"></h2>
      
    </div>
  </header>
  <nav class="menu">
    <ul class=nav-list>
      <li><a href="/">About</a></li>
      <li class="photos-tab"><a href=#>Photos</a></li>
      <li><a href="rsvp.html">RSVP</a></li>
      <li><a href="faq.html">Q+A</a></li>
      <li><a href="registry.html">Registry</a></li>
    </ul>
  </nav>    

<!--slideshow-->
      <div class="slideshow-container" id="slideshow-container">
        
        <!--images-->
        <div class="image-container" id="image-container"></div>
        
        <!--arrows-->
        <i class="fa-solid fa-angles-left btn prev"></i>
        <i class="fa-solid fa-angles-right btn next"></i>
      </div>

    <script>

      const imgList = [
        ['bowling.JPG', 'Skye and Zach in front of a bowling lane'],
        ['apple-orchard.jpeg', 'Skye and Zach smiling in front of apple trees'],
        ['big-date.JPG', 'Skye and Zach hugging in a dark parking lot'],
        ['boston.jpeg', 'Skye and Zach in front of a Boston building'],
        ['bowling-with-dad.JPG', 'Skye and Zach next to her dad and cousin at a bowling alley'],
        ['celtics.jpeg', 'Skye and Zach in front of the basketball court at a Celtics game'],
        ['christmas.JPG', 'Skye and Zach sitting on front of a Christmas tree in their matching sweaters'],
        ['couch-with-kitten.jpg', 'Skye and Zach posing with their cat, Mia, on the couch'],
        ['diagon-alley.PNG', `Skye and Zach smiling in front of Universal Park's Diagon Alley`],
        ['dianas-bath.JPG', 'Skye and Zach sharing a kiss on a big rock infront of a reflective body of water with trees all behind them'],
        ['florida.jpeg', 'Skye and Zach posing on the walkway to CityWalk in Florida with the river and resort lights behind them'],
        ['hogsmeade.JPG', 'Skye and Zach posing in front of Hogsmeade at Universal Parks'],
        ['hogwarts-express.jpeg', `Skye hugging Zach while showing her engagement ring in front of the train at King's Cross at Universl Parks`],
        ['house-on-the-rock.JPG', 'Skye and Zach pose in front of the infamous whale sculpture at House on a Rock in Wisconsin'],
        ['jungle.jpeg', 'Skye and Zach posing in the jungle portion of the BioDome in Montreal'],
        ['minigolf.JPG', 'Skye and Zach with friends Lance and Karin, all holding their golf clubs at MiniGolf in Portland, ME'],
        ['montreal.jpg', 'Skye and Zach taking a mirror selfie at their Montreal hotel'],
        ['oxford.PNG', 'selfie of Skye and Zach at a casino'],
        ['pics.jpeg', 'a photo strip of Skye and Zach'],
        ['proposal.PNG', 'Zach proposing to Skye in front of Gringotts Bank at Universal Parks in Florida'],
        ['robes.jpeg', 'mirror selfie of Skye and Zach in their hotel robes before their couples massage'],
        ['snowboarding.JPG', 'Skye and Zach in full snowboarding gear in front of a snowy mountain'],
        ['the-pier.jpeg', 'Skye and Zach at a club while Zach holds a drink']
    ];

    const imageContainer = document.getElementById('image-container');

    imgList.forEach(image => {

      const img = document.createElement("img");
      img.src = `photos/slideshow_photos/${image[0]}`;
      img.alt = image[1];
      img.className = "slideshow-img";
      
      imageContainer.appendChild(img);
    });

      const nextEl = document.querySelector(".next"); 

      const prevEl = document.querySelector(".prev");

      const imgsEl = imageContainer.querySelectorAll("img");

      let currentImg = 1;

    nextEl.addEventListener("click", ()=> {
      currentImg++
      updateImg()
    });

      prevEl.addEventListener("click", ()=> {
        currentImg--
        updateImg()
      });

      function updateImg() {
        if (currentImg > imgsEl.length) {
          currentImg = 1;
        }
        else if (currentImg < 1) {
          currentImg = imgsEl.length;
        }
        imageContainer.style.transform = `translateX(-${(currentImg - 1) * 65}vw)`
      };
     
    </script>


    <footer id="footer"></footer>
  </body>
</html>