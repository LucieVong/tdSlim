<?php

    $login = filter_input(INPUT_POST, 'login');
    $password = filter_input(INPUT_POST, 'password');

    echo $login, $password;

    if(isset($login, $password)){
        $context = stream_context_create();
        $url = file_get_contents(
            'http://localhost/tdSlim/slim/index.php/formulaire/'.$login.'/'.$password,
            false,
            $context);
        echo $url;
    }

?>
