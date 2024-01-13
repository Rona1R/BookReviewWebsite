<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/Genres.css" />
    <link rel="stylesheet" href="CSS/BookReviewHomePage.css" />
    <link rel="stylesheet" href="CSS/Reviews.css" />
    <title>Fantasy genre</title>
    <!-- <script src="JS/BookSlider.js"></script> -->
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
            <a href="Fantasy.php">Fantasy</a>
          </p>
        </div>
        <div class="introudction">
          <h2>Fantasy</h2>
          <p>
            <span id="bulletPoint">&#8226;</span> The fiction genre encompasses
            a diverse and imaginative realm of literature that transcends
            reality, offering readers an escape into invented worlds,
            characters, and narratives. Rooted in creativity and storytelling,
            fiction can take various forms, including novels, short stories, and
            novellas. It invites readers to explore the depths of human
            emotions, the intricacies of relationships, and the complexities of
            life through the lens of invented scenarios and characters. Whether
            it's science fiction, fantasy, historical fiction, or contemporary
            tales, the genre serves as a canvas for authors to weave captivating
            and thought-provoking stories that captivate the imagination,
            challenge perspectives, and provide a rich tapestry of experiences
            for those who delve into its page.
          </p>
        </div>
      </div>

      <div class="slider-container">
        <div class="slider-content">
          <div class="book">
            <img src="FOTOT/BelieveMe.jpg" alt="Believe Me" />
            <h3>Believe me</h3>
            <p>Author: Tahereh Mafi</p>
            <button class="showReview">Click to see reviews</button>
          </div>
          <div class="book">
            <img src="FOTOT/GOT.jpeg" alt="GOT" />
            <h3>Game of Thrones</h3>
            <p>Author: George Martin</p>
            <button class="showReview">Click to see reviews</button>
          </div>
          <div class="book">
            <img src="FOTOT/BalladOfSongbirds.jpeg" alt="BOFAS" />
            <h3>Hunger Games:TBOSAS</h3>
            <p>Author: Suzanne Collins</p>
            <button class="showReview">Click to see reviews</button>
          </div>
          <div class="book">
            <img src="FOTOT/HarryPotter.jpg" alt="HarryPotter" />
            <h3>Harry Potter</h3>
            <p>Author: JK Rowling</p>
            <button class="showReview">Click to see reviews</button>
          </div>
          <div class="book">
            <img src="FOTOT/Divergent cover.jpg" alt="Divergent" />
            <h3>Divergent</h3>
            <p>Author: Veronica Roth</p>
            <button class="showReview">Click to see reviews</button>
          </div>
          <div class="book">
            <img src="FOTOT/Insurgent.jpeg" alt="Insurgent" />
            <h3>Insurgent</h3>
            <p>Author: Veronica Roth</p>
            <button class="showReview">Click to see reviews</button>
          </div>
          <div class="book">
            <img src="FOTOT/CourtOfWings.jpeg" alt="CourtOfWingsAndRuin" />
            <h3>Court Of Wings and Ruin</h3>
            <p>Author: Sarah J. Maas</p>
            <button class="showReview">Click to see reviews</button>
          </div>
          <div class="book">
            <img src="FOTOT/Four.jpeg" alt="Four" />
            <h3>Four</h3>
            <p>Author: Veronica Roth</p>
            <button class="showReview">Click to see reviews</button>
          </div>
        </div>
      </div>

      <!-- ne KETA CONTAINERS do vendosen reviews per secilin liber specifik-->

      <div class="ReviewDisplay" id="L1Review">
        <p>Believe me</p>
        <!-- <button onclick="closeReview('L1Review')">Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL1">
          <label for="komentiL1">Leave your review:</label>
          <textarea type="text" id="komentiL1" name="komentiL1" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock1">
          <!-- ktu kan mu bo append komentet e userit (UserReview)-->
        </div>
      </div>

      <div class="ReviewDisplay" id="L2Review">
        <p>Game of Thrones</p>
        <!-- <button  onclick="closeReview('L2Review')" >Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL2">
          <label for="komentiLL2">Leave your review:</label>
          <textarea type="text" id="komentiL2" name="komentiL2" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock2">
          <!-- ktu kan mu bo append komentet e userit-->
        </div>
      </div>
      <div class="ReviewDisplay" id="L3Review">
        <p>The Ballad Of Songbirds and Snakes</p>
        <!-- <button onclick="closeReview('L3Review')">Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL3">
          <label for="komentiL3">Leave your review:</label>
          <textarea type="text" id="komentiL3" name="komentiL3" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock3">
          <!-- ktu kan mu bo append komentet e userit-->
        </div>
      </div>
      <div class="ReviewDisplay" id="L4Review">
        <p>Harry Potter</p>
        <!-- <button onclick="closeReview('L4Review')">Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL4">
          <label for="komentiL4">Leave your review:</label>
          <textarea type="text" id="komentiL4" name="komentiL4" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock4">
          <!-- ktu kan mu bo append komentet e userit-->
        </div>
      </div>
      <div class="ReviewDisplay" id="L5Review">
        <p>Divergent</p>
        <!-- <button onclick="closeReview('L5Review')">Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL5">
          <label for="komentiL5">Leave your review:</label>
          <textarea type="text" id="komentiL5" name="komentiL5" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock5">
          <!-- ktu kan mu bo append komentet e userit-->
        </div>
      </div>
      <div class="ReviewDisplay" id="L6Review">
        <p>Insurgent</p>
        <!-- <button onclick="closeReview('L6Review')">Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL6">
          <label for="komentiL6">Leave your review:</label>
          <textarea type="text" id="komentiL6" name="komentiL6" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock6">
          <!-- ktu kan mu bo append komentet e userit-->
        </div>
      </div>
      <div class="ReviewDisplay" id="L7Review">
        <p>Court Of Wings and Ruin</p>
        <!-- <button onclick="closeReview('L7Review')">Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL7">
          <label for="komentiL7">Leave your review:</label>
          <textarea type="text" id="komentiL7" name="komentiL7" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock7">
          <!-- ktu kan mu bo append komentet e userit-->
        </div>
      </div>
      <div class="ReviewDisplay" id="L8Review">
        <p>Four</p>
        <!-- <button onclick="closeReview('L8Review')">Close Review</button> -->
        <button class="closeReview">Close Reviews</button>
        <form class="leaveReview" id="reviewL8">
          <label for="komentiL8">Leave your review:</label>
          <textarea type="text" id="komentiL8" name="komentiL8" rows="3">
          </textarea>
          <button type="submit" name="shtoReview">Post Review</button>
        </form>
        <div class="UserReviewContainer" id="UserReviewBlock8">
          <!-- ktu kan mu bo append komentet e userit-->
        </div>
      </div>
    </main>
   
    <?php include('Footer.php')?>
  </body>
</html>
