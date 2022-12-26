<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Index_page extends BaseController {
    
     function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->helper('form'); 
      }

     
    public function index()
    {      
        $data = array();
        $data["title"]="Bim Nation";
        $this->load->view('index',$data);
    }


    public function about_us()
    {   
        $data = array();
        $data["title"]="Bim Nation : About Us";
        $this->load->view('about-us',$data);
    }

    public function contact_us()
    {   
        $data = array();
        $data["title"]="Bim Nation : Contact Us";
        $this->load->view('contact-us',$data);
    }

    public function career()
    {   
        $data = array();
        $data["title"]="Bim Nation : Career";
        $this->load->view('career',$data);
    }

    public function services()
    {   
        $data = array();
        $data["title"]="Bim Nation : Services";
        $this->load->view('services',$data);
    }

    public function bim_training()
    {   
        $data = array();
        $data["title"]="Bim Nation : Bim Training";
        $this->load->view('bim-training',$data);
    }

    public function faq()
    {   
        $data = array();
        $data["title"]="Bim Nation : Frequently Asked Questions";
        $this->load->view('faq',$data);
    }


    public function save_contact()
    {
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('reservation_name','reservation_name','required');
        $this->form_validation->set_rules('reservation_email','reservation_email','required');
        $this->form_validation->set_rules('reservation_phone','reservation_phone','required');
        $this->form_validation->set_rules('form_message','form_message','required');

             if($this->form_validation->run() == FALSE)
             {

                $this->index();


            }else
            {            
                    $form_data      = $this->input->post();

                    $insertData = array();
                    $insertData['reservation_name']         = $form_data['reservation_name'];
                    $insertData['reservation_email']        = $form_data['reservation_email'];
                    $insertData['reservation_phone']        = $form_data['reservation_phone'];
                    $insertData['form_message']             = $form_data['form_message'];
                
                        $html_data = " Reservation Name : ".  $form_data['reservation_name']."<br>";
                        $html_data .= "Reservation Email : ".  $form_data['reservation_email']."<br>";
                        $html_data .= "Reservation Phone : ".  $form_data['reservation_phone']."<br>";
                        $html_data .= "Form Message : ".  $form_data['form_message']."<br>";
                         

                        $description =$html_data;

                        $this->load->library('email');
                        $config['mailtype'] = 'html';
                        $this->email->initialize($config);
                        $toemail = 'muzammilmegatask@gmail.com';
                        $this->email->from('email@bimnation.in', 'New Registartion Lead');
                        $this->email->to($toemail);
     

                        $this->email->subject('New Lead Arrival ');
                        $this->email->message( $description );

                        $resulst = $this->email->send();
                     }

                     redirect($this->index());

            }




        public function save_data()
    {
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('form_name','form_name','required');
        $this->form_validation->set_rules('form_email','form_email','required');
        $this->form_validation->set_rules('form_phone','form_phone','required');
        $this->form_validation->set_rules('form_subject','form_subject','required');
        $this->form_validation->set_rules('form_message','form_message','required');

             if($this->form_validation->run() == FALSE)
             {

                $this->index();


            }else
            {            
                    $form_data      = $this->input->post();

                    $insertData = array();
                    $insertData['form_name']         = $form_data['form_name'];
                    $insertData['form_email']        = $form_data['form_email'];
                    $insertData['form_subject']        = $form_data['form_subject'];
                    $insertData['form_phone']        = $form_data['form_phone'];
                    $insertData['form_message']             = $form_data['form_message'];


                
                        $html_data = " Contact Name : ".  $form_data['form_name']."<br>";
                        $html_data .= "Contact Email : ".  $form_data['form_email']."<br>";
                        $html_data .= "Contact Subject : ".  $form_data['form_subject']."<br>";
                        $html_data .= "Contact Phone : ".  $form_data['form_phone']."<br>";
                        $html_data .= "Form Message : ".  $form_data['form_message']."<br>";
                        

                        $description =$html_data;
                      
                        $this->load->library('email');
                        $config['mailtype'] = 'html';
                        $this->email->initialize($config);
                        $toemail = 'muzammilmegatask@gmail.com';
                        $this->email->from('mail@bimnation.in', 'New Contact Us Lead');
                        $this->email->to($toemail);
 

                        $this->email->subject('New Lead Arrival ');
                        $this->email->message( $description );

                        $resulst = $this->email->send();
                     }

                     redirect(base_url().'contact-us');


            }




            public function save_career()
    {
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('form_name','form_name','required');
        $this->form_validation->set_rules('form_email','form_email','required');
        $this->form_validation->set_rules('form_phone','form_phone','required');
        $this->form_validation->set_rules('form_post','form_post','required');

             if($this->form_validation->run() == FALSE)
             {

                $this->index();


            }else
            {            
                    $form_data      = $this->input->post();

                    $insertData = array();
                    $insertData['form_name']         = $form_data['form_name'];
                    $insertData['form_email']        = $form_data['form_email'];
                    $insertData['form_phone']        = $form_data['form_phone'];
                    $insertData['form_post']             = $form_data['form_post'];

                    if(isset($_FILES['form_attachment']['name']) && $_FILES['form_attachment']['name'] != '') {



                    $f_name         =$_FILES['form_attachment']['name'];
                    $f_tmp          =$_FILES['form_attachment']['tmp_name'];
                    $f_size         =$_FILES['form_attachment']['size'];
                    $f_extension    =explode('.',$f_name);
                    $f_extension    =strtolower(end($f_extension));
                    $f_newfile      =uniqid().'.'.$f_extension;
                    $store          ="uploads/documents/".$f_newfile;


                    $full_path_doc = base_url($store);
                
                    if(!move_uploaded_file($f_tmp,$store))
                    {
                        $this->session->set_flashdata('error', 'Document Upload Failed .');
                    }
                    else
                    {
                       $insertData['form_attachment'] = $f_newfile;
                       
                    }
                 }


                
                    $html_data = " Career Name : ".  $form_data['form_name']."<br>";
                    $html_data .= "Career Email : ".  $form_data['form_email']."<br>";
                    $html_data .= "Career Phone : ".  $form_data['form_phone']."<br>";
                    $html_data .= "Career Post : ".  $form_data['form_post']."<br>";
                         



                        $description =$html_data;

                        


                        $this->load->library('email');
                        $config['mailtype'] = 'html';
                        $this->email->initialize($config);
                        $toemail = 'muzammilmegatask@gmail.com';
                        $this->email->from('email@bimnation.in', 'New Career Lead');
                        $this->email->to($toemail);
                        $this->email->attach($full_path_doc);

                            

                        $this->email->subject('New Lead Arrival ');
                        $this->email->message( $description );

                        $resulst = $this->email->send();

                     }

                      redirect(base_url().'career');

            }

    }
    
 
