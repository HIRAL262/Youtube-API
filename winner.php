<?php error_reporting(0); ?>
<?php include 'vendor/autoload.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.winner.card {
    padding-top: 20px;
    padding-bottom: 40px;
}

.col-app-container h2 {
    text-align: center;
}

.col-app-container p {
    text-align: center;
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

.site-content .ast-container {
    display: block;
    padding-top: 50px;

}

.col-app-container h2 {
    text-align: center;
    font-size: 23px;
    padding-top: 17px;
}

#titleDescID {
    width: 100%;
    margin: 10px;
    padding: 10px;
}

h3 {
    font-family: "Inter", Sans-serif;
    font-size: 2.5em;
    font-weight: 900;
    color: #000000;
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

.col-app-container {
    width: 100%;
    max-width: 470px;
    margin: 0 auto;
    border: 0 !important;
    box-shadow: 0 0 15px 3px rgba(0, 0, 0, .08);
    border-radius: 4px;
    padding: 9px 25px;
}

.card-header.gradient2 {
    border: 0 !important;
    padding: 9px 25px;
    background-color: #968791;
    color: #fff;
    border-radius: 8px 8px 0 0;
    /* background-image: -webkit-linear-gradient(0deg,#8a2091 0%,#ED2BA2 100%);*/
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

.award-img {
    text-align: center;
    margin-top: 20px;
}

.winner.card {
    padding-top: 20px;
}

.winner-sniff {
    background-image: url(https://kathux.com/wp-content/uploads/2023/09/124de3d1b5e12f1d8fcec1685e634361-1.gif)
}

div#titleDescID h3 {
    text-align: center;
    color: #b4b8c5;
    font-weight: 400;
    letter-spacing: 0;
    font-size: 1.5rem;
}

/* get certificate css */

.app-fixed-bottom {
    position: fixed;
    bottom: 0px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 999;
    padding-top: 170px;
    padding-bottom: 20px;
}

.btn {
    font-weight: 500;
    font-size: 14px;
    border-radius: 4px;
    padding: 8px 16px;
}

.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
}

.btn-cta-start {
    width: 100%;
    height: 57px;
    font-size: 23px;
}

.col-12.col-app-container-cert.app-fixed-bottom.d-flex.justify-content-center.flex-column {
    display: flex;
    flex-direction: column;
    max-width: 380px;
    width: 100%;
}

button.btn-cta-start.btn.btn-lga.btn-success.pt-2.pb-2 {
    width: 100%;
    height: 50px;
    font-size: 23px;
}

.btn-success:hover,
.btn-success:active {
    background-color: #72aa24;
    border-color: #72aa24;
    color: white;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>

<?php

if (isset($_POST['submit'])) {
    $numbss = $_POST['numbs'];
    $Substitutes = $_POST['Substitutes'];
    $dataYoutubeid = $_POST['id'];
    $imageupload = $_POST['imageupload'];
    $hashtag = $_POST['hashtags'];

}
?>
<button id="myButton" class="button">Go Back</button>

<script>
// Function to redirect to a specific page
function redirectToPage() {
    window.location.href = 'index.php';
}
document.getElementById('myButton').addEventListener('click', redirectToPage);
</script>

<div class="col-12 col-app-container-cert app-fixed-bottom d-flex justify-content-center flex-column">
    <button type="button" class="btn-cta-start btn btn-lga btn-success pt-2 pb-2">
        <span><i class="fa fa-calendar-check"></i> <strong>Get Certificate</strong></span>
    </button>
</div>

<!-- get random winner -->
<?php if (!empty($_POST["numbs"])) {?>
<div class="winner-sniff">
    <div id="titleDescID">
        <h3 style="text-align:center;">Winners</h3>

        <?php

        $apiKey = 'AIzaSyBlXGBGS6Qn1k7rOpwuQkR8QpueQV-_0nY';
        $videoId = $dataYoutubeid;

        //$numWinners = 2;

        // Initialize the Google Client
        $client = new Google_Client();
        $client->setApplicationName('YouTube Comment Picker');
        $client->setDeveloperKey($apiKey);

        // Initialize the YouTube service
        $youtube = new Google_Service_YouTube($client);

        $comments = [];
        $pageToken = '';
        do {
            $response = $youtube->commentThreads->listCommentThreads('snippet', ['videoId' => $videoId, 'pageToken' => $pageToken]);

            foreach ($response->getItems() as $commentThread) {
                $commentSnippet = $commentThread->getSnippet()->getTopLevelComment()->getSnippet();
                $comment = $commentSnippet->getTextDisplay();
                $authorName = $commentSnippet->getAuthorDisplayName();
                $authorImage = $commentSnippet->getAuthorProfileImageUrl();
                $comments[] = [
                    'comment' => $comment,
                    'authorName' => $authorName,
                    'authorImage' => $authorImage,
                ];
            }
            $pageToken = $response->getNextPageToken();
        }
        while ($pageToken);
        // Shuffle the comments randomly
        shuffle($comments);

        // Select one or two random winners $numbss for the random winner 1 like 2
        $winners = array_slice($comments, 0, $numbss);

        foreach ($winners as $winner) {

            // Output the winner
            echo '<div class="winner card">';
            echo '<div class="col-app-container">';
            echo '<div class="author-profile">';
            echo "<img src='{$winner['authorImage']}' alt='{$winner['authorName']}'>";
            echo '</div>';
            echo "<h2>{$winner['authorName']}</h2>";
            echo "<p>The winner is: {$winner['comment']}</p>";
            echo '<div class="award-img">
            <img src="https://ytubetool.com/assets/images/party_emoji.svg" alt="award" height="82px" width="82px"
            </div>';
            echo '</div>';
            echo '</div>';
        }
        }
        else{

        }
    ?>

    </div>
</div>

<!-- get random Substitutes -->
<?php if (!empty($_POST["Substitutes"])) {?>
<div class="winner-sniff">
    <div id="titleDescID">
        <h3 style="text-align:center;">Substitutes</h3>
        <?php

        $apiKey = 'AIzaSyBlXGBGS6Qn1k7rOpwuQkR8QpueQV-_0nY';
        $videoId = $dataYoutubeid;

        // Initialize the Google Client
        $client = new Google_Client();
        $client->setApplicationName('YouTube Comment Picker');
        $client->setDeveloperKey($apiKey);

        // Initialize the YouTube service
        $youtube = new Google_Service_YouTube($client);

        $comments = [];
        $pageToken = '';
        do {
            $response = $youtube->commentThreads->listCommentThreads('snippet', ['videoId' => $videoId, 'pageToken' => $pageToken]);

            foreach ($response->getItems() as $commentThread) {
                $commentSnippet = $commentThread->getSnippet()->getTopLevelComment()->getSnippet();
                $comment = $commentSnippet->getTextDisplay();
                $authorName = $commentSnippet->getAuthorDisplayName();
                $authorImage = $commentSnippet->getAuthorProfileImageUrl();
                $comments[] = [
                    'comment' => $comment,
                    'authorName' => $authorName,
                    'authorImage' => $authorImage,
                ];
            }
            $pageToken = $response->getNextPageToken();
        }
        while ($pageToken);
        // Shuffle the comments randomly
        shuffle($comments);

        // Select one or two random winners
        $winners = array_slice($comments, 0, $Substitutes);

        foreach ($winners as $winner) {

            // Output the winner
            echo '<div class="winner card">';
            echo '<div class="col-app-container">';
            echo '<div class="author-profile">';
            echo "<img src='{$winner['authorImage']}' alt='{$winner['authorName']}'>";
            echo '</div>';
            echo "<h2>{$winner['authorName']}</h2>";
            echo "<p>The Substitutes is: {$winner['comment']}</p>";
            echo '<div class="award-img">
            <img src="https://ytubetool.com/assets/images/party_emoji.svg" alt="award" height="82px" width="82px"
            </div>';
            echo '</div>';
            echo '</div>';
        }
    }
    else{

    }
    ?>
    </div>
</div>

<!-- get Filter By #Hashtags -->
<?php if (!empty($_POST["hashtags"])) {?>
<div class="winner-sniff">
    <div id="titleDescID">
        <h3 style="text-align:center;">Filter By #Hashtags</h3>
        <?php
        // Your YouTube API key
        $apiKey = 'AIzaSyBlXGBGS6Qn1k7rOpwuQkR8QpueQV-_0nY';

        // YouTube video ID
        $videoId = $dataYoutubeid; // Replace with the actual video ID

        // Get comments for the video
        $comments = getVideoComments($apiKey, $videoId);

        // Filter comments containing the hashtag
        $commentsWithHashtag = filterCommentsByHashtag($comments, $hashtag);

        // Check if there are any comments with the hashtag
        if (count($commentsWithHashtag) === 0) {
            echo "No comments found with the hashtag '$hashtag'.";
        } else {
            // Get the first random comment
            $randomIndex = array_rand($commentsWithHashtag);
            $firstRandomComment = $commentsWithHashtag[$randomIndex];

            // Display the first random comment
            $firstRandomAuthor = $firstRandomComment['authorName'];
            $firstRandomText = $firstRandomComment['commentText'];
            $authorimage = $firstRandomComment['authorImage'];
            echo '<div class="winner card">';
            echo '<div class="col-app-container">';
            echo '<div class="author-profile">';
           // echo "<img src= $authorimage />";
            echo "First Random Comment by: $firstRandomAuthor<br>";
            echo "Comment: $firstRandomText<br><br>";
            echo '</div>';
            echo '</div>';

        }
          }
    else{

    }
        function getVideoComments($apiKey, $videoId) {
            $url = "https://www.googleapis.com/youtube/v3/commentThreads?key=$apiKey&videoId=$videoId&part=snippet&maxResults=100";
            $response = file_get_contents($url);
            $data = json_decode($response, true);

            $comments = [];

            foreach ($data['items'] as $item) {
                $comment = $item['snippet']['topLevelComment']['snippet'];
                $authorName = $comment['authorDisplayName'];
                $commentText = $comment['textDisplay'];
                $comments[] = [
                    'authorName' => $authorName,
                    'commentText' => $commentText,
                ];
            }

            return $comments;
        }

        function filterCommentsByHashtag($comments, $hashtag) {
            $filteredComments = [];

            foreach ($comments as $comment) {
                if (strpos($comment['commentText'], $hashtag) !== false) {
                    $filteredComments[] = $comment;
                }
            }

            return $filteredComments;
        }

        ?>
    </div>
</div>