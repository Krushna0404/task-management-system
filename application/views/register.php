<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      /* body {
        font-family: Arial, Helvetica, sans-serif;
      }
      * {
        box-sizing: border-box;
      }
      .container {
        padding: 16px;
        background-color: white;
      }
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
      hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
      }
      .registerbtn:hover {
        opacity: 1;
      }
      a {
        color: dodgerblue;
      }
      .signin {
        background-color: #f1f1f1;
        text-align: center;
      } */
    </style>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
  </head>
  <body>
  <?php
    echo form_open('register/save', [ 'class' => 'form-validate', 'autocomplete' => 'off' ]);
  ?>
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="fullname"><b>Full Name</b></label>
      <input class="form-control" type="text" placeholder="Enter full name" name="fullname" id="fullname" required>
      <span id="fullname-error" class="validation-message text-danger"></span>
      <br>
      <label for="email"><b>Email</b></label>
      <input class="form-control" type="text" placeholder="Enter Email" name="email" id="email" required>
      <span id="email-error" class="validation-message text-danger"></span>
      <br>
      <label for="psw"><b>Password</b></label>
      <input class="form-control" type="password" placeholder="Enter Password" name="psw" id="psw" required>
      <span id="password-error" class="validation-message text-danger"></span>
      <br>
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input class="form-control" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
      <span id="password-repeat-error" class="validation-message text-danger"></span>

      <hr>
      <button type="submit" class="btn btn-primary">Register</button>
      
      <div class="container signin">
        <p>Already have an account? <a href="<?php base_url()?>login">Log in</a>.</p>
      </div>
      
    </div>
    </div>
  </div>


    <?php
      echo form_close();
    ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="<?php base_url()?>assets/js/jquery.min.js"></script>
  <script>
document.addEventListener('DOMContentLoaded', function() {
    // Get the form element
    const form = document.querySelector('.form-validate');

    // Add a submit event listener to the form
    form.addEventListener('submit', function(event) {
        // Initialize a flag to track if the form is valid
        let isValid = true;

        // Get form input fields
        const fullname = document.getElementById('fullname');
        const email = document.getElementById('email');
        const password = document.getElementById('psw');
        const passwordRepeat = document.getElementById('psw-repeat');

        // Reset previous validation messages
        const validationMessages = document.querySelectorAll('.validation-message');
        validationMessages.forEach(function(message) {
            message.textContent = '';
        });

        // Validation for Full Name (required)
        if (fullname.value.trim() === '') {
            isValid = false;
            document.getElementById('fullname-error').textContent = 'Full Name is required';
        }

        // Validation for Email (required and email format)
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.value.trim() === '') {
            isValid = false;
            document.getElementById('email-error').textContent = 'Email is required';
        } else if (!emailRegex.test(email.value.trim())) {
            isValid = false;
            document.getElementById('email-error').textContent = 'Invalid email format';
        }

        // Validation for Password (required)
        if (password.value === '') {
            isValid = false;
            document.getElementById('password-error').textContent = 'Password is required';
        }

        // Validation for Repeat Password (required and match)
        if (passwordRepeat.value === '') {
            isValid = false;
            document.getElementById('password-repeat-error').textContent = 'Repeat Password is required';
        } else if (passwordRepeat.value !== password.value) {
            isValid = false;
            document.getElementById('password-repeat-error').textContent = 'Passwords do not match';
        }

        // Prevent form submission if not valid
        if (!isValid) {
            event.preventDefault();
        }
    });
});
</script>

  </body>
</html>
