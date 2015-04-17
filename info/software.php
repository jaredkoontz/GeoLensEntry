<?php

//set variables and include relative path page for easy inclusion.
$pageDepth = 1;
$pageTitle = "Software";
include('../zCommonElements/relPath.php');

//include header
include($relativePath . 'zCommonElements/head.php');

//include navigation
include($relativePath . 'zCommonElements/nav.php');

?>

<?php include($relativePath . 'zCommonElements/pageTitle.php'); ?>

<p><strong>Release Metadata</strong></p>
<ul>
    <li>Version 1.0</li>
    <li>Checksum SHA-1</li>
    <li>MD5</li>
    <li><a href="">Distribution Zip</a></li>
</ul>

<br/>

<p><a href="https://github.com/jaredkoontz/ClientGeoLens">Github directory</a></p>

<br/>


<p>Application Programmer's Interface</p>

<?php include($relativePath . 'zCommonElements/footer.php'); ?>