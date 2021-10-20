<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form - OOPS PHP - Dani Krossing's Tutorials</title>
    <!-- <link rel="stylesheet" href="./styles/style.css"> -->
    <!-- <link rel="stylesheet" href="./styles/style2.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="app">
    <header class="header">
        <nav class="header__nav">
            <div class="header__menu">
                <nav class="navbar navbar-expand-sm bg-dark">
                    <h3 class="navbar-brand text-light">GOPESH SHARMA</h3>
                    <ul class="header__list navbar-nav">
                        <li class="nav-item"><a href="index.php" class="header__list--item nav-link text-light">HOME</a></li>
                        <li class="nav-item"><a href="#" class="header__list--item nav-link text-light">PRODUCTS</a></li>
                        <li class="nav-item"><a href="#" class="header__list--item nav-link text-light">CURRENT SALES</a></li>
                        <li class="nav-item"><a href="#" class="header__list--item nav-link text-light">MEMBER+</a></li>
                    </ul>

                    <ul class="menu-member navbar-nav ml-auto">
                        <?php
                        session_start();
                        //var_dump($_SESSION);
                        if (isset($_SESSION['useruid'])) {
                        ?>
                            <li class="nav-item"><a href="#" class="btn btn-outline-success">LOGOUT</a></li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item"><a href="#" class="nav-link text-light">SIGN UP</a></li>
                            <li class="nav-item"><a href="#" class="btn btn-outline-success">LOGIN</a></li>
                        <?php
                        }
                        session_unset();
                        ?>
                    </ul>

                </nav>

            </div>

        </nav>
    </header>

    <section>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p>PHP App - Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolore iusto placeat dolorum amet labore laboriosam dignissimos doloremque quaerat sed modi minima impedit commodi consequatur nemo quas, deserunt voluptatibus veritatis.</p>
                    </div>
                    <div class="col">
                        <h2>We make <br>professional <br>gear</h2>
                        <a href="#">FIND OUR GEAR HERE</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4>SIGN UP</h4>
                    <p>Don't have an account yet? Sign up here</p>
                    <form action="./includes/signup.inc.php" method="post">
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" name="uid" placeholder="Username" id="username" class="form-control mr-sm-2">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="pwd" placeholder="Password" id="password" class="form-control mr-sm-2">
                        </div>

                        <div class="form-group">
                            <label for="repeatpassword">Repeat Password</label>
                            <input type="password" name="pwdRepeat" placeholder="Repeat password" id="repeatpassword" class="form-control mr-sm-2">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" placeholder="E-mail" id="email" class="form-control mr-sm-2">
                        </div>
                        <button type="submit" name="submit" class="btn btn-block btn-primary">SIGN UP</button>
                    </form>
                </div>
                <div class="col-6">
                    <h4>LOGIN</h4>
                    <p>Don't have an account yet? Sign up here!</p>
                    <form action="./includes/login.inc.php" method="post">
                        <div class="form-group">
                            <label for="userid">Username / Email</label>
                            <input type="text" name="uid" placeholder="Username" id="userid" class="form-control mr-sm-2">
                        </div>
                        <div class="form-group">
                            <label for="loginpwd">Password</label>
                            <input type="password" name="pwd" id="loginpwd" placeholder="Password" class="form-control mr-sm-2">
                        </div>
                        <button type="submit" name="submit" class="btn btn-block btn-primary">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>