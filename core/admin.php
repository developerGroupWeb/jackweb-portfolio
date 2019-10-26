<?php
include '../helpers/GetMessage.php';

if(isset($_POST['nbr'])){

    $id  = $_POST['nbr'];
    $answer = GetMessage::find($id);

    echo json_encode($answer);
}
