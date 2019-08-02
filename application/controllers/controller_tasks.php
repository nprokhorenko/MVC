<?php

class Controller_Tasks extends Controller
{
    
    function __construct()
	{
		$this->model = new Model_Tasks();
		$this->view = new View();
	}

    function action_index() {
        
        
	
	
        
        $data = array();
        
        $tasks_result = $this->model->get_data();
		
    $task_myrow = mysqli_fetch_array($tasks_result);
        do {
            $data['name'] = $task_myrow['name'];
            $data['email'] = $task_myrow['email'];
            $data['text'] = $task_myrow['text'];
            $data['status'] = $task_myrow['status'];
            $o_name = $task_myrow['surname'].' '.$task_myrow['name'];
            printf ("<a href='page.php?id=%s'><div><img alt='Аватар' src='%s'><span>%s<span></div></a>",$o_id,$o_avatar, $o_name);}
        while ($partner_myrow = mysqli_fetch_array($tasks_result));
    
		
		$this->view->generate('tasks_view.php', 'template_view.php', $data);
	
    }
}