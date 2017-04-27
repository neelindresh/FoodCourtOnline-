<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewPoint" content="width=device-width ">
    <title>Food Court | Welcome</title>
    <link rel="stylesheet" href="./style1.css">
    <script>
        /*function check() {
           str= document.getElementById("uid").value;
            neel= document.getElementById("pass").value;
           if(str.length>5 || neel.length>10 )
           {
               document.getElementById("uid").style.borderColor="red";
               document.getElementById("pass").style.borderColor="red";
              //  visi("The User Id exceeds max value")
               alert("User Id or Password exceeds Max Characters");
           }
        }*/
    </script>
</head>
<body>
<header>
    <div class="container">
        <div id="branding">
            <h1><span class="highlight">VIT </span> food Court</h1>
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
<form id ="form1" action="loginok.php" method="post">
<section id="showcase">
    <div class="container">
        <div id="login">
            <h2>Login</h2>
            <hr>
        <table>
            <tr>
                <td>
                    <span class="sty">E</span>nter <span class="sty">U</span>ser Id:</td>
                <td>
                    <input type="text" id="uid" name="name" required>
                </td>
                <td>
                    <p></p>
                </td>
            </tr>
                <tr>
          <td>
              <span class="sty">E</span>nter <span class="sty">P</span>assword:</td>
            <td>
                <input type="password" id="pass" name="pass" required>
            </td>
                </tr>
            <tr>
                <td></td>
                <td ></td>
            </tr>
            </table>


        </div>

        </div>
    </div>
</section>
<section id="new">
    <div class="container">
        <h1>
            Enter your Login Credentials
        </h1>


             <button type="submit" class="button1" onclick="check()">Login</button>

    </div>
</section>
</form>
<section id="boxes">
    <div class="container">
        <div class="box">
            <img src="http://szaboka.com/wp-content/uploads/2012/03/001-Coffee-550x275.jpg">
            <h3>SPONSORS</h3>
            <p> Coffee is one of the most popular drinks in the world.</p>
        </div>
        <div class="box">
            <img src="https://s-media-cache-ak0.pinimg.com/originals/a3/5d/67/a35d674beab4857b871f6aed07fe8f3f.jpg">
            <h3>Advertising Agencies</h3>
            <p> Coffee is one of the most popular drinks in the world.</p>
        </div>
        <div class="box">
            <img src="http://www.problogdesign.com/wp-content/uploads/2009/08/1.jpg">
            <h3>Partners</h3>
            <p> Coffee is one of the most popular drinks in the world.</p>
        </div>
    </div>

</section>
<footer>
    <p>Food Court Design,Copy right &copy; 2017</p>
</footer>
</body>
</html>
