<?php

//set variables and include relative path page for easy inclusion.
$pageDepth = 0;
$pageTitle = "GeoLens Entry Page";
include('./zCommonElements/relPath.php');

//include header
include($relativePath . 'zCommonElements/head.php');

//include navigation
include($relativePath . 'zCommonElements/nav.php');



?>

    <p title=""><img src="images/Geolens-logo.png" width="233" height="110" alt="geolens" title=""></p>

    <p>GeoLens is an interactive visual analytics framework. GeoLens provides fast and expressive interactions with
        voluminous geo-spatial datasets. We provide an expressive visual query evaluation scheme to support advanced
        interactive visual analytics technique, such as brushing and linking. To achieve this, we designed and developed
        the Geohash based image tile generation algorithm that automatically adjusts the range of data to access based
        on the minimum acceptable size of the image tile.</p>


    <p>Key Innovation and Capabilities</p>
    <ul>
        <li>Brushing and Linking</li>
        <li>Autonomous histogram generation algorithm</li>
        <li>Self-adjustable data aggregation</li>
        <li>visual query coordinating scheme</li>
    </ul>

    <br/>
    <br/>
    <br/>
    <br/>

    <a href="live/live.php" class="btn btn-default">Try For Live Version of GeoLens</a>
    <a href="examples/examples.php" class="btn btn-primary">View Examples</a>


<?php include($relativePath . 'zCommonElements/footer.php'); ?>