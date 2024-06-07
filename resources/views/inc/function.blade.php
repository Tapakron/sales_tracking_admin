{{-- Functions --}}
@php

function getPageName($pageDetails) {
    if ($pageDetails["page_lv"] == "2") {
        $pageName = $pageDetails["page_name_th_2"];
    }else if ($pageDetails["page_lv"] == "3") {
        $pageName = $pageDetails["page_name_th_3"];
    }else{
        $pageName = $pageDetails["page_name_th_1"];
    }
    return $pageName;
}
function getPageNameDesc2($pageDetails) {
    $pageDesc = "";
    if ($pageDetails["page_desc_2"] != "") {
        $pageDesc = $pageDetails["page_desc_2"];
    }
    return $pageDesc;
}
function getPageNameDesc3($pageDetails) {
    $pageDesc = "";
    if ($pageDetails["page_desc_3"] != "") {
        $pageDesc = $pageDetails["page_desc_3"];
    }
    return $pageDesc;
}

// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function scrollspy($offset) {
    echo 'data-target="#navSection" data-spy="scroll" data-offset="'. $offset . '"';
}

@endphp