<?php 

class Customer extends Front_Controller {



    public function login() 
    {
    	if($_POST){


            print_r($_POST);
            exit;




        }
    }
    public function signup() 
    {
    	if($_POST){

                    $this->load->library('form_validation');
                    $content = array(
                        'customer_name' => $this->input->post('customer_name',TRUE),
                        'customer_email' => $this->input->post('customer_email',TRUE),
                        'customer_phone' => $this->input->post('customer_phone',TRUE),
                        'customer_password' => $this->input->post('customer_password',TRUE),
                        'confirm_password' => $this->input->post('confirm_password',TRUE),
                    );

                    $this->form_validation->set_rules('customer_name', 'customer', 'required');
                    $this->form_validation->set_rules('customer_email', 'Email', 'required|valid_email|is_unique[customer.customer_email]');
                    $this->form_validation->set_rules('customer_password', 'Password', 'required');
                    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[customer_password]');


                    if ($this->form_validation->run() == TRUE)
                    {
                        echo json_encode(array('success'=>true,'message'=>'Your Account has created successfully','data' => []));
                    }else{
                        echo json_encode(array('success'=>false,'message'=>'Validation Errors','data' => validation_errors()));
                    }
            
    	}else{

            echo json_encode(array('success'=>false,'message'=>'Bad Request','data' => $_POST));
        }
    }

}
