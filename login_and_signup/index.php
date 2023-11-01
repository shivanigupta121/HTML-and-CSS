<!DOCTYPE html>
<html>
<head>
    <title>Login and Signup Form</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    }
    
    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        text-align: center;
        margin-top: 70px;
    }
    h2 {
        margin-bottom: 20px;
    }
    .form-group {
        margin: 10px 0;
    }
    .form-group input {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 10px;
        box-shadow: 1 px solid #FFFAFA;
        margin: 5px 0;
    }
    .form-group button {
        width: 50%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }
    .custom-shape-divider-top-1698400763 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-top-1698400763 svg {
    position: relative;
    display: block;
    width: calc(124% + 1.3px);
    height: 269px;
}

.custom-shape-divider-top-1698400763 .shape-fill {
    fill: #FFFAFA;
}

/** For mobile devices **/
@media (max-width: 767px) {
    .custom-shape-divider-top-1698400763 svg {
        width: calc(156% + 1.3px);
        height: 172px;
    }
}
button {
  position: relative;
  padding: 10px 20px;
  border-radius: 7px;
  border: 1px solid rgb(61, 106, 255);
  font-size: 14px;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 2px;
  background: transparent;
  color: #fff;
  overflow: hidden;
  box-shadow: 0 0 0 0 transparent;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

button:hover {
  background: rgb(61, 106, 255);
  box-shadow: 0 0 30px 5px rgba(0, 142, 236, 0.815);
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}

button:hover::before {
  -webkit-animation: sh02 0.5s 0s linear;
  -moz-animation: sh02 0.5s 0s linear;
  animation: sh02 0.5s 0s linear;
}

button::before {
  content: '';
  display: block;
  width: 0px;
  height: 86%;
  position: absolute;
  top: 7%;
  left: 0%;
  opacity: 0;
  background: #fff;
  box-shadow: 0 0 50px 30px #fff;
  -webkit-transform: skewX(-20deg);
  -moz-transform: skewX(-20deg);
  -ms-transform: skewX(-20deg);
  -o-transform: skewX(-20deg);
  transform: skewX(-20deg);
}

@keyframes sh02 {
  from {
    opacity: 0;
    left: 0%;
  }

  50% {
    opacity: 1;
  }

  to {
    opacity: 0;
    left: 100%;
  }
}

button:active {
  box-shadow: 0 0 0 0 transparent;
  -webkit-transition: box-shadow 0.2s ease-in;
  -moz-transition: box-shadow 0.2s ease-in;
  transition: box-shadow 0.2s ease-in;
}

</style>

    <script>
        function toggleForms() {
            var loginForm = document.getElementById('loginForm');
            var signupForm = document.getElementById('signupForm');
            
            loginForm.style.display = loginForm.style.display === 'none' ? '' : 'none';
            signupForm.style.display = signupForm.style.display === 'none' ? '' : 'none';
        }
    </script>
</head>
<body>
<div class="custom-shape-divider-top-1698400763">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
    
</div>
    <div class="container">
        <form id="signupForm" action="signup.php" method="post">
            <h2>Signup</h2>
            <div class="form-group">
                <input type="text" name="fullname" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Signup</button>
            </div>
            <p>Already have an account? <a href="javascript:void(0);" onclick="toggleForms();">Login here</a></p>
        </form>
        
        <form id="loginForm" action="login.php" method="post" style="display: none;">
        <h2>Login</h2>
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <p>Don't have an account? <a href="javascript:void(0);" onclick="toggleForms();">Signup here</a></p>
        </form>
    </div>
    
</body>
</html>
