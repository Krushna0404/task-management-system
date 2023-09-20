<!DOCTYPE html>
<html>
<head>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  /* background-color: black; */
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}



.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">

</head>
<body>

<?php $danger_flash = $this->session->flashdata('danger'); ?>
<?php if (isset($danger_flash)): ?>
    <div class="alert alert-danger">
        <?php echo $danger_flash; ?>
    </div>
<?php endif; ?>



<?php
        echo form_open('login/check', [ 'class' => 'form-validate', 'autocomplete' => 'off' ]);
            // echo form_open_multipart(['enctype="multipart/form-data" class=form-validate autocomplete=off' ]);
        ?>
  <div class="container">
    <h1>Log in</h1>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
  
  <div class="container signin">
    <p>Don't have an account? <a href="<?php base_url()?>register">Register</a>.</p>
  </div>
  <?php
						echo form_close();
					?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="<?php base_url()?>assets/js/jquery.min.js"></script>
</body>
</html>
