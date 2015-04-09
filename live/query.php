<?php

//set variables and include relative path page for easy inclusion.
$pageDepth = 1;
$pageTitle = "Query Creation Page";
include('../zCommonElements/relPath.php');

//include header
include($relativePath . 'zCommonElements/head.php');

//include navigation
include($relativePath . 'zCommonElements/nav.php');
?>

    <script src="<?php echo $relativePath . 'lib/js/inputValidation.js' ?>"></script>

<?php include($relativePath . 'zCommonElements/pageTitle.php'); ?>

    <!--<form id="featureSelection" action="queryResults/queryValidator.php" method='post' target='formresponse'
          class="form-horizontal">
        <fieldset>

            <div class="container">
                <label for='beginDate'>Query Beginning Date*:</label><br/>

                <div>
                    <input type="text" name="beginDate" id="beginDate" value=""/>
                </div>
                <span id='featureSelection_beginDate_errorloc' class='error'></span>
            </div>
            <br/><br/><br/>

            <div class="container">
                <label for='email'>Query Ending Date*:</label><br/>

                <div>
                    <input type="text" name="endDate" id="endDate" value=""/>
                </div>
                <span id='featureSelection_endDate_errorloc' class='error'></span>
            </div>
            <br/><br/><br/>

            <div class='container'>
                <label for='message'></label><br/>

            </div>
            <br/><br/><br/>

            <div class='container'>
                <input type='submit' name='Submit' value='Submit'/>
            </div>
            <br/><br/><br/>

    </form>-->


    <div class="col-lg-6" style="min-width:90%;">
        <div class="well bs-component">
            <form id="featureSelection" action="queryResults/queryValidator.php" method='post'
                  target='formresponse' class="form-horizontal" >
                <fieldset>
                    <legend>Feature Selection</legend>
                    <div class="form-group">
                            <label for='beginDate' class="col-lg-2 control-label">Beginning Date</label>
                            <div class="col-lg-10">
                                    <input type="text" name="beginDate" id="beginDate" value="" class="form-control"/>
                            </div>
                            <span id='featureSelection_beginDate_errorloc' class='error'></span>
                    </div>

                    <div class="form-group">
                        <label for='endDate' class="col-lg-2 control-label">Ending Date</label>
                        <div class="col-lg-10">
                            <input type="text" name="endDate" id="endDate" value="" class="form-control"/>
                        </div>
                        <span id='featureSelection_endDate_errorloc' class='error'></span>
                    </div>

                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Relevant Features</label>
                        <div class="col-lg-10">
                            <select name="features" multiple class="form-control">
                                <option value="temp">temp1</option>
                                <option value="temp">temp2</option>
                                <option value="temp">temp3</option>
                                <option value="temp">temp4</option>
                                <option value="temp">temp5</option>
                                <option value="temp">temp6</option>
                                <option value="temp">temp7</option>
                                <option value="temp">temp8</option>
                                <option value="temp">temp9</option>
                            </select>
                            <span id='featureSelection_feature_errorloc' class='error'></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>



    <!-- client-side Form Validations:
        Uses the excellent form validation script from JavaScript-coder.com-->

    <script type='text/javascript'>
        // <![CDATA[

        var frmvalidator = new Validator("featureSelection");
        frmvalidator.EnableOnPageErrorDisplay();
        frmvalidator.EnableMsgsTogether();
        frmvalidator.addValidation("beginDate", "req", "Please provide a start date");
        frmvalidator.addValidation("endDate", "req", "Please provide an end date");
        frmvalidator.addValidation("features", "req", "Please provide at least one feature");

        // ]]>
    </script>
    <!--
    Form Code End
    -->
    <script>
        $('#endDate').datetimepicker();
        $('#beginDate').datetimepicker();
    </script>

<?php include($relativePath . 'zCommonElements/footer.php'); ?>