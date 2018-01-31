<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach(function ($el) {
                $el.addEventListener('click', function () {

                    // Get the target from the "data-target" attribute
                    var target = $el.dataset.target;
                    var $target = document.getElementById(target);

                    // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                    $el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });
</script>

<nav class="navbar is-transparent shadow-border-bottom">
    <div class="navbar-brand">
        <a class="navbar-item" href="./index.php">
            <img src="./img/logo.png" alt="logo-neosense">
        </a>
        <div class="navbar-burger burger" data-target="navbarMobile">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navbarMobile" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="./createwallet.php">
                Create Wallet
            </a>
            <a class="navbar-item" href="./mywallet.php">
                My Wallet
            </a>
            <a class="navbar-item" href="./explorer.php">
                Explorer
            </a>
        </div>
    </div>

</nav>
