<!DOCTYPE html>

<html lang="en">




<head>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>About Us - Ghibli Stories</title>

  <style>

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap');

    body {

      background-color: #728ef5;

      font-family: 'Roboto', sans-serif;

      margin: 0;

      padding: 0;

    }
    .container {

      max-width: 800px;

      margin: 0 auto;

      padding: 40px;

      text-align: center;

    }




    h1 {

      font-size: 50px;

      color: #a21210;

      margin-bottom: 20px;

    }




    p {

      font-size: 20px;

      color: #000000;

      line-height: 1.5;

      margin-bottom: 30px;

    }




    .animation {

      animation: fadeIn 1.5s ease-in-out;

    }




    .totoro {

      position: relative;

      width: 350px;

      height: 350px;
      bottom: 120px;

        background-image:url('toto.gif');

      background-repeat: no-repeat;

      background-size: cover;

      animation: walk 10s linear infinite;

      transform: scaleX(-1);

    }




    @keyframes fadeIn {

      0% {

        opacity: 0;

        transform: translateY(20px);

      }




      100% {

        opacity: 1;

        transform: translateY(0);

      }

    }




    @keyframes walk {

      0% {

        right: -350px;

      }




      100% {

        right: calc(100% + 350px);

      }

    }

  </style>

</head>




<body>

  <div class="container animation">

    <h1>About Us - Ghibli Stories</h1>

    <p>Welcome to Ghibli Stories, your ultimate destination for movie reviews and synopsis of your favorite Ghibli

      films. We are passionate about bringing you the magical world of Studio Ghibli, known for its enchanting

      storytelling, stunning visuals, and memorable characters.</p>

    <p>At Ghibli Stories, we believe that every movie has its own charm and appeals to different tastes. Our website is

      designed to help you discover and choose the Ghibli movies that resonate with you the most. Whether you are a fan

      of heartwarming tales, epic adventures, or thought-provoking narratives, we've got you covered!</p>

    <p>Explore our extensive collection of Ghibli movies, read detailed reviews from fellow fans, and dive into the

      captivating synopses to get a glimpse of each film's storyline. Discover hidden gems, revisit beloved classics,

      and embark on new cinematic journeys with Ghibli Stories.</p>

    <div class="totoro"></div>

  </div>

</body>




</html>
