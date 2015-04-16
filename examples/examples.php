<?php

//set variables and include relative path page for easy inclusion.
$pageDepth = 1;
$pageTitle = "Precomputed Examples";
include('../zCommonElements/relPath.php');

include($relativePath . 'zCommonElements/geolensLocation.php');

//include header
include($relativePath . 'zCommonElements/head.php');

//include navigation
include($relativePath . 'zCommonElements/nav.php');
?>


<?php include($relativePath . 'zCommonElements/pageTitle.php'); ?>

    <p>If Galileo is not currently up with data, you can still view various precomputed query results within GeoLens</p>


    <p>Simply click on the link describing the data set you would like to view</p>

    <br/>

    <ul>
        <li><a href="<?php echo $relativePath . '../' . $geolensLocation . "index.php?json=ushalf"; ?>" target="_blank">Half
                of the United
                States</a></li>
        <li><a href="<?php echo $relativePath . '../' . $geolensLocation . "index.php?json=wyco"; ?>" target="_blank">Wyoming
                And Colorado</a>
        </li>
        <li><a href="<?php echo $relativePath . '../' . $geolensLocation . "index.php?json=noco"; ?>" target="_blank">North
                Colorado</a></li>
    </ul>

<?php include($relativePath . 'zCommonElements/footer.php'); ?>