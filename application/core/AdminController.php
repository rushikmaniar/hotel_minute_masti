<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public $pageData = array();

    public $pageTitle = 'Page Title';
	public $userInfo = array();
	public $total_customer = 0;
	public $total_category = 0;
	public $total_section = 0;
	public $per_page = 10;
	
	public function __construct()
	{
        parent::__construct();
        $this->load->database();
        $this->load->model('CommonModel');
        if(isset($_SESSION['hotel-admin'])){
            $whr = array("user_email"=>$this->session->userdata('hotel-admin')['user_email']);
            $result = $this->CommonModel->getRecord("user_master",$whr);
            if($result->num_rows() == 1){
                //continue
            }else{
                $this->session->unset_userdata('hotel-admin');
                redirect(base_url('backendwork/login'));
            }
        }else{

           redirect(base_url('backendwork/login'));
        }
	}
    public function checkexists($update_field = false,$id = false)
    {
        //update field and $id  used while edit in CRUD

        $table = $this->input->post('table');
        $field = $this->input->post('field');
        $value = $this->input->post($field);

        if (isset($id) && $id != '' && isset($update_field) && $update_field != '') {
            $c = $this->CommonModel->getRecord($table, array($field => $value, "$update_field !=" => $id))->num_rows();

        } else {
            $c = $this->CommonModel->getRecord($table, array($field => $value))->num_rows();
        }

        if ($c > 0) {
            echo "false";
        } else {
            echo "true";
        }
        exit();

    }
	public function render($the_view=null,$template='main')
	{
	    if($the_view)
		{
		    if($template){
			$this->pageData['page_content'] = $this->load->view('backendwork/'.$the_view,$this->pageData,TRUE);
			$this->load->view('backendwork/template/'.$template,$this->pageData);
		    }
		    else 
		    {
		        $this->load->view($the_view,$this->pageData);
		    }
		    
		}
		else
		{
		    exit("View Not Found");
		}
	}
}
