<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
   require('vendorreg_process.php');
  }//End of the main submit conditional.
  ?>

<form method="post">
    <div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

<input id="text" type="text" name="name" placeholder="`Name" required
      value="<?php if (isset($_POST['name']))echo $_POST['first_name'];?>" ><br><br>
<input id="text" type="text" name="email" placeholder="Email"  required
      value="<?php if (isset($_POST['email']))echo $_POST['email'];?>" ><br><br>
<input id="text" type="text" name="phone_number" placeholder="phone number" required
      value="<?php if (isset($_POST['phone_number1']))echo $_POST['phone_number1'];?>" ><br><br>
<input id="text" type="text" name="account_no" placeholder="Account number" required
      value="<?php if (isset($_POST['account_no']))echo $_POST['account_no'];?>" ><br><br>
<input id="text" type="password" name="password1" placeholder="Password"required
      value="<?php if (isset($_POST['password1']))echo $_POST['password1'];?>"><br><br>
<input id="text" type="password" name="password2" placeholder="Confirm password"required
      value="<?php if (isset($_POST['password2']))echo $_POST['password2'];?>"><br><br>

<input id="button" type="submit" value="Signup"><br><br>

<div class="btn-box">
  <a href="vendorreg.php">
  LOGIN
  </a>
</div>
		</form>