<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyBlog extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $this->output->enable_profiler(true);
        print ('blog/index');
    }

    public function list()
    {
        $datas = 'kukukum';
        $this->output->enable_profiler(true);

        $this->userdata = $datas;
        print ('capture1');
    }

}

/* End of file Controllername.php */
