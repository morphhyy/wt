<?php 
  session_start();
  if(!isset($_SESSION['userid']) && !isset($_SESSION['username'])){
    http_response_code(404);
    die();
  }else{

?>

<link rel="stylesheet" href="./css/update.css">
<script src="./js/update.js" defer></script>
<div class="mainDiv">
  <div class="cardStyle">
    <form action="index.php?updated" method="post" name="updateForm" id="updateForm">
      <h2 class="formTitle">
        Update to your account
      </h2>
      
    <div class="inputDiv">
      <label class="inputLabel" for="username">Username</label>
      <input type="text" id="username" name="username">
      
      <label class="inputLabel" for="email">Email</label>
      <input type="email" id="email" name="email">

      <label class="inputLabel" for="password">Password</label>
      <input type="password" id="password" name="password">
    </div>
      
    <div class="buttonWrapper">
      <button type="submit" id="submitButton" class="submitButton pure-button pure-button-primary">
        <span name="submit">Continue</span>
      </button>
    </div>
      
  </form>
  </div>
</div>

<?php } ?>