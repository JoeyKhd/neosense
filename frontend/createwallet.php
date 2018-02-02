<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEOSENSE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<?php include_once( 'components/header.php' );

use NeoPHP\NeoRPC;
use NeoPHP\NeoWallet;

$neo = new NeoRPC();

$neo->setNode( "http://seed5.neo.org:10332" );


//New wallet
//$newWallet = new NeoPHP\NeoWallet();
//print_r([
//"isNEP2" => (($newWallet->isNEP2()) ? "🔒" : "🚫" . '<br>'),
//"wif" => $newWallet->getWif() . '<br>',
//"ADDRESS" => $newWallet->getAddress() . '<br>',
//"PRIVATE KEY" => $newWallet->getPrivateKey() . '<br>',
//"PUBLIC_KEY" => $newWallet->getPublicKey()
//]);



if ( isset( $_POST ['submit'] ) ) {
    echo 'hi';
}


?>

<script>
    $(document).ready(function () {

        $("#open-modal").click(function () {
            $(".modal").addClass("is-active");
        });

        $(".close-modal").click(function () {
            $(".modal").removeClass("is-active");
        });

        $("#showpassword").click(function () {
            console.log('lol');
            $("#passwordIcon").removeClass("fa-eye");
            $("#passwordIcon").addClass("fa-eye-slash");
        });

        $(function() {
            $("#password_visibility").click(function(){
                var pass_input = document.getElementById("password_input");
                if (pass_input.type === "password") {
                    pass_input.type = "text";
                    $(this).toggleClass("fa-eye fa-eye-slash")
                } else {
                    pass_input.type = "password";
                    $(this).toggleClass("fa-eye-slash fa-eye")
                }
            });
        });

    });



</script>

<body>


<div class="hero-body">
    <div class="container has-text-centered">
        <div class="column is-6 is-offset-3">
            <h1 class="title">
                CREATE WALLET
            </h1>

            <h2 class="subtitle">
                Start receiving licenses today.
            </h2>

            <div class="content has-text-centered is-transparent">

                <div class="field">

                    <div class="field">
                        <form method="post">
                        <label class="label">Enter a Password</label>
                        <div class="control has-icons-right">
                            <input class="input has-text-centered" type="password" name="password" placeholder="Keep your password SAFE">

                            <span class="icon is-small is-right" id="showpassword">
      <i class="fas fa-eye" id="passwordIcon"></i>
    </span>

                        </div>
<!--                        <p class="help"><strong>Note:</strong> Losing your password is crucial.</p>-->
                    </div>

                    <button class="button is-neo" id="open-modal">
                        Create
                    </button>
                </div>

                <article class="message">
                    <div class="message-body">
                        <strong>Note:</strong>
                        Never disclose your private key to anyone. People asking you for your keys will try to scam you.
                        Neither NEO nor CoZ will ever ask you for any keys.
                    </div>
                </article>

            </div>

            <div class="modal">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Notice</p>
                        <button class="delete close-modal" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                        Watch out! Pirates ahead! ** DUMMY TEXT **
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-success" formaction="createdwallet.php" name="submit" type="submit">I am sure!</button>
                        <button class="button close-modal">Cancel</button>
                    </footer>
                </div>
            </div>
            </form>

                        <div class="has-text-centered">
                            Your address: <br><strong>
<!--			--><?php //print_r( $newWallet->getAddress() ); ?><!--</strong> <br>-->
                            Your private key: <strong>
<!--			--><?php //print_r( $newWallet->getPrivateKey() ); ?><!--</strong><br>-->
                        </div>
                        <br>
                        Note: NEVER share your private key with anyone.
                        <a href="paperwallet.php">Print Paper Wallet</a>
        </div>
    </div>

</div>
</body>

<?php include_once( 'components/footer.php' ); ?>

</html>