<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Call API for Youtube">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Hiral Solanki">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube Api!</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>

<body>

    <div class="new-section">
        <div class="elementor-column">
            <div>
                <div class="elementor-element">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-box-icon"><span class="elementor-icon elementor-animation-"><i
                                    aria-hidden="true" class="fa fa-youtube"></i></span></div>
                        <div class="elementor-icon-box-content">
                            <h3 class="elementor-icon-box-title"><span>Youtube Comment Picker</span></h3>
                            <p class="elementor-icon-box-description">Pick random comments from Youtube videos with this Youtube Giveaway picker.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <section class="firts">
            <div id="divID" class="container-class">
                <?php  // $url = site_url( '/app/', 'https' ); ?>

                <form method="post" action="app.php" enctype="multipart/form-data">
                    <input class="input-class" type="text" name="url" placeholder="Enter your YouTube URL"><br />
                    <br />
                    <input class="submit-class" type="submit" name="submit" value="Start">
                </form>
            </div>
        </section>
    </div>

</body>

</html>