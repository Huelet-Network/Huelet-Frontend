<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Huelet.net</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <link href="https://ewr1.vultrobjects.com/assets-cssns/hamburger.css" rel="stylesheet">
    <link href="https://ewr1.vultrobjects.com/assets-cssns/nav.css" rel="stylesheet">
    <link href="/css/font.css" rel="stylesheet">
    <style>
        body{background-color:#181718}.h2-1{font-family:'Source Sans Pro',sans-serif;color:#fff;padding:15px}.video-holder{padding:60px}.following{padding:60px}.flex-parent{display:flex;flex-direction:row}.a-1{transition:.4s}.a-1:hover{color:#551a8b}.h2-2{color:#551a8b;font-family:'Source Sans Pro',sans-serif;font-weight:bolder;transition:.4s}.h2-2:hover{color:#fff;font-weight:lighter}.img-1{width:175px;height:160px;border-radius:50%}.p-1{color:#fff;font-family:'Segoe Light'}
    </style>
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"
        integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS"
        crossorigin="anonymous"></script>
<script type="text/javascript">
  window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=document.createElement("script");r.type="text/javascript",r.async=!0,r.src="https://cdn.heapanalytics.com/js/heap-"+e+".js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(r,a);for(var n=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","resetIdentity","removeEventProperty","setEventProperties","track","unsetEventProperty"],o=0;o<p.length;o++)heap[p[o]]=n(p[o])};
  heap.load("340507969");
</script>
<script>
    const timeElement = document.getElementById("timeOfDay");
    const currentTime = new Date().getHours();
    if (currentTime <= 12) {
        timeElement.innerHTML = " Morning!";
    } else if (currentTime > 12) {
        timeElement.innerHTML = " Afternoon!";
    } else if (currentTime > 15) {
        timeElement.innerHTML = " Evening!"
    }
</script>
</head>
<body>
    <?php
    include_once 'header.php';
    ?>
    <div class="flex-parent">
    <img src="https://statichost.azureedge.net/assets/Huelet-Network-logo-2.jpg" class="img-1">
    <p class="p-1">Good<span id="timeOfDay"></span></p>
    </div>
    <div class="root">
    <h2 class="h2-1">What we're watching today</h2>
    <div id="daily"></div>
    <h2 class="h2-1">Browse</h2>
    <!-- A scary amount of boilerplate HTML goes here. -->
        <div class="video-holder">
            <!-- video goes here -->
        </div>
        <div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div>
        <div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div>
        <div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div><div class="video-holder">
            <!-- video goes here -->
        </div>
        <div class="video-holder">
            <!-- video goes here -->
        </div>
        </div>
</body>
</html>