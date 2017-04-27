<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewPoint" content="width=device-width ">
    <title>Food Court | Welcome</title>
    <link rel="stylesheet" href="./style1.css">
    <?php
    session_start();


     ?>
</head>
<body>
<header>
    <div class="container">
        <div id="branding">
            <h1><span class="highliht">VIT </span> food Court</h1>
        </div>
        <nav>
            <ul>
                <li class="current">
                    <a href="index1.php">Home</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
                <li>
                    <a href="signin.php">Sign in</a>
                </li>
                <li>
                    <a href="services.php">Services</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<section class="letter">
    <div class="container">
        <center><h1>
            Select The Menu of your Choice <?php echo $_SESSION['name']; ?>
        </h1></center>




    </div>
</section>

<section id="food">
    <div class="container">
        <div id="chkcontainer">
          <form action="bill.php" method="get">
        <table>

            <tr>


              <td><input type="checkbox" value="mcveggi" name="food[]"><img src="images/cafe1.jpg" alt="content image" height=105px width=150px/></td>
                <td><input type="checkbox" value="cornburger" name="food[]"><img src="images/cafe2.jpg" alt="content image" height=105px width=150px/></td>
                <td><input type="checkbox" value="lavaicecream" name="food[]"><img src="images/cafe3.jpg" alt="content image" height=105px width=150px/></td>
                <td><input type="checkbox" value="chocosnadwich" name="food[]"><img src="images/cafe4.jpg" alt="content image" height=105px width=150px/></td>
            </tr>
            <tr>

                <td><input type="checkbox" value="darkcoffee" name="food[]"><img src="images/cafe5.jpg" alt="content image" height=105px width=150px/></td>
                <td><input type="checkbox" value="biscuit" name="food[]"><img src="images/cafe6.jpg" alt="content image" height=105px width=150px/></td>
                <td><input type="checkbox" value="lassi" name="food[]"><img src="images/cafe7.jpg" alt="content image" height=105px width=150px/></td>
                <td><input type="checkbox" value="fullmeal" name="food[]"><img src="images/cafe8.jpg" alt="content image" height=105px width=150px/></td>
            </tr>
            <tr>

                <td><input type="checkbox" value="frenchfry" name="food[]"><img src="images/cafe9.jpg" alt="content image" height=105px width=150px/></td>
                <td><input type="checkbox" value="grillsand" name="food[]"><img src="images/cafe10.jpg" alt="content image" heigh=105px width=150px/></td>
                <td><input type="checkbox" value="tripleburger" name="food[]"><img src="images/cafe11.jpg" alt="content image" heigh=105px width=150px/></td>
                <td><input type="checkbox" value="breaddonat" name="food[]"><img src="images/cafe12.jpg" alt="content image" heigh=105px width=150px/></td>
            </tr>
            <tr>

                <td><input type="checkbox" value="donat" name="food[]"><img src="images/cafe13.jpg" alt="content image" heigh=105px width=150px/></td>
                <td><input type="checkbox" value="combomeal" name="food[]"><img src="images/cafe14.jpg" alt="content image" heigh=105px width=150px/></td>
                <td><input type="checkbox" value="chickenburger" name="food[]"><img src="images/cafe15.jpg" alt="content image" heigh=105px width=150px/></td>
            </tr>

        </table>
            <section id="button10">
                <div class="container">

                    <input type="submit" name="bt1" value="SUBMIT" class="button1">
                </div>
              </form>
            </section>
    </div>
    </div>
</section>
<section class="newsletter">
    <div class="container">
        <h1>
            Subscribe To Our NewsLetters
        </h1>
        <form>
            <input type="email"  placeholder="Enter your Email Id" id="servisemail" required>
            <button type="submit" class="button1">Subscribe</button>
        </form>
    </div>
</section>


<section id="boxes">
    <div class="container">
        <div class="box">
            <img src="images/cafe16.png" alt="content image" height=110px width=160px/>
            <h3>SPONSORS</h3>
            <p> </p>
        </div>
        <div class="box">
            <img src="images/cafe17.jpg" alt="content image" height=110px width=160px/>
            <h3>Advertising Agencies</h3>
            <p></p>
        </div>
        <div class="box">
            <img src="images/cafe18.gif" alt="content image" height=110px width=160px/>
            <h3>Partners</h3>
            <p></p>
        </div>
    </div>

</section>
<footer>
    <p>Food Court Design,Copy right &copy; 2017</p>
</footer>
</body>
</html>
