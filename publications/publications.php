<?php

//set variables and include relative path page for easy inclusion.
$pageDepth = 1;
$pageTitle = "Publications";
include('../zCommonElements/relPath.php');

//include header
include($relativePath . 'zCommonElements/head.php');

//include navigation
include($relativePath . 'zCommonElements/nav.php');

?>

<?php include($relativePath . 'zCommonElements/pageTitle.php'); ?>

<div class="jumbotron">
    <div class="row">

        <p>This material is presented to ensure timely dissemination of
            scholarly and technical work. Copyright and all rights therein are retained by authors or by
            other copyright holders. All persons copying this information are expected to adhere to the
            terms and constraints invoked by each author's copyright. In most cases, these works may not be
            reposted without the explicit permission of the copyright holder.
        </p>

    </div>
</div>

<p>A blue row indicates best paper</p>

<table class="table table-striped table-hover ">
    <thead>
    <tr>
        <th>#</th>
        <th>Author Names</th>
        <th>Paper Title</th>
        <th>Link</th>
    </tr>
    </thead>
    <tbody>
    <tr class="info">
        <td>1</td>
        <td>Jared Koontz, Matthew Malensek, and Sangmi Lee Pallickara</td>
        <td>GeoLens: Enabling Interactive Visual Analytics over Large-scale, Multidimensional Geospatial Datasets.
            Proceedings of the IEEE/ACM Symposium on Big Data Computing. **Best Paper Award
        </td>
        <td><a href="pdfs/Koontz-BDC14.pdf">Link</a></td>
    </tr>
    </tbody>
</table>

<?php include($relativePath . 'zCommonElements/footer.php'); ?>

