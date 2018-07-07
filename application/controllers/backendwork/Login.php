<?php
/**
 * Created by PhpStorm.
 * User: Rushik
 * Date: 12-04-2018
 * Time: 11:47 AM
 */
class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CommonModel');
    }
    /**
     * Login page
     */
    public function index()
    {
        if ($this->session->userdata('hotel-admin')){redirect('backendwork/dashboard','refresh');}

        if($this->input->post('LoginFormEmail'))
        {
            $whr = array("user_email"=>$this->input->post('LoginFormEmail'),"user_password"=>md5($this->input->post('LoginFormPassword')));
            $result = $this->CommonModel->getRecord("user_master",$whr);
            if ($result->num_rows() == 1)
            {
                $user_data = $result->result_array();
                $this->session->set_userdata("hotel-admin",$user_data[0]);
                redirect('backendwork/dashboard','refresh');
            }
            else
            {
                $this->session->set_flashdata('login_error','Incorrect username and password!');
                redirect('backendwork/login','refresh');
            }
        }
        $this->load->view('backendwork/login/index-ref.php','refresh');
    }

    /* check user at ajax model*/
    public function checkUser()
    {
        $reponse_array = array();
        $session_user = $this->session->userdata('feedback-admin');
        if($session_user){
            $user_data = $this->CommonModel->getRecord('user',array('user_id'=>$session_user['user_id'],'user_email'=>$session_user['user_email']));

            if($user_data->num_rows() == 1){
                $reponse_array['code'] = 1;
                $reponse_array['message'] = '1 User Exists in Database';
            }
            else {
                $reponse_array['code'] = 0;
                $reponse_array['message'] = 'No Unique User';
            }


        }else{
            $reponse_array['code'] = 2;
            $reponse_array['message'] = 'Session Expired.Reload Page.';
        }
        echo json_encode($reponse_array);exit;
    }
    /**
     * Logout functionality
     *
     */
    public function logout()
    {
        $this->session->unset_userdata('hotel-admin');
        redirect('backendwork/login','refresh');
    }
}