<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookReview - HomePage</title>
    <link rel="stylesheet" href="CSS/BookReviewHomePage.css" >
    <script src="JS/SlideShow.js"></script>
</head>


<body>
    <header>
    <?php include('Navigation.php')?>
    </header>
    <main>
        <div class="MainBackgroundImage"> 
            <div class="MainQuote">
                <p>Meet your next favorite book</p>
            </div>
        </div>
        
        <div class="MainContent">
       <!--      <div class="MainBackgroundImage"> 
                <div class="MainQuote">
                    <p>Meet your next favorite book</p>
                </div>
            </div> -->
            <div class="NewestReleases">
                <div class="ReleasesBOX">
                    <div>
                        <h3>Newest Releases</h3>
                    </div>
                    <div>
                        <a id="GenreLink">
                            <img id="slideShow">
                        </a>
                    </div>
                </div>
                <div class="NEXT">  
                    <button id="next" onclick="updateIMG()">
                        Next
                    </button>
                </div>
            </div>


            <div class="FunFacts">
                <div id="Fact1" class="FactBox">
                    <img src="FOTOT/58SNQN-LogoMakr.png" alt="BookLogo">
                    <p>
                        Reading strengthens your brain.
                        Using MRI scans, researchers have confirmedTrusted Source that reading involves a complex network of circuits and signals in the brain. As your reading ability matures, those networks also get stronger and more sophisticated.
                    </p>
                </div>
                <div id="Fact2" class="FactBox">
                    <img src="FOTOT/58SNQN-LogoMakr.png" alt="BookLogo">
                    <p>
                        Researchers have foundTrusted 
                        Source that students who read books regularly, beginning at a young age, gradually develop large vocabularies. And vocabulary size can influence many areas of your life, from scores on standardized tests to college admissions and job opportunities.
                    </p>
                </div>
                <div id="Fact3" class="FactBox">
                    <img src="FOTOT/58SNQN-LogoMakr.png" alt="BookLogo">
                    <p>
                        It’s especially important for children to read as much as possible because the effects of reading are cumulative. 
                        However, it’s never too late to begin taking advantage of the many physical and psychological benefits waiting for you in the pages of a good book.
                    </p>
                </div>
            </div>
        </div>

            
        <div class="quotes">
            <a href="Quotes.php">Click to see quotes by prominent authors</a>
        </div>
    </main>
    <?php 
        include('Footer.php')
    ?>
</body>
</html>