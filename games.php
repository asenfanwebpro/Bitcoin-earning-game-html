<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-signin-client_id" content="119702748407-6qp65bj46sm16g62bt6r48j6dtsgov79.apps.googleusercontent.com">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="emoji/lib/css/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>BitCoins</title>
</head>

<body>
    <?php include 'chat.php';?>
        <div id="mainn">
            <?php include 'includes/header.php' ?>

                <!--  -->
                <div class="container text-center mt-5">

                    <div class="row g_row">
                        <div class="col-lg-3 col-md-4 mt-2">
                            <div class="card ">
                                <div class="card-body">
                                    <span style="color: #337ab7">★ M4A4 | Asiimov (BitCoins)</span><img class="mx-auto my-2" src="img/game.jpg">

                                    <span style="color: #337ab7">SUGGESTED PRICE $3.44</span>

                                    <div class="dropdown-divider"></div>
                                    <span style="color: #337ab7">1200/1379</span>
                                    <br>
                                    <button type="button" style="border-radius: 0px" class="btn btn-danger btn-sm">Join Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="card g_con ">
                                <div class="card-body" style="padding:20px">
                                    <span class="ggray">FOLLOW <span style="color: #FF3E3E; margin-top: 10px;">@BitCoins</span> TO ENTER THE RAFFLE</span>
                                </div>
                            </div>
                            <div class="card g_con ">
                                <div class="card-body" style="padding:3px">
                                    <ul class="list-lots">
                                        <li>
                                            <!-- ngIf: !ticket.id --><a href="" style="color: white">209</a>
                                            <!-- end ngIf: !ticket.id -->
                                            <!-- ngIf: ticket.id -->
                                        </li>
                                        <?php
                $i = 1;
                  while($i<=50){
                    echo '<li><span class="extra-number">'.$i.'</span><img bn-lazy-src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/ff/ff795bb999bc7377a7a75bfc38de8ad54b9c99bd_full.jpg" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/ff/ff795bb999bc7377a7a75bfc38de8ad54b9c99bd_full.jpg"></li><li><span class="extra-number">'.$i.'</span><img bn-lazy-src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/f0/f0551139fd05fac997f116f561e8f0db1396f73a_full.jpg" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/f0/f0551139fd05fac997f116f561e8f0db1396f73a_full.jpg"></li>
                    ';
                    $i++;
                  }
                 ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->

                <?php include 'includes/footer.php' ?>

        </div>

        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=460357931140389&autoLogAppEvents=1"></script>
        <!-- Begin emoji-picker JavaScript -->
        <script src="emoji/lib/js/config.js"></script>
        <script src="emoji/lib/js/util.js"></script>
        <script src="emoji/lib/js/jquery.emojiarea.js"></script>
        <script src="emoji/lib/js/emoji-picker.js"></script>
        <!-- End emoji-picker JavaScript -->
        <!-- google login button -->
        <script>
            function onSuccess(googleUser) {
                console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
            }

            function onFailure(error) {
                console.log(error);
            }

            function renderButton() {
                gapi.signin2.render('my-signin2', {
                    'scope': 'profile email',
                    'width': 150,
                    'height': 30,
                    'longtitle': true,
                    'theme': 'dark',
                    'onsuccess': onSuccess,
                    'onfailure': onFailure
                });
            }
        </script>
        <!-- end google login button -->
        <!-- emoji -->
        <script>
            $(function() {
                // Initializes and creates emoji set from sprite sheet
                window.emojiPicker = new EmojiPicker({
                    emojiable_selector: '[data-emojiable=true]',
                    assetsPath: 'emoji/lib/img/',
                    popupButtonClasses: 'fa fa-smile-o'
                });
                // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
                // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
                // It can be called as many times as necessary; previously converted input fields will not be converted again
                window.emojiPicker.discover();
            });
        </script>


        <script src="js/javascript.js">
        </script>
</body>

</html>