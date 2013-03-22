<?php

class Doctrinettool extends CI_Controller {

 
	function index(){
	
	}

    function create_tables() {

        echo 'Reminder: Make sure the tables do not exist already.<br />

        <form action="" method="POST">

        <input type="submit" name="action" value="Create Tables"><br /><br />';


        if ($this->input->post('action')) {

            Doctrine::createTablesFromModels();

            echo "Done!";
        }

    }

 

}
