<?php 

echo '


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide">HOME</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
    <a href="officials.php" class="w3-bar-item w3-button"><i class="fa fa-user anchor_menu"></i> OFFICIALS</a>
	      <a href="achievements.php" class="w3-bar-item w3-button"><i class="fa fa-trophy anchor_menu"></i> ACHIEVEMENTS</a>
      <a href="role.php" class="w3-bar-item w3-button"><i class="fa fa-pencil anchor_menu"></i> ROLE SIGN UP</a>

      <a href="meetings.php" class="w3-bar-item w3-button"><i class="fa fa-calendar anchor_menu"></i> MEETINGS</a>
	  <div class="w3-dropdown-hover">
  <button class="w3-bar-item w3-button">   <i class="fa fa-caret-down"></i>MORE</button>
  <div class="w3-dropdown-content w3-bar-block w3-border">
    <a href="pathways.php" class="w3-bar-item w3-button">PATHWAYS</a>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-usd anchor_menu"></i> PRICING</a>
    <a href="materials.php" class="w3-bar-item w3-button"><i class="fa fa-book"></i> MATERIALS</a>
     <a href="members.php" class="w3-bar-item w3-button">MEMBERS</a>
	 <a href="profile.php" class="w3-bar-item w3-button">PROFILE</a>
	 	 <a href="forum.php" class="w3-bar-item w3-button">FORUM</a>
                 <a href="logout.php" class="w3-bar-item w3-button">SIGN OUT</a>
  </div>
</div>
      <a href="contact.php" class="w3-bar-item w3-button"><i class="fa fa-envelope anchor_menu"></i> CONTACT</a>
	

	</div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  <a href="officials.php" onclick="w3_close()" class="w3-bar-item w3-button">OFFICIALS</a>
  <a href="achievements.php" onclick="w3_close()" class="w3-bar-item w3-button">ACHIEVEMENTS</a>
  <a href="role.php" onclick="w3_close()" class="w3-bar-item w3-button">SELECT ROLE</a>
  <a href="meetings.php" onclick="w3_close()" class="w3-bar-item w3-button">MEETINGS</a>
  <a href="pathways.php" onclick="w3_close()" class="w3-bar-item w3-button">PATHWAYS</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
   	  <div class="w3-dropdown-hover">
  <button class="w3-bar-item w3-button">   <i class="fa fa-caret-down"></i>MORE</button>
   <div class="w3-dropdown-content w3-bar-block w3-border">
  <a href="materials.php" onclick="w3_close()" class="w3-bar-item w3-button">MATERIALS</a>
  <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    <a href="members.php" onclick="w3_close()" class="w3-bar-item w3-button">MEMBERS</a>
    <a href="profile.php" onclick="w3_close()" class="w3-bar-item w3-button">PROFILE</a>
    <a href="forum.php" onclick="w3_close()" class="w3-bar-item w3-button">FORUM</a>
    <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button">SIGN OUT</a>
  </div>
</div>
</nav>
<div style="margin:90px 0">
</div>
<div class="sameline">
  <span class="glow">Nairobi</span>&nbsp;&nbsp;
  <span class="african">Toastmasters</span>
  </div>';
  ?>
