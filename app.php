<?php error_reporting(0); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.solanki {
    display: none;
}

label {
    font-family: sans-serif;
}

body {
    font-family: 'Roboto';
    font-size: 22px;
    background-color: #F3F5F8;
    line-height: 1.85714285714286;
    margin: 0;
    outline: 0;
    padding: 0;
}

.next-comm {
    overflow: scroll;
    height: 462px;
}

.comments_stats h5 {
    color: black;
    width: 100%;
    text-align: center;
}

.com img {
    border-radius: 50%;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-right: 3px;
}

.author-profile img {
    border-radius: 50px;
    border: 1px solid #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, .7);
}

.author-profile {
    text-align: center;
}

.comments {
    display: none;
}

.details-visible {
    display: block;
    /* padding-bottom: 30px; */
}

.site-content .ast-container {
    display: block;
    padding-top: 50px;

}

.col-app-container h2 {
    text-align: center;
    font-size: 23px;
    padding-top: 17px;
}

h2.elementor-heading-title.elementor-size-default {
    color: #000000;
    font-family: "Inter", Sans-serif;
    font-size: 46px;
    font-weight: 900;
    text-transform: none;
    font-style: normal;
    text-decoration: none;
    line-height: 1.1em;
    letter-spacing: 0px;
    word-spacing: 0px;
}

h3.elementor-heading-title.elementor-size-default {
    color: #000000;
    font-family: "Inter", Sans-serif;
    font-size: 26px;
    font-weight: 700;
}

.name {
    max-width: 100%;
    width: 1440px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    padding-top: 50px;
    padding-bottom: 50px;
}

input.submit-class {
    font-size: 16px;
    font-weight: 700;
    padding: 15px 30px;
    border-radius: 10px;
    border: 0;
    background-color: #d31c92;
    color: white;
}
input#hash-form {
    width: 335px;
}
textarea.form-control.form-control-lg {
    width: 335px;
}
textarea.form-control {
    width: 335px;
}
.thumbnail-class {
    width: 50%;
    margin: 10px;
    padding: 5px;
    border-radius: 1px;
}

section.firts {
    text-align: center;
}

#titleDescID {
    width: 100%;
    /* margin: 10px;
    padding: 10px; */
}

.container-class {
    border-radius: 2px;

    padding: 40px;
}

.input-class {
    width: 100%;
    border-radius: 2px;
    padding: 20px;
    border: #e9e9e9 1px solid;

}

input.input-class {
    border: 1px solid #c0c0cd;
    padding-left: 48px;
    border-radius: 10px;
    max-width: 41.666667%;
}

.submit-class {
    padding: 10px 20px;
    background: #000;
    color: #fff;
    font-size: 0.8em;
    width: 110px;
    border-radius: 4px;
    cursor: pointer;
    border: black 2px solid;
}

.hiral {
    width: 100%;
    max-width: 470px;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: 8px;
    padding: 1rem !important;
    background-color: #fff;
}

.hiral img {
    width: 100%;
    max-width: 100%;
    border-radius: 10px;
    object-fit: cover;
    height: 230px;
}

.hiral i {
    padding-left: 10px;
}

h3.elementor-icon-box-title {
    color: black !important;
}

.new-section.elementor-container.elementor-column-gap-default {
    padding: 80px 0px 50px 0px;
    background-color: #F3F5F8;
}

h3 {
    font-family: "Inter", Sans-serif;
    font-size: 2.5em;
    font-weight: 900;
    color: #000000;
}

.elementor-167 .elementor-element.elementor-element-640b8bb.elementor-view-stacked .elementor-icon {
    background-color: #F4E2E3 !important;
    fill: #CC181E !important;
    color: #CC181E !important;
}

.elementor-167 .elementor-element.elementor-element-640b8bb .elementor-icon {
    border-radius: 15px 15px 15px 15px !important;
}

span.elementor-icon.elementor-animation- {
    background-color: #F4E2E3 !important;
    fill: #CC181E;
    color: #CC181E;
    border-radius: 15px 15px 15px 15px;
}

