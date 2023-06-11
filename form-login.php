<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #AFD3E2;
        }
        .container {
            max-width: 400px;
        }
        .card {
            border-radius: 20px;
        }
        .card-header {
            background-color: #6CB2FF;
            border-bottom: none;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }
        .card-body {
            background-color: #ffffff;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .btn-primary {
            background-color: #6CB2FF;
            border-color: #6CB2FF;
        }
        .btn-primary:hover {
            background-color: #62CDFF;
            border-color: #62CDFF;
        }
        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 182, 193, 0.5);
        }
        .btn-primary:active {
            background-color: #FF92A4;
            border-color: #FF92A4;
            box-shadow: none;
        }
        .btn-primary:disabled {
            background-color: #FFB6C1;
            border-color: #FFB6C1;
        }
    </style> -->
    <title>Login Form</title>
</head>
<body>
   
    <nav>
        <?php if(isset($_GET['status'])): ?>
            <h4>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Akun berhasil dibuat!";
                    } elseif ($_GET['status'] == 'belum_login') {
                        echo "<script> alert('Login terlebih dahulu!')</script>";
                    } else{
                        die("Salah Password/Akun!");
                    }
                ?>
            </h4>
        <?php endif; ?>
    </nav>
    <!--  <div class="container mt-5"> -->
        <!-- <div class="card">
            <div class="card-header">
                <h4 class="text-center">Login Form</h4>
            </div>
            <div class="card-body">
                <form action="proses-login.php" method="post">
                    <fieldset>
                        <div class="mb-3">
                            <label for="iUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="iUsername" name="iUsername" placeholder="Masukkan username...." required>
                        </div>
                        <div class="mb-3">
                            <label for="iPassword" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="iPassword" name="iPassword" placeholder="Masukkan password..." required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
                        </div>
                    </fieldset>
                </form>
                <p class="mt-3 text-center">
                    Belum punya akun? Registrasi <a href="proses-register.php">di sini</a>
                </p>
            </div>
        </div>
    </div> -->

    <!-- Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->




 

      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="proses-login.php" method="post">
            <div class="field">
                <label for = "iUsername"></label>
                <input type="text" name="iUsername" id="iUsername" placeholder="Username" required>
            </div>
            <div class="field">
               <label for="iPassword"></label>
               <input type="password" name="iPassword" id="iPassword" placeholder="Password" required>           
            </div><br><br>
            <div class="field">
               <input type="submit" value="Login" name="login">
            </div>
            <div class="signup-link">
               Belum punya akun? Registrasi <a href="proses-register.php">di sini</a>
            </div>
         </form>
      </div>
   
<style>
     @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: #6665ee;
  /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
}
::selection{
  background: #4158d0;
  color: #fff;
}
.wrapper{
  width: 380px;
  background: #fff;
  border-radius: 15px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: #fff;
  user-select: none;
  border-radius: 15px 15px 0 0;
  background: linear-gradient(-135deg, #c850c0, #4158d0);
}
.wrapper form{
  padding: 10px 30px 50px 30px;
}
.wrapper form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}
.wrapper form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
  border-color: #4158d0;
}
.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #999999;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #4158d0;
  background: #fff;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}
form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #262626;
  user-select: none;
  padding-left: 5px;
}
form .content .pass-link{
  color: "";
}
form .field input[type="submit"]{
  color: #fff;
  border: none;
  padding-left: 0;
  margin-top: -10px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  background: linear-gradient(-135deg, #c850c0, #4158d0);
  transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
  transform: scale(0.95);
}
form .signup-link{
  color: #262626;
  margin-top: 20px;
  text-align: center;
}
form .pass-link a,
form .signup-link a{
  color: #4158d0;
  text-decoration: none;
}
form .pass-link a:hover,
form .signup-link a:hover{
  text-decoration: underline;
}
      </style>

</body>
</html>