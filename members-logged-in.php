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
<?php
	$real_password = "removed for upload purposes";
	$password_input = $_POST["login_info"];
	if($real_password == $password_input && $real_user == $user_input){
		$logged_in = 1;
?>
  <main class="regular-page">
      <div class="justify adjust">
        <h1>Member Info</h1>
        <h3>Board Agendas &amp; Minutes</h3>
        <p><a href="minutes/20240327agenda.pdf" target="_blank">March 27, 2024 Agenda</a></p>
        <p><a href="minutes/20240228minutes.pdf" target="_blank">February 28, 2024 Minutes</a></p>
        <p><a href="minutes/20240228agenda.pdf" target="_blank">February 28, 2024 Agenda</a></p>
        <p><a href="minutes/20240124minutes.pdf" target="_blank">January 24, 2024 Minutes</a></p>
        <p><a href="minutes/20240124agenda.pdf" target="_blank">January 24, 2024 Agenda</a></p>
        <p><a href="minutes/20240107agenda.pdf" target="_blank">January 7, 2023 Agenda</a></p>
        <p><a href="minutes/20231220minutes.pdf" target="_blank">December 20, 2023 Minutes</a></p>
        <p><a href="minutes/20231220agenda.pdf" target="_blank">December 20, 2023 Agenda</a></p>
        <p><a href="minutes/20231115minutes.pdf" target="_blank">November 15, 2023 Minutes</a></p>
        <p><a href="minutes/20231115agenda.pdf" target="_blank">November 15, 2023 Agenda</a></p>
        <p><a href="minutes/20231025minutes.pdf" target="_blank">October 25, 2023 Minutes</a></p>
        <p><a href="minutes/20231025agenda.pdf" target="_blank">October 25, 2023 Agenda</a></p>
        <p><a href="minutes/20230927minutes.pdf" target="_blank">September 27, 2023 Minutes</a></p>
        <p><a href="minutes/20230927agenda.pdf" target="_blank">September 27, 2023 Agenda</a></p>
        <p><a href="minutes/20230830minutes.pdf" target="_blank">August 30, 2023 Minutes</a></p>
        <p><a href="minutes/20230830agenda.pdf" target="_blank">August 30, 2023 Agenda</a></p>
        <p><a href="minutes/20230802addendum.pdf" target="_blank">August 2, 2023 Special Addendum</a></p>
        <p><a href="minutes/20230726minutes.pdf" target="_blank">July 26, 2023 Minutes</a></p>
        <p><a href="minutes/20230726agenda.pdf" target="_blank">July 26, 2023 Agenda</a></p>
        <p><a href="minutes/20230628minutes.pdf" target="_blank">June 28, 2023 Minutes</a></p>
        <p><a href="minutes/20230628agenda.pdf" target="_blank">June 28, 2023 Agenda</a></p>
        <p><a href="minutes/20230524minutes.pdf" target="_blank">May 24, 2023 Minutes</a></p>
        <p><a href="minutes/20230524agenda.pdf" target="_blank">May 24, 2023 Agenda</a></p>
        <p><a href="minutes/20230426agenda.pdf" target="_blank">April 26, 2023 Agenda</a></p>
        <p><a href="minutes/20230322minutes.pdf" target="_blank">March 22, 2023 Minutes</a></p>
        <p><a href="minutes/20230322agenda.pdf" target="_blank">March 22, 2023 Agenda</a></p>
        <p><a href="minutes/20230222minutes.pdf" target="_blank">February 22, 2023 Minutes</a></p>
        <p><a href="minutes/20230222agenda.pdf" target="_blank">February 22, 2023 Agenda</a></p>
        <p><a href="minutes/20230125minutes.pdf" target="_blank">January 25, 2023 Minutes</a></p>
        <p><a href="minutes/20230125agenda.pdf" target="_blank">January 25, 2023 Agenda</a></p>
        <p><a href="minutes/20230108minutes.pdf" target="_blank">January 8, 2023 Minutes</a></p>
        <p><a href="minutes/20230108agenda.pdf" target="_blank">January 8, 2023 Agenda</a></p>
        <p><a href="minutes/20221221minutes.pdf" target="_blank">December 21, 2022 Minutes</a></p>
        <p><a href="minutes/20221221agenda.pdf" target="_blank">December 21, 2022 Agenda</a></p>
        <p><a href="minutes/20221116minutes.pdf" target="_blank">November 16, 2022 Minutes</a></p>
        <p><a href="minutes/20221116agenda.pdf" target="_blank">November 16, 2022 Agenda</a></p>
        <p><a href="minutes/20221026minutes.pdf" target="_blank">October 26, 2022 Minutes</a></p>
        <p><a href="minutes/20221026agenda.pdf" target="_blank">October 26, 2022 Agenda</a></p>
        <p><a href="minutes/20220928minutes.pdf" target="_blank">September 28, 2022 Minutes</a></p>
        <p><a href="minutes/20220928agenda.pdf" target="_blank">September 28, 2022 Agenda</a></p>
        <p><a href="minutes/20220824minutes.pdf" target="_blank">August 24, 2022 Minutes</a></p>
        <p><a href="minutes/20220824agenda.pdf" target="_blank">August 24, 2022 Agenda</a></p>
        <p><a href="minutes/20220727minutes.pdf" target="_blank">July 27, 2022 Minutes</a></p>
        <p><a href="minutes/20220727agenda.pdf" target="_blank">July 27, 2022 Agenda</a></p>
        <p><a href="minutes/20220622minutes.pdf" target="_blank">June 22, 2022 Minutes</a></p>
        <p><a href="minutes/20220622agenda.pdf" target="_blank">June 22, 2022 Agenda</a></p>
        <p><a href="minutes/20220525minutes.pdf" target="_blank">May 25, 2022 Minutes</a></p>
        <p><a href="minutes/20220525agenda.pdf" target="_blank">May 25, 2022 Agenda</a></p>
        <p><a href="minutes/20220427minutes.pdf" target="_blank">April 27, 2022 Minutes</a></p>
        <p><a href="minutes/20220427agenda.pdf" target="_blank">April 27, 2022 Agenda</a></p>
        <p><a href="minutes/20220323minutes.pdf" target="_blank">March 23, 2022 Minutes</a></p>
        <p><a href="minutes/20220323agenda.pdf" target="_blank">March 23, 2022 Agenda</a></p>
        <p><a href="minutes/20220223minutes.pdf" target="_blank">February 23, 2022 Minutes</a></p>
        <p><a href="minutes/20220223agenda.pdf" target="_blank">February 23, 2022 Agenda</a></p>
        <p><a href="minutes/20220126minutes.pdf" target="_blank">January 26, 2022 Minutes</a></p>
</div>
      
</main>
<?php } else { ?>
	<main class="regular-page">
      <div class="justify adjust">
        <h1>Member Info</h1>
        <p>Your login was incorrect. Please try again.</p>
        <form action="members-logged-in.php" method="post">
                	<label for="login_info"><strong>Password: </strong></label><input type="password" name="login_info" /> <input type="submit" mame="submit" value="Log In" />
                </form>
      </div>
      
</main>
<?php } ?>
<?php include('includes/footer.php'); ?>