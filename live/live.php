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


<p></p>
<p></p>
<p></p>
<p></p>


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
                        $('#response').text(data);
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