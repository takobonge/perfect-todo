<?php

    $database = 'perfect_todo';
    $user     = 'root';
    $password = 'vagrant';

    $this->db_manager->connect('master', array(
        'dsn'      => 'mysql:dbname='.$database.';host=localhost',
        'user'     => $user,
        'password' => $password,
    ));
