<?php

// Test - using POST for add video record
if (isset($_GET['action']) && $_GET['action'] == 'curl') {

    $sUrl = "http://localhost:8080/php/api/service.php";
    $sData = 'title=TestVideo&action=add_video&type=html';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $sUrl);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $sData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $vRes = curl_exec($ch);
    curl_close($ch);

    header('Content-Type: text/html');
    echo $vRes;
    exit;
}

?>
<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>Own XML/JSON/HTML API with PHP | Script Tutorials</title>

        <link href="css/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            <h2>Own XML/JSON/HTML API with PHP</h2>
            <a href="http://www.script-tutorials.com/own-xmljsonhtml-api-with-php/" class="stuts">Back to original tutorial on <span>Script Tutorials</span></a>
        </header>
        <div class="container">

            <div class="contr">
                <form action="service.php" target="results">
                    <label>Action: </label>
                    <select name="action">
                        <option value="last_videos">Last videos</option>
                        <option value="top_videos">Top videos</option>
                    </select>
                    <label>Limit: </label>
                    <select name="limit">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4" selected>4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                    <label>Method: </label>
                    <select name="type">
                        <option value="xml">XML</option>
                        <option value="json">JSON</option>
                        <option value="html">HTML</option>
                    </select>
                    <input type="submit" />
                </form>
                <a href="index.php?action=curl">Add video (CURL)</a>
            </div>

            <div>Results:</div>
            <iframe name="results" style="width:600px;height:400px">
            </iframe>
        </div>
    </body>
</html>