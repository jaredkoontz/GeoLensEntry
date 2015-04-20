<?php

//set variables and include relative path page for easy inclusion.
$pageDepth = 1;
$pageTitle = "Live Version";
include('../zCommonElements/relPath.php');
include($relativePath . 'zCommonElements/geolensLocation.php');

//include header
include($relativePath . 'zCommonElements/head.php');

//include navigation
include($relativePath . 'zCommonElements/nav.php');
?>


<?php include($relativePath . 'zCommonElements/pageTitle.php'); ?>


    <p>GeoLens was created to interact with Galileo, another project from CSU. More information can be
        found <a href="http://galileo.cs.colostate.edu/">Here</a></p>
    <p>Pressing the button below will allow you to see if Galileo is up with data. If Galileo is up, the pressing of
        this
        button will bring you to a new form where you can craft your query.</p>
    <p>If Galileo is not up with data at the moment, you can still view GeoLens' client side capability at this page</p>
    <p><a href=\"<?php echo $relativePath . 'examples/examples.php'; ?>\">Examples</a></p>

    <br/>
    <br/>
    <br/>
    <br/>


    <a href="#" class="btn btn-default" id="checkButton">Click to check galileo status</a>
    <script type="text/javascript">

        $(document).ready(function () {
            $('#checkButton').one('click', function () {
                $.ajax({
                    type: 'post',
                    data: {action: "check"},
                    dataType: 'json',
                    url: '<?php echo $relativePath ?>live/helper/checkGalileo.php'
                }).done(function (data) {

                    if (data.status == "on") {
                        $('#checkButton').attr('class', 'btn btn-success');
                        $('#response').append("<p>Galileo is currently up with data</p>" +
                        "<p>Your id is "+ data.id +"</p>" +
                        "<p>Continue your query <a href=\"./query.php\"> at this page</a></p>");
                    }
                    else if (data.status == "off") {
                        $('#checkButton').attr('class', 'btn btn-danger');
                        $('#response').append("<p>Galileo is not currently up with data</p>" +
                        "<p>You can still view GeoLens' client side capability at this page</p>" +
                        "<p><a href=\"<?php echo $relativePath . 'examples/examples.php'; ?>\">Examples</a></p>");
                    }
                }).fail(function () {
                    //todo failure of ajax call
                });
            });
        });

    </script>
    <br/>
    <br/>
    <br/>

    <div id="response"></div>

<?php include($relativePath . 'zCommonElements/footer.php'); ?>