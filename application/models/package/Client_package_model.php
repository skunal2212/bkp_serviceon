<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class CLient_package_model extends CI_Model {
	
	function __construct() {
		parent::__construct ();
	}
	
	public function addPackage($package) {
		$this->db->insert ( TABLES::$ClientPackage, $package ); 
		return $this->db->insert_id();
	}

	public function addbatchPackageModels($packagemodels) {
		$this->db->insert_batch ( TABLES::$ClientPackageModels, $packagemodels ); 
	}

	public function addbatchPackageServices($packageservices) {
		$this->db->insert_batch ( TABLES::$ClientPackageServices, $packageservices ); 
		$data ['status'] = 1;
		$data ['msg']    = "Added successfully";
		return $data;
	}

	public function get_services_by_id($param) {
            $data['service'] = $this->db->select('*')
                            ->from('service')
                            ->where_in('id', $param['service_id'])
                            ->get()
                            ->result_array();
            return $data;
            
    }

    public function getAllPackageList(){
        $this->db->select ( '*' )->from ( TABLES::$ClientPackage);
		 $this->db->order_by('id','DESC');
        $query = $this->db->get (); 
		$result = $query->result_array ();
		return $result;
    }

    public function getPackageId($a) {
		$this->db->select ( 'a.*' )->from ( TABLES::$ClientPackage . ' AS a' )->where ( 'a.id', $a );
		$query = $this->db->get ();
		$result = $query->result_array ();
		return $result;
	}

	public function update($package) {
		$this->db->where ( 'id',  $package['id'] );
		$this->db->update ( TABLES::$ClientPackage, $package );
	}
    
    public function getPackageModels($a) {
    	$this->db->select ( 'a.*,b.name as modelname' )->from ( TABLES::$ClientPackageModels . ' AS a' )
    	->join ( TABLES::$MANUFACTURE . ' AS b', 'a.model_id = b.id', 'inner' )
    	->where ( 'a.package_id', $a );
		$query = $this->db->get ();
		$result = $query->result_array ();
		return $result;
    }

    public function  getPackageServices($a) {
    	$this->db->select ( 'a.*,b.name as servicename' )->from ( TABLES::$ClientPackageServices . ' AS a' )
    	->join ( TABLES::$SERVICE . ' AS b', 'a.service_id = b.id', 'inner' )
    	->where ( 'a.package_id', $a );
		$query = $this->db->get ();
		$result = $query->result_array ();
		return $result;
    }
    
    public function updateBatchPackageModels($package) {
    	return $this->db->update_batch(TABLES::$ClientPackageModels,$package,'package_id');
    }

    public function updateBatchPackageServices($package) {
    	 $this->db->update_batch(TABLES::$ClientPackageServices,$package,'package_id');
    }

    public function PackageNameAlreadyExist($key)
    {

    $this->db->where('package_name',$key);
    $query = $this->db->get(TABLES::$ClientPackage);
    if ($query->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
   }
   
   public function RemoveServices($package_Id)
    {
     
     $this->db->where('package_id', $package_Id);  
     return $this->db->delete(TABLES::$ClientPackageServices); 

    }

    public function RemoveModel($package_Id)
    {

     $this->db->where('package_id', $package_Id);  
     return $this->db->delete(TABLES::$ClientPackageModels); 

    }
    public function  get_packagename_by_modelid($model_id) {
        $this->db->select ( 'a.*' )->from ( TABLES::$ClientPackage . ' AS a' )
        ->join ( TABLES::$ClientPackageModels . ' AS b', 'a.id = b.package_id', 'inner' )
         ->where ( 'a.status', 1 )->where ( 'b.model_id', $model_id );
        $query = $this->db->get ();
        $result = $query->result_array ();
        return $result;
    }
    public function getActivePackages(){
        $this->db->select ( '*' )
                 ->from ( TABLES::$ClientPackage)
                 ->where ( 'status', 1 ); 
        $query = $this->db->get ();
        $result = $query->result_array ();
        return $result;
    } 
    public function get_userpackage_by_packageid($user_id,$vehicle_id,$package_id) {
        

        $this->db->select ( 'a.*' )->from ( TABLES::$USER_PACKAGES . ' AS a' )
                 ->where ( 'a.user_id', $user_id )
                 ->where ( 'a.vehicle_id', $vehicle_id )
                 ->where ( 'a.package_id', $package_id )
                 ->where ( 'a.remaining_service_count != ', 0) 
                 ->where ( 'a.expiry_date >=', date('Y-m-d'))  
                 ->order_by('a.id','ASC') ;
        $query = $this->db->get ();
        $result = $query->result_array ();
        return $result;
    }

   
}