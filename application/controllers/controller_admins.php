<?php

class Controller_Admins extends Controller
{
    
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    $query = "SELECT name, password FROM Users WHERE name = ."'$name'". AND password = ."'$password'".";
    
    $res = mysqli_query($query, $link);
    
    if(isset($res)) {
        session_start();
        $_SESSION["is_auth"] = true;
    
    }
	
	function action_index()
	{
		$this->view->generate('contacts_view.php', 'template_view.php');
	}
}
