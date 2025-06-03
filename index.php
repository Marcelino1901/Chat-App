<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Marcelino Chat App</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name">
                    </div>
                </div>
                <div class="field input">
                    <label>Email ID</label>
                    <input type="text" name="email" placeholder="Enter Your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter new Password">
                    <img src="image/eye.png">
                </div>
                <div class="field image">
                    <label>Choose Profile Pic</label>
                    <input type="file" name="image">
                </div>
                <div class="field button">
                    <input type="submit" value="Start to Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login Now</a></div>
        </section>
    </div>
<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/signup.js"></script>
</body>
</html>