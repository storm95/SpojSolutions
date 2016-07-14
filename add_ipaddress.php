<?php

    function get_visitor_ip()
    {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        return $ip;
    }


    $visitor_ipaddress = mysql_real_escape_string(get_visitor_ip());
    $page_url= mysql_real_escape_string($_SERVER['REQUEST_URI']);

    $query= "INSERT INTO  `db_coding_solutions`.`visitor_ipaddress` (`sno`, `ipaddress`, `timestamp`, `url`) VALUES (NULL, '".$visitor_ipaddress."', CURRENT_TIMESTAMP, '".$page_url."')";

    if(!(@$query_run= mysql_query($query)) )
    {
        die('Please Try Later!');
    }
    
?>