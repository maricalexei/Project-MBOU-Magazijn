<header id="header">
    <nav class="navbar navbar-expand-lg  navbar-light bg-light" style="background: white">
    <a class="navbar-brand" href="#">
      <img src="./img/mbologo.png" alt="" width="100" height="70" class="d-inline-block align-text-top">
    </a>
        <a href="index.php" class="navbar-brand">
            <h3 class="px-5" style="color:black">
               Home
            </h3>
        </a>
        <a href="article.php" class="navbar-brand">
            <h3 class="px-5" style="color:black">
               Artikles
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart" style="color:black">
                        <i class="fas fa-shopping-cart"></i>
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-dark\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5> 
                </a>
            </div>
        </div>

    </nav>
</header>