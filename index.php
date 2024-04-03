<?php $title = "Home";
include('includes/header.php'); ?>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1</div>
        <img src="images/disciplines/splash.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2</div>
        <img src="images/disciplines/splash-air-pistol-1920.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3</div>
        <img src="images/disciplines/splash-bullseye-pistol.jpg" style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
      <div class="dot-row" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>

      <div class="hero-heading-title">
        <h1>Milan Rifle Club</h1>
        <p>The Milan Rifle Club was established as a private club in 1923 when Dr. WM. H. & Silence Otis donated the original 90 acres for use as a rifle range. The Range was founded on competition and friendship in a free society.</p>
      </div>
    </div>

    
  </header>

  <main>
    <div class="justify adjust about-box">
      <div class="mask">
        <img src="images/small-carousel1.png" alt="People pointing at targets with a gun">
      </div>
      <div class="div-position">
        <div class="nested-postion">
          <h2>About Us</h2>
          <p>Since the beginning, the club has been associated with the National Rifle Association with a goal of providing a safe facility for its members to compete in the various shooting sports. You must be a member of the NRA in order to be a member of the Milan Rifle Club.<br />
            <br />
            Membership in the Milan Rifle Club is not required to compete in formal competitions. All other use of the club facilities does require membership. You can find information about membership and an application to join the club <a href="membership.php">on the Membership page</a>.
          </p>
          <a href="membership.php" class="button">Join Today</a>
        </div>

      </div>
    </div>
    <p id="rangehours"><a href="http://localendar.com/public/MilanRifleClub" target="_blank">Events Calendar & Range Schedules</a></p>
    <div class="justify adjust three-by-two-grid">
      <div>
        <img src="images/shooting-range.png" alt="Shooting range">
        <h2>Ranges</h2>
        <p>The following ranges are available for both formal competitions as well as informal practice/plinking in accordance with club schedule <a href="calendar.php">(See full club schedule)</a>:<br />
          <br />
          HIGH POWER RIFLE – 600 YD, 300 YD, 200 YD
          <br />
        BENCH REST – 25 YD, 50 YD, 100 YD, 180 YD<br />
        INDOOR PISTOL – 25 YD, 50 FT
          <br />
        OUTDOOR PISTOL – 25 YD, 50 YD, 5 INDIVIDUAL WALLED BAYS</p>
<p><a href="" class="button">Read More</a></p>
      </div>
      <div>
        <img src="images/aerial-view.png" alt="Shooting range">
        <h2>Virtual Tour</h2>
        <p>This virtual tour by drone is an excellent way to get to know the ranges and facilities at the club.</p>
        <p><a href="https://www.youtube.com/watch?v=tzAA6aMIdKw" target="_blank" class="button">Watch Now</a></p>
      </div>
      <div>
        <img src="images/training1.jpg" alt="Milan RC aerial view">
        <h2>Training</h2>
        <p>The club is offering free Basic Pistol Safety and Marksmanship Training for members and their families. Please contact Mel Block at 309-795-1381 or <a href="mailto:melblock@att.net">melblock@att.net</a> if you are interested in attending a class. Please note: This is NOT NRA training and does not fulfill any training for a concealed carry permit.</p>
        <p>The club is also offering free AR Basic Safety and Function Training for members and their families. Please contact Bob Varble at 309-793-6223 if you are interested in attending a class.</p>
</div>
    </div>
    <div class="schedule">
      <div class="justify adjust">
      </div>
      
    </div>
  </main>
  <script src="js/carousel.js"></script>
  <?php include('includes/footer.php'); ?>