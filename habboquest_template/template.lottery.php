<html lang="en-US">
 <head>
  <title>Habboquest - Lottery</title>
  <meta charset="utf-8" />
  <meta name="title" content="habboquest"/>
  <meta name="description" content="habboquest, 24/7 radio streaming and the latest habbo information!">
  <meta name="keywords" content="Friends, Habbo, Credits, Duckets, Diamonds, Events, Staff, Radio, Fansite">
  <meta name="author" content="Declan David Wilkinson">
  <meta property="og:type" content="article" />
  <meta property="og:title" content="habboquest - Lottery" />
  <meta property="og:description" content="Checkout habboquest, Make friends play in events and travel around!" />
  <meta property="og:image" content="habboquest.png" />
  <meta property="og:url" content="http://habbo.quest" />
  <meta property="og:site_name" content="habboquest" />
  <meta name="robots" content="index, follow"/>
  <link rel="canonical" href="http://habbo.quest"/>
  <link rel="stylesheet" href="http://localhost/habboquest_template/habboquest_css/style.habboquest.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
 </head>
 <body>
 <div class="habboquest-nav">
   <div class="habboquest-nav-container">
    <div class="habboquest-nav-grid">
     <div class="habboquest-nav-grid-a-1">
      <img src="http://localhost/habboquest_template/habboquest_images/habboquest.gif"></img>
     </div>
     <div class="habboquest-nav-grid-a-2">
      <a><i class="fa fa-user"></i>
      <div class="habboquest-nav-grid-other-link">
       <div onClick="location.href = '/me';"><?php echo $_SESSION['habboquestUsername']; ?></div>
       <div onClick="location.href = '/account';">Account</div>
       <div onClick="location.href = '/inventory';">Inventory</div>
       <div onClick="location.href = '/logout';">Logout</div>
      </div>
      </a>
      <a><i class="fa fa-users"></i>
       <div class="habboquest-nav-grid-other-link">
        <div onClick="location.href = '/leaderboard';">Leaderboard</div>
        <div onClick="location.href = '/online';">Online</div>
        <div onClick="location.href = '/news';">News</div>
        <div onClick="location.href = '/staff';">Staff</div>
        <div onClick="location.href = '/rarevalues';">Rare Values</div>
        <div onClick="location.href = '/timetable';">Timetable</div>
       </div>
      </a>
      <a><i class="fa fa-store"></i>
       <div class="habboquest-nav-grid-other-link">
        <div onClick="location.href = '/currencys';">Currencys</div>
        <div onClick="location.href = '/rarecrates';">Rare Crates</div>
        <div onClick="location.href = '/lottery';">Lottery Tickets</div>
        <div onClick="location.href = '/vip';">VIP</div>
        <div onClick="location.href = '/donate';">Donate</div>
       </div>
      </a>
      <a><i class="fa fa-hashtag"></i>
       <div class="habboquest-nav-grid-other-link">
        <div onClick="window.open('https://www.facebook.com/profile.php?id=100079706507732')">Facebook</div>
        <div onClick="window.open('https://twitter.com/habbo_quest')">Twitter</div>
        <div onClick="window.open('https://www.instagram.com/habbo.quest/')">Instagram</div>
        <div onClick="window.open('https://discord.gg/hJsNqw2C9x')">Discord</div>
       </div>
      </a>
     </div>
     <div class="habboquest-nav-grid-a-3">
      <a target="_BLANK" href="/client">Enter</a> 
      <a target="_BLANK" href="/habboquest_housekeeping/index">House Keeping</a> 
      <a href="/online"><?= Page::online(); ?> online</a>
     </div>
    </div>
   </div>   
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT']."/habboquest_app/habboquest_backend/habboquest_plugins/habboquest_plugins_page/plugin.BuyLotteryTicket.php"; ?>
  <?php
    if (!empty($habboquestLotteryError)){ echo "<div class='habboquest-cms-error'><div class='habboquest-nav-container'>&nbsp;&nbsp;<i style='font-size: 19px;' class='fa fa-triangle-exclamation'></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$habboquestLotteryError</div></div>"; }
  ?>   
  <div class="habboquest-content">
   <div class="habboquest-content-grid">
    <div class="habboquest-content-grid-a-1">
     <div class="habboquest-crate-common">
      <div style="margin-left: 25px; margin-top: 20px; width: 195px; display: inline-block;">
       Daily Ticket - 1 point<br><br>
       Currencys:<br>
       1000 Credits<br>
       5000 Duckets<br>
       25 Diamonds
      </div>
      <div style="display: inline-block; width: 225px; padding-left: 25px;">
       Other Rewards: <br>
       Daily Lottery Winners Badge<br>
       Common Crate<br>
       Many Many More...
      </div>
      <form style="display: inline-block;" method='POST'>
       <button style="display: inline-block; width: 115px; position: absolute; margin-top: -85px; margin-left: 79px;" type='submit' name='habboquestLotteryDaily'>Buy Lottery Ticket</button>
      </form>
     </div>
     <div class="habboquest-crate-rare">
      <div style="margin-left: 25px; margin-top: 20px; width: 195px; display: inline-block;">
       Monthly Ticket - 25 points<br><br>
       Currencys:<br>
       25000 Credits<br>
       250000 Duckets<br>
       750 Diamonds
      </div>
      <div style="display: inline-block; width: 235px; padding-left: 25px;">
       Other Rewards: <br>
       Monthly Lottery Winners Badge<br>
       Rare Crate<br>
       Many Many More...
      </div>
      <form style="display: inline-block;" method='POST'>
       <button style="display: inline-block; width: 115px; position: absolute; margin-top: -85px; margin-left: 69px;" type='submit' name='habboquestLotteryMonthly'>Buy Lottery Ticket</button>
      </form>
     </div>
     <div class="habboquest-crate-ultrarare">
      <div style="margin-left: 25px; margin-top: 20px; width: 195px; display: inline-block;">
       Yearly Ticket - 50 points<br><br>
       Currencys:<br>
       250000 Credits<br>
       1000000 Duckets<br>
       2500 Diamonds
      </div>
      <div style="display: inline-block; width: 225px; padding-left: 25px;">
       Other Rewards: <br>
       Yearly Lottery Winners Badge<br>
       Ultra Rare Crate<br>
       Many Many More...
      </div>
      <form style="display: inline-block;" method='POST'>
       <button style="display: inline-block; width: 115px; position: absolute; margin-top: -85px; margin-left: 79px;" type='submit' name='habboquestLotteryYearly'>Buy Lottery Ticket</button>
      </form>
     </div>
     <div class="habboquest-footer">
      &copy; 2022 - <?php echo date('Y'); ?> <a href="http://localhost/index">Habbo.quest.</a> All rights reserved.<br>
      Written & Designed by <a href="http://localhost/profile/Declan">Declan.</a>
     </div>
    </div>
    <div class="habboquest-content-grid-a-2">
    <div class="habboquest-shop-habbo">
      <div class="habboquest-shop-habbo-placeholder">
       <img style="z-index: 2; position: relative; margin-left: 25px; margin-top: 10px;" src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo xss(Users::getUserInfo('look')) ?>&size=b&direction=3&head_direction=3&"></img>
       <img style="position: absolute; margin-left: -62.5px; margin-top: 95px; z-index: 1;" src="http://localhost/habboquest_template/habboquest_images/bg_avatar_stage.gif"></img>
       <div class="habboquest-shop-habbo-placeholder-username"><?= $_SESSION['habboquestUsername'] ?></div>
       <div class="habboquest-shop-habbo-placeholder-points"><?= users::getUserInfo("cms_points"); ?> Points</div>
      </div>
     </div>
     <div class="habboquest-event">
      <?php 
      Event::event("+0 hour");
      Event::event("+1 hour");
      Event::event("+2 hour");
      ?>
     </div>
     <div class="habboquest-news">
      <?php include $_SERVER['DOCUMENT_ROOT']."/habboquest_app/habboquest_backend/habboquest_plugins/habboquest_plugins_page/plugin.news.php"; ?>   
     </div>
    </div>   
   </div>
  </div>
 </body>
</html>