<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Index_page extends BaseController {
 	
	 
	public function index()
	{
		$this->load->view('index');
	}

    public function about_us()
    {
        $this->load->view('about-us');
    }
    public function bim_training()
    {
        $this->load->view('bim-training');
    }

    public function thank_you()
    {
        $this->load->view('thank-you');
    }



    public function save_contact()
    {
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('phone','phone','required');
        $this->form_validation->set_rules('message','message','required');

             if($this->form_validation->run() == FALSE)
             {

                $this->index();


            }else
            {
                
                        $html_data = " Name : ".  $form_data['name']."&nbsp;&nbsp;";
                        $html_data .= " Email : ".  $form_data['email']."&nbsp;";
                        $html_data .= " Phone : ".  $form_data['phone']."&nbsp;&nbsp;";
                        $html_data .= " Message : ".  $form_data['message']."&nbsp;&nbsp;";
                         



                        $description =$html_data;

                        print_r($description);die();


                         $this->load->library('email');
                        $config['mailtype'] = 'html';
                        $this->email->initialize($config);
                        $toemail = 'naqviabbas817@gmail.com';
                        $this->email->from('support@megatasktechnologies.com', 'New Lead');
                        $this->email->to($toemail);
     

                            

                        $this->email->subject('New Lead Arrival ');
                        $this->email->message( $description );

                        $resulst = $this->email->send();

                        
                        if($result > 0)
                        {

                            $this->session->set_flashdata('success', 'Email Successfully Send');


                             
                        }
                        else
                        { 
                            $this->session->set_flashdata('error', 'Email Not Send Successfully Send');
                        }
                     }


            }

    }
	
 
