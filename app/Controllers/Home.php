<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
        return view("Home/index");
	}

	public function testEmail()
	{
        $email = service('email');
		
        $email->setTo('cristianalfredo11@gmail.com');
		
        $email->setSubject('A test email');
		
        $email->setMessage('<h1>Que Pedo Idan</h1>
                            <h2>Aqui probando el servidor de correos de la app </h2>
        ');
		
        if ($email->send()) {
		
            echo "Message sent";
			
		} else {
		
            echo $email->printDebugger();
			
		}
	}
}