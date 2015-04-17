<?php

//set variables and include relative path page for easy inclusion.
$pageDepth = 1;
$pageTitle = "People";
include('../zCommonElements/relPath.php');

//include header
include($relativePath . 'zCommonElements/head.php');

//include navigation
include($relativePath . 'zCommonElements/nav.php');

?>

<?php include($relativePath . 'zCommonElements/pageTitle.php'); ?>

<p>GeoLens is led by <a href="http://www.cs.colostate.edu/~sangmi">Prof. Sangmi Lee Pallickara</a>.
    For more information, please <a href="http://www.cs.colostate.edu/~sangmi">contact her</a>.</p>

<p>Students contributing to this project include:</p>

<table class="table table-striped table-hover ">
    <thead>
    <tr>
        <th>Student Name</th>
        <th>Position</th>
        <th>Website</th>
    </tr>
    </thead>
    <tbody>
    <tr class="active">
        <td>Jared Koontz</td>
        <td>Graduate Student</td>
        <td><a href="http://www.cs.colostate.edu/~koontz/me/">Website</a></td>
    </tr>
    <tr class="active">
        <td>Matthew Malensek</td>
        <td>Graduate Student</td>
        <td><a href="http://matthew.malensek.net">Website</a></td>
    </tr>
    </tbody>
</table>

<?php include($relativePath . 'zCommonElements/footer.php'); ?>