.elementor-icon {
    line-height: 0;
}

.btn {
    font-weight: 500;
    font-size: 14px !important;
    border-radius: 4px;
    padding: 12px 16px;
    display: block;
    width: 100%;
    margin-top: 6px;
}

button.btn.btn-light.btn-block {
    border-width: 1px !important;
    background-color: #fff;
    border-color: #d2d6dc;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .05);
    color: #374151;
}

button.btn.btn-primary.btn-block.btn-bold.mb-1 {
    background-color: #d31c92;
    color: white;
}

.col-app-container {
    width: 100%;
    max-width: 504px;
    margin: 0 auto;
    border: 0 !important;
    /* box-shadow: 0 0 15px 3px rgba(0, 0, 0, .08); */
    border-radius: 4px;
    /* padding: 9px 25px; */
}

.card-header.gradient2 {
    border: 0 !important;
    padding: 9px 25px;
    background-color: #d31c92;
    color: #fff;
    border-radius: 8px 8px 0 0;
}

.card-header {
    font-weight: 700;
    font-size: 20px;
}

.comments_stats {
    color: #e2e2df;
    font-size: 15px;
    font-weight: 400;
    width: 100%;
    display: flex;
    border-top: 1px solid rgba(255, 255, 255, .1);
    padding-top: 6px;
    margin-top: 10px;
    text-transform: uppercase;
}

input.submit-class.btn.mt-5.mb-2.btn-lg.btn-block.btn-success {
    background-color: #85bf31;
    margin-top: 30px;
    margin-bottom: 10px;
}

/* winner css */
.award-img {
    text-align: center;
    margin-top: 20px;
}

.winner.card {
    padding-top: 20px;
}

.com img {
    border-radius: 50%;
    padding-top: 5px;
    padding-right: 3px;
}

.com img {
    width: 27px;
    margin-right: 3px;
    border-radius: 50%;
}

.com span {
    font-size: 15px;
    font-weight: 400;
}

.com {
    padding: 18px 22px;
    border: 1px solid rgba(0, 0, 0, .08);
}

button.btn.btn-comm.btn-block {
    font-weight: 600;
    font-size: 25px !important;
    background-color: #85be31;
    color: white;
}

@media (min-width: 320px) and (max-width: 480px) {
    input.input-class {
        max-width: 100%;
    }
}

/*settings form */
.card.borderless {
    border: 0 !important;
    box-shadow: 0 0 15px 3px rgba(0, 0, 0, .08);
}

/*.gradient2 {
    background-image: -webkit-linear-gradient(0deg,#8a2091 0%,#ED2BA2 100%);
}*/
.card {
    border-radius: 4px;
}

.options-btn {
    font-size: 23px;
    text-align: center;
    color: #fff;
    font-weight: 700;
    padding: 10px;
    cursor: pointer;
}

.card-body.py-3.px-4 {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    padding-right: 30px !important;
    padding-left: 1.5rem !important;
    padding-top: 20px;
}

.d-flex {
    display: -ms-flexbox !important;
    display: flex !important;
}

.flex-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
}

.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.col-12 {
    max-width: 100%;
}

.col-12 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

.form-row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}

.white-label {
    color: #fff;
    font-size: 19px;
    font-weight: 300;
    margin-bottom: 0;
}

.form-control {
    background-color: #fff;
    border-color: #d2d6dc;
    border-width: 1px;
    border-radius: 4px;
    padding: 0.5rem 0.75rem;
    box-shadow: none;
    font-size: 14px;
}

.mt-3,
.my-3 {
    margin-top: 1rem !important;
}

.col-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
    position: relative;
    width: 100%;
}

.col-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
}

.winners-count {
    position: relative;
    display: inline-block;
    /* right: 31px; */
}

.winners-count .form-control {
    font-size: 26px;
    font-weight: 700;
    text-align: center;
    max-width: 80px;
    min-width: 56px;
    padding: 0;
    height: 40px;
}

.winners-count .fa-chevron-up {
    top: -3px;
}

