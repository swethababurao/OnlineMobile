<?php

// system/application/controllers/hello.php

 

class Hello extends CI_Controller {

 

    function index() {

        echo "Hello CodeIgniter!";
		

    }



    function user_test() {

 

        $u = new User2;

        $u->username = 'johndoe';

        $u->password = 'secret';

       $u->first_name = 'John';

        $u->last_name = 'Doe';

        $u->save();

 


 

        echo "added 1 users";

    }

 

}
