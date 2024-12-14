<?php
    $mfname = $mlname = $mmno = $mdob = $mg = $memail = $mpassword = $mcity = "";
    $error = 0;
    if(isset($_POST["submit"]))
    {
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $mno=$_POST["mno"];
        $dob=$_POST["dob"];
        $g=$_POST["g"];
        $address=$_POST["address"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $city=$_POST["city"];

        if($fname=="")
        {
            $mfname = "Please Enter your First Name !!";
            $error++;
        }
        else{
            $fnames = "/^[A-Za-z]+$/";
            if(!preg_match($fnames,$fname))
            {
                $mfname = "Please Enter valid First Name !!";
                $error++;
            }
        }
        if($lname=="")
        {
            $mlname = "Please Enter your Last Name !!";
            $error++;
        }
        else{
            $lnames = "/^[A-Za-z]+$/";
            if(!preg_match($lnames,$lname))
            {
                $mlname = "Please Enter valid Last Name !!";
                $error++;
            }
        }
        if($mno=="")
        {
            $mmno = "Please Enter your Mobile Number !!";
            $error++;
        }
        else{
            $mnos = "/^[0-9]+$/";
            if(!preg_match($mnos,$mno))
            {
                $mmno = "Please Enter valid Mobile Number !!";
                $error++;
            }
        }
        if($dob=="")
        {
            $mdob = "Please Enter your Date of Birth !!";
            $error++;
        }
        if($g=="")
        {
            $mg = "Please Select your Gender !!";
            $error++;
        }
        if($email=="")
        {
            $memail = "Please Enter your E-mail Id !!";
            $error++;
        }
        else{
            $emails = "/^[a-z][0-9]@[a-z].[a-z]+$/";
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $memail = "Please Enter valid E-mail Id !!";
                $error++;
            }
        }
        if($password=="")
        {
            $mpassword = "Please Enter your Password !!";
            $error++;
        }
        else{
            $passwords = "/^[0-9]+$/";
            if(!preg_match($passwords,$password))
            {
                $mpassword = "Combination of [A-Z],[a-z] and [0-9] !!";
                $error++;
            }
        }
        if($city=="")
        {
            $mcity = "Please Enter your City !!";
            $error++;
        }
        else{
            $cities = "/^[A-Za-z]+$/";
            if(!preg_match($cities,$city))
            {
                $mcity = "Please Enter valid City Name !!";
                $error;
            }
        }

        if($error==0)
        {
            echo "<div class='success' id='s'>";
            echo "Registration Successfull"."<br>";
            echo "<input type='button' name='successok' value='OK' id='sok' class='successok'>";
            echo "</div>";
        }
        else{
            echo "<div class='unsuccess' id='u'>";
            echo "Registration Unsuccessfull"."<br>";
            echo "<input type='button' name='unsuccessok' value='OK' id='uok' class='unsuccessok'>";
            echo "</div>";
        }
    }
?>
<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="registration.css"></link>
    </head>
    <body class="registerbody">
        <form method="post">
            <label class="h1label">Registration Form</label>
            <div class="registerflex">
                <div class="imagediv">
                    <img src="registrationimage.jpg" class="rimage"></img>
                </div>
                <hr class="hr">
                <div class="mainform">
                
                    <div class="form1div">
                        
                        <label class="label">First Name <b class="red">*</b> </label><br>
                        <input type="text" name="fname" placeholder="Enter your Name" class="input">
                        <br><label class="red"><?php echo $mfname; ?></label>
                        <br>

                        <label class="label">Last name <b class="red">*</b> </label><br>
                        <input type="text" name="lname" placeholder="Enter your Surname"class="input">
                        <br><label class="red"><?php echo $mlname; ?></label>
                        <br>

                        <label class="label">Mobile No. <b class="red">*</b> </label><br>
                        <input type="text" name="mno" placeholder="Enter your Mobile Number"class="input">
                        <br><label class="red"><?php echo $mmno; ?></label>
                        <br>

                        <label class="label">Date of Birth <b class="red">*</b> </label><br>
                        <input type="date" name="dob" class="input">
                        <br><label class="red"><?php echo $mdob; ?></label>
                        <br>

                        <label class="label">Gender <b class="red">*</b> </label><br>
                        <input type="radio" name="g" value="Male" checked>Male
                        <input type="radio" name="g" value="Female">Female
                        <br><label class="red"><?php echo $mg; ?></label>
                        <br>

                    </div>
                        
                    <div class="form2div">
            
                        <label class="label">Address</label><br>
                        <input type="text" name="address" placeholder="Enter your Address"class="input">
                        <br><br>

                        <label class="label">E-mail <b class="red">*</b> </label><br>
                        <input type="text" name="email" placeholder="Ex - abc123@gmail.com" class="input">
                        <br><label class="red"><?php echo $memail; ?></label>
                        <br>

                        <label class="label">Password <b class="red">*</b> </label><br>
                        <input type="password" name="password" placeholder="Enter your Password"class="input">
                        <br><label class="red"><?php echo $mpassword; ?></label>
                        <br>

                        <label class="label">City <b class="red">*</b> </label><br>
                        <input type="text" name="city" placeholder="Enter your City"class="input">
                        <br><label class="red"><?php echo $mcity; ?></label><br>
                        
                        <input type="submit" name="submit" value="Submit" id="sub" class="submit"> <input type="reset" value="Reset" class="reset"><br>
                    </div>
                </div>
            </div>
            <label class="signinlabel">you already have an Account? Then, <a class="signinlink" href="login.php">Sign in</a></label>
        </form>
    </body>
</html>