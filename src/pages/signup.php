<?php

require($_SERVER['DOCUMENT_ROOT'] . "/bean-and-brew/src/components/header.php" )

?>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/bean-and-brew/src/components/navbar.php") ?>
    <h1 class="heading">Create an Account</h1>   

    <div class="w-full max-w-xs mx-auto pt-3">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="../includes/signup.inc.php" method="post">
        <div class="mb-4">
        <label class="form-label" for="email">
            Email
        </label>
        <input class="form-input" id="email" type="email" placeholder="name@beanandbrew.com" required>
        </div>
        <div class="mb-6">
        <label class="form-label" for="password">
            Password
        </label>
        <input class="form-input" id="password" type="password" placeholder="******************" required>
        <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
        </div>
        <div class="flex items-center justify-between">
        <button class="submit-button" type="submit">
            Sign Up
        </button>
        <!-- takes the user back to the login page if they want to sign in 
             to an account that already exists -->
        <a class="inline-block align-baseline font-bold text-sm text-cyan-900 hover:text-cyan-950" href="login.php">
            Log In
        </a>
        </div>
    </form>
    </div>

</body>
</html>
