<?php

require($_SERVER['DOCUMENT_ROOT'] . "/bean-and-brew/src/components/header.php" )

?>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/bean-and-brew/src/components/navbar.php") ?>
    <div class="pt-3">
        <h1 class="heading">Welcome to Bean and Brew</h1>
        <!-- Summary of the company
             used instead of a dedicated about page as that is 
             not important -->
        <div class="py-4">
            <p>One of the first companies in the UK to use fair-trade
                coffee and all organic milk in our products</p>
            <a href="#">Click here for more</a>
        </div>

        <!-- hero image -->
        <div class="flex justify-center mt-10">
            <img class="hero" src="https://th.bing.com/th/id/OIP.OqsjLu-bSgkH01KnGM0XqAAAAA?w=226&h=151&c=7&r=0&o=5&pid=1.7" />
        </div>
    </div>

</body>
</html>
