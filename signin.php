<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewPoint" content="width=device-width ">
    <title>Food Court | Welcome</title>
    <link rel="stylesheet" href="./style1.css">
    <script>
        function checkmob() {
            val=document.getElementById("MN").value;
            val2=Number(val);
            pattern=/^[0-9]+$/
            if(val.length<=10 || val.length>=12 || (!val.match(pattern)))
            {
                    document.getElementById("MN").style.backgroundColor = "red";
                    // document.getElementById("MN").value="invalid";
                    document.getElementById("vis1").style.visibility="visible";

            }
            else
            {
                document.getElementById("MN").style.backgroundColor="white";
                document.getElementById("vis1").style.visibility="hidden";
            }
        }
        function checkname() {
            val=document.getElementById("FN").value;
            pattern= /^[a-z A-Z]+$/;
            if((!val.match(pattern)))
            {
              //  alert("any");
                document.getElementById("FN").style.backgroundColor="red";
               // document.getElementById("NM").value="invalid";
                document.getElementById("vis").style.visibility="visible";

            }
            else
            {
                document.getElementById("FN").style.backgroundColor="White";
                // document.getElementById("NM").value="invalid";
                document.getElementById("vis").style.visibility="hidden";

            }

        }
        function checkpin() {
            val=document.getElementById("PC").value;
           // val2=Number(val);
            if(val<0 || val>999999)
            {

                document.getElementById("PC").style.backgroundColor="red";
              //  document.getElementById("PC").value="invalid";
                document.getElementById("vis6").style.visibility="visible";
            }
            else
            {
                document.getElementById("vis6").style.visibility="hidden";
                document.getElementById("PC").style.backgroundColor="white";
            }

        }
        function clear(x) {
          alert (x);
            document.getElementById("x").style.backgroundColor="white";
            document.getElementById("x").value="";
        }
        function checkmail() {

            x=document.getElementById("ID").value;
            pattern=/^[a-z 0-9 A-Z]+[@][a-z]+[.com]$/
          //  document.getElementById("ID").value=val;

     var atpos = x.indexOf("@");
     var dotpos = x.lastIndexOf(".");
     if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {

      document.getElementById("ID").style.backgroundColor="red";
      document.getElementById("vis2").style.visibility="visible";

     }
     else {
       document.getElementById("ID").style.backgroundColor="white";
       document.getElementById("vis2").style.visibility="hidden";

     }
        }
        function checkpass() {
            val=document.getElementById("PS").value;
            val2=document.getElementById("RPS").value;
            if(val==val2)
            {
                document.getElementById("vis7").style.visibility="hidden";
                document.getElementById("PS").style.backgroundColor="white";
                document.getElementById("RPS").style.backgroundColor="white";
            }
            else
            {
                 document.getElementById("PS").style.backgroundColor="red";
                document.getElementById("RPS").style.backgroundColor="red";
                document.getElementById("vis7").style.visibility="visible";
              //  document.getElementById("vis8").style.visibility="visible";
            }

        }

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

    <section id="showcase">
        <div class="container">
            <div id="signin">
                <form id ="form2"  action="signindb.php" method="post">
                <h2>Sign <span class="sty">In</span></h2>
                <hr>
                <table>
                    <tr>
                        <td>
                            <span class="sty">F</span>ull <span class="sty">N</span>ame:</td>
                        <td>
                            <input type="text" name="Name" id="FN" onblur="checkname();">
                        </td>
                        <td>
                            <span id="vis">Enter valid name only characters</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="sty">M</span>obile <span class="sty">N</span>umber</td>
                        <td>
                            <input type="text" name="Mobile" id="MN" onfocus="clear(MN)" onblur="checkmob()"  required>

                        </td>
                        <td>
                            <span id="vis1">Enter valid Mobile number</span>
                        </td>


                    </tr>
                    <tr>
                        <td><span class="sty">E</span>nter <span class="sty">E</span>mail Id:</td></td>

                        <td ><input type="email" name="Email" id="ID" onfocus="clear(ID)" onblur="checkmail()" required></td>
                        <td>
                            <span id="vis2">Enter the Email ID</span>
                        </td>

                    </tr>

                    <tr>
                        <td><span class="sty">H</span>ome <span class="sty">A</span>ddress</td></td>
                        <td ><input type="text" name="Address" id="AD"   required></td>
                        <td>
                            <span id="vis3">Enter the Address</span>
                        </td>
                    </tr>

                    <tr>
                        <td><span class="sty">A</span>ge <span class="sty"></span></td></td>
                        <td ><input type="number" name="Age" id="AG"  required></td>
                        <td>
                            <span id="vis4">Enter the Age</span>
                        </td>
                    </tr>

                    <tr>
                        <td><span class="sty">D</span>OB <span class="sty"></span></td></td>
                        <td ><input type="date" name="DOB" id="DOB"  required></td>
                        <td>
                            <span id="vis5">Enter the DOB</span>
                        </td>
                    </tr>

                    <tr>
                        <td><span class="sty">P</span>in <span class="sty">C</span>ode</td></td>
                        <td ><input type="number" name="PinCode" id="PC" onfocus="clear()" onblur="checkpin()" required></td>
                        <td>
                            <span id="vis6">Enter a valid Pin Number</span>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="sty">P</span>ass<span class="sty">W</span>ord</td></td>
                        <td ><input type="text" name="pass" id="PS"  required></td>
                        <td>
                            <span id="vis7">The Password doesn't match</span>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="sty">R</span>ePass<span class="sty">W</span>ord</td></td>
                        <td ><input type="text" name="repass" id="RPS" onfocus="clear()" onblur="checkpass()" required></td>
                        <td>

                        </td>
                    </tr>



                </table>
                    <button type="submit"  id="subbut"> Submit</button>
                </form>

            </div>

        </div>
        </div>
    </section>
    <section id="new">
        <div class="container">
            <h1>
                Enter your Login Credentials
            </h1>




        </div>
    </section>

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
