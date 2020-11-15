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

                <div class="container mt-3">
                    <h2 style="color: #1B809E!important">Invite Your firend and earn <span style="color: green"><strong>10%</strong></span> for life!</h2>
                    <div class="row">
                        <div class="col-lg-7 col-md-8 pasa">
                            <ul>
                                <li><i class="fa fa-check" style="float: left; font-size: 14px; color: green"></i> Invite Your firend and earn <span style=""><strong>10%</strong></span> for life!</li>
                                <li><i class="fa fa-check" style="float: left; font-size: 14px; color: green"></i> Referral earning will be<span style=""><strong>instanly</strong></span>credited</li>
                                <li><i class="fa fa-check" style="float: left; font-size: 14px; color: green"></i> <strong>Youtube</strong> and <strong>twitch</strong> channel are welcome</li>
                                <li><i class="fa fa-check" style="float: left; font-size: 14px; color: green"></i> The user must be <strong>new</strong> to our website</li>
                            </ul>
                        </div>
                        <div class="col-lg-5 col-md-4">
                            <img src="img/pasa.png">
                        </div>
                    </div>
                    <ul class="share_icon">
                        <li><i class="fa fa-twitter"></i></li>
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-google-plus"></i></li>
                        <li>asa</li>
                    </ul>

                    <span><strong>Your Invitation link</strong></span>
                    <input type="text" disabled class="form-control" value="https://bitcoins.com/?ref=v154f66">
                    <hr>
                    <h1>Invited Friends</h1>
                    <div class="alert alert-success">You have earned <strong><i src="img/points.ico">$0.00 points</strong> which equal to <strong>$0.00</strong></div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Users</th>
                                <th>Earned Points Since Invite</th>
                                <th>Your Earnings</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

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