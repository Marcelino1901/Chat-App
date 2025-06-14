<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Marcelino Chat App</header>
            <form action="#" autocomplete="off">
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter Your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter Your Password">
                    <img src="image/eye.png">
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup Now</a></div>
        </section>
    </div>
<script src="javascript/pass-show-hide.js"></script>   
<script src="javascript/login.js"></script>   
</body>
</html>