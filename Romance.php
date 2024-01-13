<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/Genres.css" />
    <link rel="stylesheet" href="CSS/BookReviewHomePage.css" />
    <link rel="stylesheet" href="CSS/Reviews.css" />
    <title>Romance genre</title>
    <script src="JS/Reviews.js"></script>
  </head>
  <body>
    <header>
      <?php include('Navigation.php')?>
    </header>
    <main>
      <div class="GenreIntroduction">
        <div class="path">
          <p>
            <a href="BookReviewHomePage.php">Genres</a> >
            <a href="Romance.php">Romance</a>
          </p>
        </div>
        <div class="introudction">
          <h2>Romance</h2>
          <p>
            <span id="bulletPoint">&#8226;</span> The romance genre, a timeless 
            and enchanting literary category, weaves tales of love, passion, and connection. At its heart, romance explores the complexities 
            of human relationships, inviting readers into worlds where emotions unfold in 
            captivating narratives. Whether set against the backdrop of historical eras, 
            contemporary societies, or fantastical realms, romance novels celebrate the
             universal theme of love in its myriad forms. From the fluttering excitement 
             of a budding romance to the enduring bonds that withstand the tests of time, 
             the genre offers a diverse tapestry of stories that resonate with the heart's
              deepest desires. With a rich history and an ever-evolving landscape, 
              the romance genre continues to captivate readers across the globe, providing an 
              escape into the realms of love, longing, and happily-ever-afters.
          </p>
        </div>
      </div>
     

      <div class="slider-container">
        <div class="slider-content">
          <div class="book">
            <img src="FOTOT/DeadRomantics.png" alt="Dead Romantics" />
            <h3>Dead Romantics</h3>
            <p>Author: Ashley Poston</p>
            <button class="showReview">Click to see reviews</button>
          </div>
          <div class="book">
            <img src="FOTOT/TheNotebook.jpg" alt="The Notebook" />
            <h3>The Notebook</h3>
            <p>Author: Nicholas Sparks</p>
            <button class="showReview">Click to see reviews</button>
          </div>
          <div class="book">
            <img src="FOTOT/ThePerfectDate.jpg" alt="The Perfect Date" />
            <h3>The Perfect Date</h3>
            <p>Author: Evelyn Lozada</p>
            <button class="showReview">Click to see reviews</button>
          </div>
          <div class="book">
            <img src="FOTOT/RomeAndJuliet.jpg" alt="Romeo and Juliet" />
            <h3>Romeo and Juliet</h3>
            <p>Author: Shakespeare</p>
            <button class="showReview">Click to see reviews</button>
          </div>
          <div class="book">
            <img src="FOTOT/MeBeforeYou.jpg" alt="Me Before You" />
            <h3>Me Before You</h3>
            <p>Author: Jojo Moyes</p>
            <button class="showReview">Click to see reviews</button>
          </div>
          <div class="book">
            <img src="FOTOT/SongOfAchilles.jpg" alt="Song of Achilles" />
            <h3>Song Of Achilles</h3>
            <p>Author: Madeline Miller</p>
            <button class="showReview">Click to see reviews</button>
          </div>
          <div class="book">
            <img src="FOTOT/HappilyEverAfters.jpg" alt="Happily Ever Afters" />
            <h3>Happily Ever Afters</h3>
            <p>Author: Elise Bryant</p>
            <button class="showReview">Click to see reviews</button>
          </div>
          <div class="book">
            <img src="FOTOT/LoveAtFirstLike.jpg" alt="Love at first like" />
            <h3>Love At First Like</h3>
            <p>Author: Hannah Orenstein</p>
            <button class="showReview">Click to see reviews</button>
          </div>
        </div>
      </div>

      <!-- ne KETA CONTAINERS do vendosen reviews per secilin liber specifik-->

      <div class="ReviewDisplay" id="L9Review">
        <p>Dead Romantics</p>
        <!-- <button onclick="closeReview('L1Review')">Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL9">
          <label for="komentiL9">Leave your review:</label>
          <textarea type="text" id="komentiL9" name="komentiL9" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock9"> <!-- ktu kan mu bo append komentet e userit (UserReview)-->

        </div>
      </div>

      <div class="ReviewDisplay" id="L10Review">
        <p>The Notebook</p>
        <!-- <button  onclick="closeReview('L2Review')" >Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL10">
          <label for="komentiLL2">Leave your review:</label>
          <textarea type="text" id="komentiL10" name="komentiL10" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock10"> <!-- ktu kan mu bo append komentet e userit-->

        </div>
      </div>
      <div class="ReviewDisplay" id="L11Review">
        <p>The Perfect Date</p>
        <!-- <button onclick="closeReview('L3Review')">Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL11">
          <label for="komentiL11">Leave your review:</label>
          <textarea type="text" id="komentiL11" name="komentiL11" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer"  id="UserReviewBlock11"> <!-- ktu kan mu bo append komentet e userit-->

        </div>
      </div>
      <div class="ReviewDisplay" id="L12Review">
        <p>Romeo and Juliet</p>
        <!-- <button onclick="closeReview('L4Review')">Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL12">
          <label for="komentiL12">Leave your review:</label>
          <textarea type="text" id="komentiL12" name="komentiL12" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock12"> <!-- ktu kan mu bo append komentet e userit-->

        </div>
      </div>
      <div class="ReviewDisplay" id="L13Review">
        <p>Me Before You</p>
        <!-- <button onclick="closeReview('L5Review')">Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL13">
          <label for="komentiL13">Leave your review:</label>
          <textarea type="text" id="komentiL13" name="komentiL13" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock13"> <!-- ktu kan mu bo append komentet e userit-->

        </div>
      </div>
      <div class="ReviewDisplay" id="L14Review">
        <p>Song Of Achilles</p>
        <!-- <button onclick="closeReview('L6Review')">Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL14">
          <label for="komentiL14">Leave your review:</label>
          <textarea type="text" id="komentiL14" name="komentiL14" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock14"> <!-- ktu kan mu bo append komentet e userit-->

        </div>
      </div>
      <div class="ReviewDisplay" id="L15Review">
        <p>Happily Ever Afters</p>
        <!-- <button onclick="closeReview('L7Review')">Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL15">
          <label for="komentiL15">Leave your review:</label>
          <textarea type="text" id="komentiL15" name="komentiL15" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock15"> <!-- ktu kan mu bo append komentet e userit-->

        </div>
      </div>
      <div class="ReviewDisplay" id="L16Review">
        <p>Love At First Like</p>
        <!-- <button onclick="closeReview('L8Review')">Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL16">
          <label for="komentiL16">Leave your review:</label>
          <textarea type="text" id="komentiL16" name="komentiL16" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock16"> <!-- ktu kan mu bo append komentet e userit-->

        </div>
      </div>
    </main>
    <?php include('Footer.php')?>
  </body>
</html>
