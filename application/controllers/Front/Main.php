<?php 

class Main extends Front_Controller {

    public function index() 
    {


    	if($_POST){

            

            $type = $this->input->post('type',TRUE);
            if(isset($type)){


                if($this->input->post('type') == "newsletter"){
                    $content = array('newsletter_email' => $this->input->post('newsletter_email',TRUE));
                    $data['table'] = 'newsletter';
                    $this->general->insert($data,$content);
                }else{

                    $content = array(
                        'demo_request_first_name' => $this->input->post('demo_request_first_name',TRUE),
                        'demo_request_last_name' => $this->input->post('demo_request_last_name',TRUE),
                        'demo_request_business_email' => $this->input->post('demo_request_business_email',TRUE),
                        'demo_request_phone_number' => $this->input->post('demo_request_phone_number',TRUE),
                        'demo_request_organization_name' => $this->input->post('demo_request_organization_name',TRUE),
                        'demo_request_job_title' => $this->input->post('demo_request_job_title',TRUE),
                        'demo_request_industry' => $this->input->post('demo_request_industry',TRUE),
                        'demo_request_size_of_organization' => $this->input->post('demo_request_size_of_organization',TRUE),
                        'demo_request_country' => $this->input->post('demo_request_country',TRUE)
                    );
                    $data['table'] = 'demo_request';
                    $this->general->insert($data,$content);
                }

                // $data = array();
                // $data['table'] = 'thankyou_page';
                // $data['output_type'] = 'row';
                // $data['where'] = array('thankyou_page_id' => 1); 
                // $content['thankyou_page'] = $this->general->get($data);

                redirect('thank-you');

            }
    	}

        $data = array();
        $data['table'] = 'homepage';
        $data['output_type'] = 'result';
        $data['where'] = array('homepage_id' => 1); 
        $content['homepage'] = $this->general->get($data)[0];

        $data = array();
        $data['table'] = 'asset';
        $data['order_by'] = 'ASC';
        $data['order_by_col'] =  'asset_sort_order';
        $content['asset'] = $this->general->get($data);        





        $data = array();
        $data['table'] = 'banner';
        $data['order_by'] = 'ASC';
        $data['order_by_col'] =  'banner_sort_order';
        $content['banner'] = $this->general->get($data);    

        $data = array();
        $data['table'] = 'news';
        $data['order_by'] = 'ASC';
        $data['order_by_col'] =  'news_sort_order';
        $content['news'] = $this->general->get($data);    




        $data = array();
        $data['table'] = 'team_member';
        $data['order_by'] = 'ASC';
        $data['order_by_col'] =  'team_member_sort_order';
        $content['team_member'] = $this->general->get($data);    


        $data = array();
        $data['table'] = 'testimonial';
        $data['order_by'] = 'ASC';
        $data['order_by_col'] =  'testimonial_sort_order';
        $content['testimonial'] = $this->general->get($data);    

        $data = array();
        $data['table'] = 'gallery';
        $data['order_by'] = 'ASC';
        $data['order_by_col'] =  'gallery_sort_order';
        $content['gallery'] = $this->general->get($data);     


        $data = array();
        $data['table'] = 'product';
        $data['order_by'] = 'ASC';
        $data['order_by_col'] =  'product_sort_order';
        $data['join_array'][] = array('join_table'=>'currency','join'=>'product.product_currency = currency.currency_id ','join_type'=>'left');
        $content['product'] = $this->general->get($data);      





        $content['main_content'] = 'home';    
        $this->load->view('front/inc/view',$content);             
    }

    public function thankyou() 
    {
        $content['main_content'] = 'thank-you';    
        $this->load->view('front/inc/view',$content);     
    }
}
