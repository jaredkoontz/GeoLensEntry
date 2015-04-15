<?php

//set variables and include relative path page for easy inclusion.
$pageDepth = 1;
$pageTitle = "More Information";
include('../zCommonElements/relPath.php');

//include header
include($relativePath . 'zCommonElements/head.php');

//include navigation
include($relativePath . 'zCommonElements/nav.php');

?>

<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1 id="dialogs">People</h1>
        </div>
    </div>
</div>

<?php include('people.php'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1 id="dialogs">Software</h1>
        </div>
    </div>
</div>

<?php include('software.php'); ?>


<?php include($relativePath . 'zCommonElements/footer.php'); ?>

