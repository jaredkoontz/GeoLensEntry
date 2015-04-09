<?php

//set variables and include relative path page for easy inclusion.
$pageDepth = 1;
$pageTitle = "Precomputed Examples";
include('../zCommonElements/relPath.php');

//include header
include($relativePath . 'zCommonElements/head.php');

//include navigation
include($relativePath . 'zCommonElements/nav.php');
?>


<?php include($relativePath . 'zCommonElements/pageTitle.php'); ?>

    <p>If Galileo is not currently up with data, you can still view various precomputed query results within GeoLens</p>


    <p>Simply click on the link describing the data set you would like to view</p>

    <p><a href="">DataSet 1</a></p>
    <p><a href="">DataSet 2</a></p>
    <p><a href="">DataSet 3</a></p>


<?php include($relativePath . 'zCommonElements/footer.php'); ?>