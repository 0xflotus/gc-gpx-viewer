<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Geocaching GPX viewer</title>
    <link href="design.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
    <script type="text/javascript" src="js/infobox_packed.js"></script>
</head>
<body>
    <div id="filedrag">Drop your GPX files here</div>

    <p class="source">
        <a href="https://github.com/Surfoo/gc-gpx-viewer" onclick="window.open(this.href);return false;">Source on Github.com</a>
    </p>

    <p style="text-align: center;"><button id="fullscreen">Fullscreen</button></p>

    <div id="map_canvas" style="width:100%; height:100%;"></div>

    <script type="text/javascript" src="js/loadgpx.js"></script>
</body>
</html>