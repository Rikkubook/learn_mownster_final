<?php
    session_start();
    if($_SESSION["orderInformation"][1] === "0"){
        unset($_SESSION["cardInformation"]);
    }
    unset($_SESSION["orderInformation"]);
?>