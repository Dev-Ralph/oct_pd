<?php
require '../resources/php/functions/registercode.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTER</title>
  <link href="../vendor/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Register</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="POST">
  <div class="form-row">
  <div class="form-group col">
    <label for="contactLast">Username:</label>
    <input class="form-control" id="contactLast" placeholder="Username" name="username" required autocomplete="contactLastName">
  </div>
  <div class="form-group col">
    <label for="contactFirst">Password:</label>
    <input class="form-control" id="contactFirst" placeholder="Password" name="password" required autocomplete="contactFirstName">
  </div>
</div>
<div class="form-row">
  <div class="form-group col">
    <label for="phone">Email:</label>
    <input class="form-control" id="phone" placeholder="Email" name="email" required autocomplete="phone">
  </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="register">Register</button>
      </div>
</form>
    </div>
  </div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../vendor/js/bootstrap.min.js"></script>
</html>
