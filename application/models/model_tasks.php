<?php

class Model_Tasks extends Model
{
    
public function get_data() {
     $db = DB::getInstance();
    $tasks_result = mysqli_query($db->db, "SELECT tasks.text, tasks.status, users.name, users.email FROM users, tasks LEFT JOIN tasks AS t ON `t.users_id`=`users.id` LIMIT 3")
             or die("Ошибка " . mysqli_error($db));
    
    return $tasks_result;    
            
}            
    
    
    
}
	