<?php


if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'check':
            checkGalileo();
            break;
        case 'l':
            select();
            break;
    }
}

function select()
{
    echo "The select function is called.";
    exit;
}

function checkGalileo()
{
    //todo send message to galileo. create and save user id in cookie here.

    $return = $obj = (object)array('status' => 'on', 'url' => 'value', 'id' => '1');
    echo json_encode($return);
}