.winners-count .fa-chevron-up,
.winners-count .fa-chevron-down {
    position: absolute;
    right: -33px;
    font-size: 25px;
    color: #fff;
    cursor: pointer;
    z-index: 999;
}

.winners-count .fa-chevron-up.disabled,
.winners-count .fa-chevron-down.disabled {
    opacity: .4 !important;
    pointer-events: none !important;
}

.winners-count .fa-chevron-down {
    top: 21px;
}

.switcher span.value {
    color: #fff;
    margin-left: 7px;
    min-width: 23px;
    text-align: right;
}

.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
    margin-bottom: 0;
}

.col-app-container-part {
    width: 100%;
    max-width: 470px;
    margin: 0 auto;
}

.slider.round {
    border-radius: 34px;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
}

input[type=checkbox],
input[type=radio] {
    box-sizing: border-box;
    padding: 0;
}

.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: #fff;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider.round:before {
    border-radius: 50%;
}

.app-sorteos-pro {
    padding: 8px 0px 14px;
    color: #ffe46a;
    margin-top: 14px;
    border-bottom: 1px solid rgba(255, 255, 255, .1);
    display: block;
    width: 100%;
    font-size: 14px;
    font-weight: 700;
    margin-bottom: -4px;
}

.text-white {
    color: #fff !important;
    font-size: 80%;
    font-weight: 400;
}

.d-block {
    display: block;
}

.text-white {
    color: #fff !important;
}

.btn.btn-sm {
    padding: 5px 12px;
    font-size: 14px;
    border-radius: 4px;
}

.btn-secondary {
    background-color: #f4f4f4;
    border-color: #f4f4f4;
    color: var(--body-color);
}

.form-control-hidden-file {
    width: 0;
    height: 0;
    opacity: 0;
    position: absolute;
    overflow: hidden;
    padding: 0;
    border: 0;
}

.btn-light:after,
.btn-secondary:after {
    border-color: #6b6b6b rgb(0, 0, 0, .2) rgb(0, 0, 0, .2);
}

input.form-control.new {
    -webkit-appearance: none;
    width: 32px;
    height: 32px;
    border-radius: 3px;
    padding: 0;
    overflow: hidden;
    box-shadow: none;
    border: 1px solid rgba(255, 255, 255, .95);
    cursor: pointer;
}

.btn:after {
    border-style: solid;
    border-width: 2px;
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate3d(-50%, -50%, 0) rotate(0);
    opacity: 0;
    transition: opacity .15s ease;
    border-radius: 50%;
    width: 18px;
    height: 18px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;

}

.details-visible-time {
    display: block;
}

/*color code css*/
.brand-preset-colors>div {
    width: 28px;
    height: 28px;
    display: block;
    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, .95);
}

.brand-preset-colors>div:hover {
    opacity: .8;
    cursor: pointer;
}

.brand-preset-colors {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}

.brand-preset-colors {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}

input[type="color"] {
    width: 32px;
    height: 32px;
    border: 0;
    border-radius: 3px;
    padding: 0;
    overflow: hidden;
    box-shadow: none;
    border: 1px solid rgba(0, 0, 0, .2);
    cursor: pointer;
}

.countdown {
    font-size: 48px;
    font-weight: bold;
    color: #333;
}

button {
    font-size: 18px;
    padding: 10px 20px;
    margin: 10px;
}

/* checkbox yes no for show and hide box */
.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked+.slider {
    background-color: #e6c427;
}

input:focus+.slider {
    box-shadow: 0 0 1px #e6c427;
}

input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}

.container.text-center {
    text-align: center;
    padding-bottom: 30px;
    padding-top: 20px;
}

h3.app-hero-title {
    font-size: 35px;
    font-weight: 800;
}

.app-icon {
    background-color: #F4E2E3 !important;
    fill: #CC181E;
    color: #CC181E;
    border-radius: 15px 15px 15px 15px;
    font-size: 26px;
    width: 56px;
    height: 56px;
    min-width: 56px;
    align-items: center;
    justify-content: center;
    display: inline-flex;
}

