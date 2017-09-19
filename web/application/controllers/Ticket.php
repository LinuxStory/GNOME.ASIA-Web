<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
   public function callback(){
       $postData = $this->input->raw_input_stream;
       log_message('debug',$postData);
       $resultData =[
           'code'=>1
       ];
       $postArray = json_decode($postData,true);
       if(isset($postArray['code'])){

           $this->load->model('TicketModel', '', TRUE);
           $ticketModel = new TicketModel();
           $result= $ticketModel->getOrInsertTicket($postArray);
           if($result){
               $resultData['code'] =0;
           }
       }
       echo json_encode($resultData);
   }
    public function getTicketInfoByCode(){
        $resultData =[
            'code'=>1
        ];
        $code = $this->input->post('code');
        if($code){
            $this->load->model('TicketModel', '', TRUE);
            $ticketModel = new TicketModel();
            $result= $ticketModel->getTicketByCode($code);
            if($result){
                $resultData['code'] =0;
                $resultData['data'] =$result;
            }
        }
        echo json_encode($resultData);
    }

}
