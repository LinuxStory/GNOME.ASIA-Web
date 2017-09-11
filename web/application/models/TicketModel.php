<?php
/**
 * Created by PhpStorm.
 * User: cdffh
 * Date: 2017/9/11
 * Time: 16:29
 */

class TicketModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }
    public function getCompanyNameById($company){
        $query = $this->db->get_where('company',['companyId'=>$company,'companyIsValid'=>1],1);
        $resultArray = $query->row_array();
        if(isset($resultArray['companyName'])){
            return $resultArray['companyName'];
        }else{
            return false;
        }
    }
    public function getOrInsertTicket($data){

        if($data['code']){
            $query = $this->db->get_where('ticket',['ticket_code'=>$data['code'],'companyIsValid'=>1],1);
            $resultArray = $query->row_array();
            if(isset($resultArray['ticket_id'])){
                return $resultArray['ticket_id'];
            }else{
                'ticket_';
                $insertData =[];
                $insertData ['ticket_code']= $data['code'];
                $insertData ['ticket_order_id']= $data['order_id'];
                $insertData ['ticket_ticket_id']= $data['ticket_id'];
                $insertData ['ticket_event_id']= $data['event_id'];
                $insertData ['ticket_custom_fields']= json_encode($data['custom_fields']);
                $insertData ['ticket_remark']= $data['remark'];
                $insertData ['ticket_email']= $data['email'];
                $insertData ['ticket_phone']= $data['phone'];
                $insertData ['ticket_user_nickname']= $data['user_nickname'];
                $insertData ['ticket_user_avatar']= $data['user_avatar'];
                $insertData ['ticket_quantity']= $data['quantity'];
                $insertData ['ticket_used_quantity']= $data['used_quantity'];
                $insertData ['ticket_refunded_quantity']= $data['refunded_quantity'];
                $insertData ['ticket_total_amount']= $data['total_amount'];
                $insertData ['ticket_paid_amount']= $data['paid_amount'];
                $insertData ['ticket_discount_amount']= $data['discount_amount'];
                $insertData ['ticket_refunded_amount']= $data['refunded_amount'];
                $insertData ['ticket_created_at']= $data['created_at'];
                $insertData ['ticket_updated_at']= $data['updated_at'];
                $insertData ['ticket_created_at_gnome']= date('Y-m-d H:i:s');
                $this->db->insert('ticket', $insertData);
                return   $this->db->insert_id();
            }
        }else{
            return false;
        }

    }

}