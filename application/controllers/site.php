<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mika
 * Date: 11/08/13
 * Time: 13:18
 * To change this template use File | Settings | File Templates.
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        echo "Hi Internet!";
        $this->hello();

    }

    public function hello(){
        echo "Hello";
    }
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */