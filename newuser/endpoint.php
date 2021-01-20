<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks!</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <style>
    body {
        background-color: #181718;
    }
    .h2-1 {
        font-family: 'Source Sans Pro', sans-serif;
        color: white;
    }
            .b-1 {
            background-color: black;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .b-1:hover {
            background-color: white;
            color: black;
        }
    </style>
<script type="text/javascript">
  window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=document.createElement("script");r.type="text/javascript",r.async=!0,r.src="https://cdn.heapanalytics.com/js/heap-"+e+".js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(r,a);for(var n=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","resetIdentity","removeEventProperty","setEventProperties","track","unsetEventProperty"],o=0;o<p.length;o++)heap[p[o]]=n(p[o])};
  heap.load("340507969");
</script>
</head>
<body>
    <div class="d-1">
    <h2 class="h2-1">Good to meet you, <?php echo $_POST[uname]; ?>!</h2>
    <a href="/videos/home">
    <button class="b-1">Start Watching!</button>
    </a>
    <p></p>
</div>
</body>
</html>