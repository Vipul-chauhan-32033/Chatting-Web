<?php
include_once "header.php";
?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>What's up Friend!</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt" style="display:none"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" placeholder="Last Name">
                    </div>
                </div>
                <div class="field input">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email" placeholder="Enter Your Email">
                </div>
                <div class="field input">
                    <label for="psw">Password</label>
                    <input type="password" name="psw" id="psw" placeholder="Enter Your password">
                    <i class="fas fa-eye"></i>

                </div>
                <div class="field image">
                    <label for="img">Select An Image</label>
                    <input type="file" name="img" id="img">
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue...">
                </div>
                <div class="link">Already Signup? <a href="login.php">Login Now</a></div>
            </form>
        </section>
    </div>


    <script src="js/pass_show_hide.js"></script>
    <script src="js/signup.js"></script>

</body>

</html>