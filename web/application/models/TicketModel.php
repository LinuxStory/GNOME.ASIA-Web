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
    public function getOrInsertCompanyIdByName($company){

        if($company){
            $query = $this->db->get_where('company',['companyName'=>$company,'companyIsValid'=>1],1);
            $resultArray = $query->row_array();
            if(isset($resultArray['companyId'])){
                return $resultArray['companyId'];
            }else{
                $insertData =[];
                $insertData ['companyName']= $company;
                $insertData ['companyIsValid']= 1;
                $this->db->insert('company', $insertData);
                return   $this->db->insert_id();
            }
        }else{
            return false;
        }

    }

}