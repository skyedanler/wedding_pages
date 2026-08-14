<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Life+Savers:wght@400;700;800&family=Ysabeau:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <title>Q+A | S+Z</title>
    <script src="script.js" defer></script>
    </head>
  <body>
  <header>
    <div class="header-fun">
      <img src="photos/orange-swirl.png" class="swirl1" alt=""">
      <h1>Skye & Zach</h1>
      <img src="photos/orange-swirl.png" class="swirl2" alt=""">
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
      <li><a href="photos.html">Photos</a></li>
      <li><a href="rsvp.html">RSVP</a></li>
      <li class="faq-tab"><a href=#>Q+A</a></li>
      <li><a href="registry.html">Registry</a></li>
    </ul>
  </nav>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="faq.style.css">

    <!--info-->
    <div class="faqs-container" id="faqs-container"></div>

    <script>

      const faqData = [
        {
          question: "Is there parking at the venue?",
            answer: "Yes! There is free lawn parking which will be managed by an attendant with the venue on the day of so there is no confusion."
      },
      {
        question: "Are kids welcome?",
        answer: "As much as we love kids, this will be an adult-only wedding."
      },
      {
        question: "Is the wedding indoors or outdoors?",
        answer: "The ceremony will be outdoors (cross your fingers) and the reception shall be indoors. They are both at the same venue so there will be no needed travel in between."
      },
      {
       question: "What is the dress code?",
        answer: "Cocktail attire! Augusts in Maine are usually full of sunny 80/90 degree days."
      },
      {
        question: "Can I update my meal choice after RSVPing?",
        answer: "As long as you let us know before the RSVP deadline passes, yes. Meals will be locked in with caterers after that point."
      },
      {
        question: "Will you be accepting gifts?",
        answer: "In lieu of a registry, we'd appreciate any contribution to our future adventure(s). If there is something else you have in mind however, we warmly accept anything you'd like to give."
      },
      {
        question: "What if I have dietary restrictions?",
        answer: "When you submit your RSVP, be sure to let us know of any dietary restrictions and we'll do our best to accommodate them!"
      },
    ];

const faqsContainer = document.getElementById('faqs-container');

    faqData.forEach(function(item, index) {
      
      let article = document.createElement('article');
      article.className = "faq-item";

      const markup = `
  <button
    class="item-question"
    aria-expanded="false"
    aria-controls="answer-${index}"
  >
    <span class="question-text">${item.question}</span>

    <span class="arrows-container">
      <i class="fa-solid fa-book expand" aria-hidden="true"></i>
      <i class="fa-solid fa-book-open close" aria-hidden="true"></i>
    </span>
  </button>

  <div
    id="answer-${index}"
    class="item-answer"
    hidden
  >
    <span class="answer-text">${item.answer}</span>
  </div>
`;


      article.innerHTML = markup;
      faqsContainer.append(article);
      
    });



      const questions = document.querySelectorAll('.item-question');

      questions.forEach(function(button) {

      button.addEventListener('click', function () {

        const answer = document.getElementById(
            button.getAttribute('aria-controls')
        );

        const expanded =
            button.getAttribute('aria-expanded') === 'true';

        button.setAttribute(
            'aria-expanded',
            !expanded
        );

        answer.hidden = expanded;

        button.parentElement.classList.toggle(
            'show-answer'
        );
    });

});

      
    </script>
     

   <footer id="footer"></footer>
  </body>
</html>