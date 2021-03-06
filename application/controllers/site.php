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
     * @var $math Math
     */
    public $math;

    /**
     * @var $home
     */
    public $home;

    /**
     * @var $get_db Get_db
     */
    public $get_db;

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

        $this->home();

    }

    public function home(){
        $data['title'] = "Home!";
        $data['var1'] = 1;
        $data['var2'] = 2;

        $this->load->model("math");
        $data['addTotal'] = $this->math->add($data["var1"],$data["var2"]);
        $data['subTotal'] = $this->math->sub($data["var1"],$data["var2"]);
        $this->load->view("view_home", $data);
    }

    public function addStuff(){
        $this->load->model("math");
        echo $this->math->add(2,3);
    }

    function about(){
        $data['title'] = "About!";
        $this->load->view("view_about",$data);
    }

    function getValues(){

        $this->load->model("get_db");
        $data['results'] = $this->get_db->getAll();
        $this->load->view("view_db",$data);
    }
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */