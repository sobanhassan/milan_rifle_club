<?php $title = "Members";
include('includes/header.php'); ?>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="images/calendar.jpg" style="width:100%">
        </div>
        <div class="hero-heading-title">
            <h1><?php echo($title); ?></h1>
        </div>
</div>
</header>

  <main class="regular-page">
      <div class="justify adjust">
        <h1>Member Info</h1>
        <p>Please log in to view Members Only content.</p>
                <form action="members-logged-in.php" method="post">
                	<label for="login_info"><strong>Password: </strong></label><input type="password" name="login_info" /> <input type="submit" mame="submit" value="Log In" />
                </form>
      </div>
      
</main>
<?php include('includes/footer.php'); ?>