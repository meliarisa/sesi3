<?php
    $mhs = array (
        array("maria","2201010458","probolinggo"),
        array("risa","2201010569", "malang"),
        array("santi","2201010478","denpasar"),
    );
    header('content-type: application/json; charset=utf-8');
    echo json_encode($mhs);