<?php
require 'sessions.php';
?>
<header>
<script async src="https://fundingchoicesmessages.google.com/i/pub-4773475340562413?ers=1" nonce="R_VRW3u1idOGNlUv7F2n8A"></script><script nonce="R_VRW3u1idOGNlUv7F2n8A">(function() {function signalGooglefcPresent() {if (!window.frames['googlefcPresent']) {if (document.body) {const iframe = document.createElement('iframe'); iframe.style = 'width: 0; height: 0; border: none; z-index: -1000; left: -1000px; top: -1000px;'; iframe.style.display = 'none'; iframe.name = 'googlefcPresent'; document.body.appendChild(iframe);} else {setTimeout(signalGooglefcPresent, 0);}}}signalGooglefcPresent();})();</script>
</header>
<div class="sidebar"> 
      <div class="toggle">
          <i class="bx bx-chevron-right"></i>
      </div>
      <div class="user">
      <?php if(!isset($_SESSION['profile_pic']) || empty($_SESSION['profile_pic'])) { ?>
            <img src="img/default.jfif" alt="User">
            <?php } else { ?>
            <a class="accountLink" href="account">
            <img src="img/<?php echo $_SESSION['profile_pic']; ?>" alt="User">
        <?php } ?>
          <span class="dot"></span>
            <?php if(isset($_SESSION['username'])): ?>
            <div class="username"><?php echo $_SESSION['username']; ?></div></a>
            <div class="accountDiv">
                <li><a href="account">Account</a></li>
                <li><a id="logoutBtn" href="logout"><i class='bx bx-log-out'></i>Logout</a></li>
           
            </div>
            <?php else: ?>
            <div class="username">Guest</div>

            <div class="accountDiv">
                <li><a href="loginForm">Login</a></li>
                <li><a href="registerForm">Register</a></li>
                <p id="logoutBtn"></p>
            </div>
            <?php endif; ?>
      </div>
      <nav>
          <div class="nav-title">Management</div>
          <ul>
          <a href="/" class="nav-item">
                  <i class='bx bx-home-alt-2'></i>
                  <span>Home</span>
              </a>
              <a href="games" class="nav-item">
                  <i class="bx bxs-dashboard"></i>
                  <span>Games</span>
              </a>
              <?php
                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    echo '<a href="leaderboard#' . $username . '" class="nav-item">';
                } else {
                    echo '<a href="leaderboard" class="nav-item">';
                }
                ?>
                  <i class='bx bx-bar-chart-alt-2'></i>
                  <span>Leaderboard</span>
              </a>
              <?php
              if ($_SESSION) {
              if ($_SESSION['userId']) {
                $userId = $_SESSION['userId'];
                require_once 'Classes/Notifications.php';
                $newNotifs = new Notifications();
                $unopenedCount = $newNotifs->navNotif($userId); // Capture the returned value
                if ($unopenedCount > 0 && $unopenedCount <= 99) {
                    ?>
                    <a href="notificationsForm" class="nav-item">
                  <div class="notifications"><i class='bx bx-bell' ></i><div class="notif"><span class="notifAmount"><?php echo '' . $unopenedCount . '';?></span></div></div>
                  <span>Notifications</span>
              </a>
                    <?php
            // } else if ($unopenedCount == 2) {
            // } else if ($unopenedCount == 3) {
            // } else if ($unopenedCount == 4) {

              } else {
                ?>
              <a href="notificationsForm" class="nav-item">
                  <i class='bx bx-bell' ></i>
                  <span>Notifications</span>
              </a>
              <?php
              }}}
              if (isset($_SESSION['username'])) {
              ?>

              <!-- fit content scroll -->
              <a href="account" class="nav-item">
                  <i class='bx bx-cog' ></i>
                  <span>Settings</span>
              </a>
              <?php
              }
              ?>
          </ul>
          <hr>
          <div class="nav-title">Support</div>
          <ul>
              <a href="contact" class="nav-item">
                  <i class="bx bx-question-mark"></i>
                  <span>Get Help</span>
              </a>
              <a href="contact" class="nav-item">
                  <i class='bx bx-message-dots' ></i>
                  <span>Feedback</span>
              </a>
          </ul>
          <hr>
          <div class="nav-title">Credits</div>
          <a href="contact" class="nav-item" id="credits" >
            <i class='bx bx-copyright'></i>            
            <span> Lukas Sliva</span>
          </a>
      </nav>
    </div>
    <div class="credits"><a href="mailto: lukas.sliva.developer@gmail.com"><i class='bx bx-copyright'>Lukas Sliva</i></a></div>
    <script>
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>