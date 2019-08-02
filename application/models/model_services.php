<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_services
 *
 * @author Nikolai
 */
class model_services {
    //put your code here
    
    function put_data($data) {
        
    BEGIN;
    INSERT INTO users (email, name)  VALUES($email, $name);
    INSERT INTO tasks (text, status) VALUES(LAST_INSERT_ID(),$text, $status);
    COMMIT;
    }
}
