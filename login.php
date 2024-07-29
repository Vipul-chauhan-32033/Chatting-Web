<?php
include_once "header.php";
?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>What's up Friend!</header>
            <form action="#">
                <div class="error-txt" style="display:none"></div>
                
                <div class="field input">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email" placeholder="Enter your Email">
                </div>
                <div class="field input">
                    <label for="psw">Password</label>
                    <input type="password" name="psw" id="psw" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                </div>
                
                <div class="field button">
                    <input type="submit" name="submit" value="Continue To Chat">
                </div>
                <div class="link">Not yet Signup? <a href="index.php">Signup Now</a></div>
            </form>
        </section>
    </div>
    <script src="js/pass_show_hide.js"></script>
    <script src="js/login.js"></script>

</body>

</html>