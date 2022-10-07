<?php




if(array_key_exists('site', $_POST)) {
    
    $site = $_POST['site'];
    $result = shell_exec("python script_request.py $site");
    // var_dump($site);
}




?>