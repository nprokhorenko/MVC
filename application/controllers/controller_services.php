<?php

class Controller_Services extends Controller
{

	function action_index()
	{
            if(!isset($_POST['email'])) {
		$this->view->generate('services_view.php', 'template_view.php');
            }
            else {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $task = $_POST['task'];
                
                
                $location_vars = array("name", "email", "task");
                $result = compact("event", "nothing_here", $location_vars);
                
            }
	}
}
