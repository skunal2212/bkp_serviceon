<?php

class RiderprofitLib {

    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->model('RiderProfit/Riderprofitmodel', 'profitmodel');
    }
    
    public function get_all_rider_list() {
        return $this->CI->profitmodel->get_all_rider_list();
    }

    public function get_order_list_by_rider($riderid) {
        return $this->CI->profitmodel->get_order_list_by_rider($riderid);
    }
    
    public function get_offline() {
        return $this->CI->profitmodel->get_offline();
    }

    public function addProfit($params) {
        return $this->CI->profitmodel->addProfit($params);
    }
     public function get_orderdetails($params) {
        return $this->CI->profitmodel->get_orderdetails($params);
    }
    public function get_storebasic($params) {
        return $this->CI->profitmodel->StoreBasic($params);
    }
     public function get_services($params) {
        return $this->CI->profitmodel->get_services($params);
    }

     public function get_transaction_summary($storeid) {
        return $this->CI->profitmodel->get_transaction_summary($storeid);
    }
      public function StoreBasictransaction($storeid) {
        return $this->CI->profitmodel->StoreBasictransaction($storeid);
    }
    
     public function get_transaction_details() {
        return $this->CI->profitmodel->get_transaction_details();
    }
    
    public function get_all_service($param, $with_service_tax, $commission) {
        return $this->CI->profitmodel->get_all_service($param, $with_service_tax, $commission); 
    }
    
    public function get_all_spare($param) {
        return $this->CI->profitmodel->get_all_spare($param);
    }
    public function addinvoice($param) {
        return $this->CI->profitmodel->addinvoice($param);
    }
    
    public function change_order_status($param,$type) {
        return $this->CI->profitmodel->change_order_status($param,$type);
    }
    public function get_invoice_details($id) {
        return $this->CI->profitmodel->get_invoice_details($id);
    }
    public function get_data($param) {
        return $this->CI->profitmodel->get_data($param);
    }
    public function addpaid($id, $param) {
        return $this->CI->profitmodel->addpaid($id, $param);
    }
    public function update_invoice($id, $param) {
        $this->CI->profitmodel->update_invoice($id, $param);
    }
}

?>