div#col-12 {
    flex: 0 0 100%;
    max-width: 100%;
    position: relative;
    padding-right: 15px;
    width: 180px;
    padding-left: 15px;
    text-align: center;
    justify-content: center;
    margin: 0 auto;
    padding-top: 18px;
}

.image-preview-container {
    width: 100%;
    margin: 0 auto;
    border-radius: 20px;
}

.image-preview-container img {
    width: 100%;
    display: none;
    margin-bottom: 30px;
}

.image-preview-container input {
    display: none;
}

.image-preview-container label {
    display: block;
    width: 100%;
    height: 45px;
    /* margin-left: 25%; */
    text-align: center;
    background: white;
    color: #68778f;
    font-size: 14px !important;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>
var $ = jQuery;
$(document).ready(function() {
    $('.btn-primary').click(function() {
        //  alert("jQuery is working perfectly.");
        $('.comments').toggleClass('details-visible');
        jQuery('.solanki').toggleClass('details-visible');
    });
    $('.btn-winner').click(function() {
        $(".btn-winner").css('background', '#d31c92');
        $(".btn-winner").css('color', 'white');

        // alert("jQuery is working perfectly.");
        $('.winner').toggleClass('winner-visible');
    });

});
</script>

<div class="container text-center">
    <div class="app-icon"><span><i aria-hidden="true" class="fa fa-youtube"></i></span></div>
    <div class="elementor-icon-box-content">
        <h3 class="app-hero-title"><span>Youtube Comment Picker</span></h3>
    </div>
</div>

<?php
if (isset($_POST['submit'])) {
    $url = $_POST['url'];
    $vString = explode("v=", $url);
    $youtubeId = $vString[1];
}

$myApiKey = 'AIzaSyBlXGBGS6Qn1k7rOpwuQkR8QpueQV-_0nY';
$googleApi = 'https://www.googleapis.com/youtube/v3/videos?id=' . $youtubeId . '&key=' . $myApiKey . '&part=snippet';

$JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=statistics&id=" . $youtubeId . "&key=" . $myApiKey . "");
$JSON_Data = json_decode($JSON);
$views = $JSON_Data->items[0]->statistics->viewCount;
$commentCount = $JSON_Data->items[0]->statistics->commentCount;
$likeCount = $JSON_Data->items[0]->statistics->likeCount;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
/* Set the URL and options  */
curl_setopt($ch, CURLOPT_URL, $googleApi);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$curlResource = curl_exec($ch);
curl_close($ch);

$youtubeData = json_decode($curlResource);
$youtubeVals = json_decode(json_encode($youtubeData), true);

$thumbnailUrl = $youtubeVals['items'][0]['snippet']['thumbnails']['high']['url'];
$urlTitle = $youtubeVals['items'][0]['snippet']['title'];
$description = $youtubeVals['items'][0]['snippet']['description'];

if (isset($thumbnailUrl)) {
    echo '<div class="hiral">';
    echo '<img src="' . $thumbnailUrl . '" alt="Thumbnail">';
    echo '<br />';
}
if (isset($views)) {
    echo '<i class="fa fa-eye" style="font-size:20px"></i>';
    echo $views;
}
if (isset($commentCount)) {
    echo '<i class="fa fa-comment" style="font-size:20px"></i>';
    echo $commentCount;
}
if (isset($likeCount)) {
    echo '<i class="fa fa-thumbs-up" style="font-size:20px"></i>';
    echo $likeCount;
    echo '<br />';
    echo '<br />';
  //  $url = site_url('/api-youtube/', 'https');
    echo '<button class="btn btn-primary btn-block btn-bold mb-1">Load Comments</button>';
    echo ' <button class="btn btn-light btn-block"><a href= "index.php"?name=" . "' . $youtubeId . '" .>Back</a> </button>';
    echo '</div>';
}
?>

<div id="titleDescID">
    <div id="col-12">
        <div class="preview">
            <img id="preview-selected-image" />
        </div>
    </div>
</div>

<div class="solanki">
    <div class="col-app-container card borderless gradient2 small rounded-2 mb-4 mt-3"
        style="background-color: #d31c92;" id="myDiv">
        <div class="options-btn">Settings</div>
        <div class="card-body py-3 px-4">
            <div class="d-flex flex-column justify-content-center align-items-center pt-0 pb-0">
                <?php // $url = site_url('/winners/', 'http');  ?>
                <form method="post" action="winner.php" id=<?php echo $youtubeId ?> class="mt-0 mb-0"
                    style="width: 100%;">
                    <div class="row">

                        <div class="col-12">
                            <div class="form-row">
                                <div class="col-12 d-flex flex-column">
                                    <label class="white-label">Title</label>
                                    <input type="text" class="form-control form-control-lg" style="font-size: 14px;"
                                        value="<?php echo $urlTitle; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-row mt-3">
                                <div class="col-8 d-flex align-items-center">
                                    <label class="white-label"># Winners</label>
                                </div>
                                <div class="col-4 justify-content-end d-flex align-items-center">
                                    <div class="winners-count">
                                        <input type="hidden" name="id" value=<?php echo $youtubeId; ?> />
                                        <input type="number" min="1" max="15" class="form-control" name="numbs"
                                            placeholder="1" data-list=<?php echo $youtubeId; ?> id="user_input">
                                        <!-- <script type="text/javascript">
                                        $("input").click(function() {
                                            var fired_button = $(this).val();
                                           // alert(fired_button);
                                        });
                                        </script> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-row mt-3">
                                <div class="col-8 d-flex align-items-center">
                                    <label class="white-label"># Substitutes</label>
                                </div>
                                <div class="col-4 justify-content-end d-flex align-items-center">
                                    <div class="winners-count">
                                        <input type="hidden" name="id" value=<?php echo $youtubeId; ?> />
                                        <input type="number" min="1" max="15" class="form-control" name="Substitutes"
                                            placeholder="0">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-row mt-3">
                                <div class="col-8 d-flex align-items-center">
                                    <label class="white-label">Exclude Duplicates</label>
                                </div>
                                <div class="col-4 justify-content-end d-flex align-items-center switcher">
                                    <label class="switch">
                                        <input type="checkbox" id="duplicate">
                                        <span class="slider round"></span>
                                    </label>
                                    <span class="value" id="exclude">NO</span>
                                </div>
                            </div>
                        </div>
                        <script>
                        const Duplicates = document.getElementById("duplicate");

                        Duplicates.addEventListener("change", function() {
                            if (this.checked) {
                                var yesduplicate = "YES";
                                document.getElementById("exclude").innerHTML = yesduplicate;

                            } else {
                                var noduplicate = "NO";
                                document.getElementById("exclude").innerHTML = noduplicate;
                            }
                        });
                        </script>

                        <!---->
                        <div class="col-12">
                            <!---->
                        </div>
                        <div class="col-12">
                            <div class="form-row mt-3">
                                <div class="col-8 d-flex align-items-center">
                                    <label class="white-label">Filter by #Hashtag</label>
                                </div>
                                <div class="col-4 justify-content-end d-flex align-items-center switcher">
                                    <label class="switch">
                                        <input type="checkbox" id="checkbox"> <span class="slider round"></span></label>
                                    <span class="value" id="tag">NO</span>
                                </div>
                            </div>
                        </div>
                        <script>
                        const checkbox = document.getElementById("checkbox");

                        checkbox.addEventListener("change", function() {
                            if (this.checked) {
                                var number = "YES";
                                document.getElementById("tag").innerHTML = number;
                                var element = document.getElementById("hash-form");
                                element.style.display = "block";


                            } else {
                                var no = "NO";
                                document.getElementById("tag").innerHTML = no;
                                var element = document.getElementById("hash-form");
                                element.style.display = "none";
                            }
                        });
                        </script>

                        <div class="col-12">
                            <!---->
                            <div class="form-group mt-3 mb-3 bordeared">
                                <input type="text" id="hash-form" name="hashtags" placeholder="Write a #Hashtag"
                                    class="form-control form-control-lg" style="display:none;">
                            </div>
                        </div>

                        <div class="col-12">
                            <span class="app-sorteos-pro"><i class="fa fa-star mr-2"></i>AppSorteos PRO</span>
                        </div>
                        <!---->
                        <div class="col-12">
                            <!---->
                        </div>

                        <div class="col-12">
                            <div class="form-row mt-3">
                                <div class="col-8 d-flex align-items-center">
                                    <label class="white-label">Bonus &amp; Extra Chances</label>
                                </div>
                                <div class="col-4 justify-content-end d-flex align-items-center switcher">
                                    <label class="switch"><input type="checkbox" id="bonus-app"> <span
                                            class="slider round"></span></label>
                                    <span class="value" id="bonus">NO</span>
                                </div>
                            </div>
                        </div>
                        <script>
                        const bonus = document.getElementById("bonus-app");

                        bonus.addEventListener("change", function() {
                            if (this.checked) {
                                var bonusyes = "YES";
                                document.getElementById("bonus").innerHTML = bonusyes;
                                var element = document.getElementById("bonus-text");
                                element.style.display = "block";


                            } else {
                                var bonusno = "NO";
                                document.getElementById("bonus").innerHTML = bonusno;
                                var element = document.getElementById("bonus-text");
                                element.style.display = "none";
                            }
                        });
                        </script>

                        <div class="col-12">
                            <!---->
                            <div class="form-group mt-3 mb-3 bordeared" style="display:none;" id="bonus-text">
                                <textarea type="text" rows="5" placeholder="Each name must be on a new line"
                                    class="form-control form-control-lg" style="font-size: 13px;"></textarea>
                                <p class="text-white px-2 pt-1">Manually enter new participants or extra chances by
                                    Stories</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-row mt-3">
                                <div class="col-8 d-flex align-items-center">
                                    <label class="white-label">Block List</label>
                                </div>
                                <div class="col-4 justify-content-end d-flex align-items-center switcher">
                                    <label class="switch">
                                        <input type="checkbox" id="block-check">
                                        <span class="slider round"></span></label>
                                    <span class="value" id="bonuss">NO</span>
                                </div>
                            </div>
                        </div>
                        <script>
                        const blocklist = document.getElementById("block-check");

                        blocklist.addEventListener("change", function() {
                            if (this.checked) {
                                var blockyes = "YES";
                                document.getElementById("bonuss").innerHTML = blockyes;
                                var element = document.getElementById("block-text");
                                element.style.display = "block";


                            } else {
                                var blockno = "NO";
                                document.getElementById("bonuss").innerHTML = blockno;
                                var element = document.getElementById("block-text");
                                element.style.display = "none";
                            }
                        });
                        </script>


                        <div class="col-12">
                            <!---->
                            <div class="form-group mt-3 mb-3 bordeared" style="display:none;" id="block-text">
                                <textarea type="text" rows="5" placeholder="Each name must be on a new line"
                                    class="form-control" style="font-size: 13px;"></textarea>
                                <p class="text-white px-2 pt-1">Exclude users from the list of comments / participants
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-row mt-3">
                                <div class="col-8 d-flex align-items-center">
                                    <label class="white-label">Countdown</label>
                                </div>
                                <div class="col-4 justify-content-end d-flex align-items-center">
                                    <div class="winners-count noselect">
                                        <input type="number" min="6" max="999" class="form-control" placeholder="5">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <span class="app-sorteos-pro"><i class="fa fa-palette mr-2"></i>Brand Identity</span>
                        </div>
                        <div class="col-12">
                            <div class="form-row mt-3">
                                <div class="col-8 d-flex d-flex flex-column">
                                    <label class="white-label">Logo</label>
                                    <span class="d-block text-white" style="opacity: 0.9;">Recommended size (180 x
                                        50px)</span>
                                </div>
                                <div class="col-4 justify-content-end d-flex align-items-center">
                                    <div class="image-preview-container">
                                        <label for="file-upload">Upload </label>
                                        <input type="file" id="file-upload" accept="image/*" name="imageupload"
                                            onchange="previewImage(event);" />
                                    </div>
                                </div>


                                <script>
                                const previewImage = (event) => {

                                    const imageFiles = event.target.files;

                                    const imageFilesLength = imageFiles.length;
                                    /**
                                     * If at least one image is selected, then proceed to display the preview.
                                     */
                                    if (imageFilesLength > 0) {
                                        /**
                                         * Get the image path.
                                         */
                                        const imageSrc = URL.createObjectURL(imageFiles[0]);
                                        /**
                                         * Select the image preview element.
                                         */
                                        const imagePreviewElement = document.querySelector(
                                            "#preview-selected-image");
                                        /**
                                         * Assign the path to the image preview element.
                                         */
                                        imagePreviewElement.src = imageSrc;
                                        /**
                                         * Show the element by changing the display value to "block".
                                         */
                                        imagePreviewElement.style.display = "block";
                                    }
                                };
                                </script>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-row mt-3">
                                <div class="col-8 d-flex align-items-center">
                                    <label class="white-label">Main Color</label>
                                </div>
                                <div class="col-4 justify-content-end d-flex align-items-center">
                                    <input id="colorInput" type="color">

                                    <script>
                                    let colorInput = document.getElementById('colorInput');
                                    // Get the div element by its id
                                    var myDiv = document.getElementById("myDiv");
                                    // Whenever the user changes the color, the input event will be called.
                                    colorInput.addEventListener('input', () => {
                                        // document.body.style.backgroundColor = colorInput.value;
                                        myDiv.style.backgroundColor = colorInput.value;
                                    });
                                    </script>
                                    <!--
                                    <input type="color" class="form-control new">
                                    <script type="text/javascript" defer>
                                    var $ = jQuery;
                                    $(document).ready(function() {
                                        $('div').click(function() {
                                            var bodyColor = $(this).attr("style");
                                            // $(".new").attr("style", bodyColor);
                                        });
                                    });
                                    </script> -->
                                    <script>
                                    var $ = jQuery;

                                    $(document).ready(function() {

                                        // Click event handler for the button
                                        $('div').click(function() {

                                            var bodyColor = $(this).attr("style");
                                            $(".gradient2").attr("style", bodyColor);

                                        });
                                    });
                                    </script>

                                </div>

                                <div class="col-12">
                                    <div class="brand-preset-colors">
                                        <div style="background-color: rgb(138, 32, 145);"></div>
                                        <div style="background-color: rgb(214, 54, 54);"></div>
                                        <div style="background-color: rgb(255, 87, 88);"></div>
                                        <div style="background-color: rgb(203, 108, 230);"></div>
                                        <div style="background-color: rgb(79, 35, 82);"></div>
                                        <div style="background-color: rgb(82, 114, 255);"></div>
                                        <div style="background-color: rgb(94, 23, 236);"></div>
                                        <div style="background-color: rgb(122, 143, 146);"></div>
                                        <div style="background-color: rgb(255, 145, 77);"></div>
                                        <div style="background-color: rgb(0, 128, 55);"></div>
                                        <div style="background-color: rgb(79, 169, 39);"></div>
                                        <div style="background-color: rgb(195, 159, 7);"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <input class="submit-class btn mt-5 mb-2 btn-lg btn-block btn-success" type="submit"
                                name="submit" value="Confirm">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- get random winner -->
<div class="winns">
    <div id="titleDescID">
        <?php

        // $apiKey = 'AIzaSyBlXGBGS6Qn1k7rOpwuQkR8QpueQV-_0nY';
        // $videoId = $youtubeId;
        // $numWinners = 2;

        // // Initialize the Google Client
        // $client = new Google_Client();
        // $client->setApplicationName('YouTube Comment Picker');
        // $client->setDeveloperKey($apiKey);

        // // Initialize the YouTube service
        // $youtube = new Google_Service_YouTube($client);

        // $comments = [];
        // $pageToken = '';
        // do {
        //     $response = $youtube->commentThreads->listCommentThreads('snippet', ['videoId' => $videoId, 'pageToken' => $pageToken]);

        //     foreach ($response->getItems() as $commentThread) {
        //         $commentSnippet = $commentThread->getSnippet()->getTopLevelComment()->getSnippet();
        //         $comment = $commentSnippet->getTextDisplay();
        //         $authorName = $commentSnippet->getAuthorDisplayName();
        //         $authorImage = $commentSnippet->getAuthorProfileImageUrl();
        //         $comments[] = [
        //             'comment' => $comment,
        //             'authorName' => $authorName,
        //             'authorImage' => $authorImage,
        //         ];
        //     }
        //     $pageToken = $response->getNextPageToken();
        // }
        // while ($pageToken);
        // // Shuffle the comments randomly
        // shuffle($comments);

        // // Select one or two random winners
        // $winners = array_slice($comments, 0, $numbss);

        // // Output the winner details
        // echo "<h2>The Winner(s) /are:</h2>";

        // foreach ($winners as $winner) {

        //     // Output the winner
        //     echo '<div class="winner card">';
        //     echo '<div class="col-app-container">';
        //     echo '<div class="author-profile">';
        //     echo "<img src='{$winner['authorImage']}' alt='{$winner['authorName']}'>";
        //     echo '</div>';
        //     echo "<h2>{$winner['authorName']}</h2>";
        //     echo "<p>The winner is: {$winner['comment']}</p>";
        //     echo '<div class="comments_stats">
        //              <h5>Total comments:  <i>' . $commentCount . ' </i> </h5>
        //             </div>';
        //     echo '<div class="award-img">
        //     <img src="https://ytubetool.com/assets/images/party_emoji.svg" alt="award" height="82px" width="82px"
        //     </div>';
        //     echo '</div>';
        //     echo '</div>';
       // }

        ?>

    </div>
</div>

<!--  get the new tab and list of commnet slike and views-->
<div class="comments">
    <div class="col-app-container-part"></br>
        <div class="card-header gradient2">Participants
            <div>
                <div class="comments_stats">
                    <?php echo '<span>Total:  <i>' . $commentCount . ' </i> </span>'; ?>
                </div>
            </div>
        </div>
        <div class="next-comm">
            <?php
            $url = $youtubeId; // Youtube video ID
            $ytkey = "AIzaSyBlXGBGS6Qn1k7rOpwuQkR8QpueQV-_0nY"; //"IzaSyBuu-rnbmPAj1DjR6WmyxGmpmQKz8aTXbw"  Your api key
            $nextPage = ""; // Next Page Token for get comments of next Page.
            $str = file_get_contents("https://www.googleapis.com/youtube/v3/commentThreads?key=" . "$ytkey" . "&textFormat=plainText&part=snippet&videoId=" . "$url" . "&maxResults=100&nextPagetoken=" . "$nextPage");
            $json = json_decode($str, true); // decode the JSON into an associative array
            $nextPage = $json['nextPageToken']; // Take token for next query

            foreach ($json['items'] as $val) { // Loop for list comments...
                $author = $val['snippet']['topLevelComment']['snippet']['authorDisplayName']; //Get Comment Author Name.
                //$author_url = $val['snippet']['topLevelComment']['snippet']['authorChannelUrl']; //Get Comment Author URL.
                $author_thumbnail_url = $val['snippet']['topLevelComment']['snippet']['authorProfileImageUrl']; //Get Comment Author Thumbnail URL.
                $comment = $val['snippet']['topLevelComment']['snippet']['textDisplay']; //Get Comment Content.
                echo "<div class='com'>";
                echo '<img src="' . $author_thumbnail_url . '">';
                echo "<span style='color:#d31c92';>" . "$author" . "</span>" . " : " . "$comment"; // Author and comment
                echo "</div>";
            }
            // echo "Process over. ";
            ?>
        </div>
    </div>
</div>
</div>
</section>