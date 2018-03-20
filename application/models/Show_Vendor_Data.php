<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
class Show_Vendor_Data extends CI_Model 
	{
        var $business_table = 'business_category';
        var $business_sub_table = 'business_sub_category';
        var $relation = 'tbl_vendor_customer_relation';
          public function __construct()
            {
                    parent::__construct();
                    $this->load->database();
            }
            function getcount_for_vendor_according_date($month,$year,$previous_month){ 	            
     $query=$this->db->query("select Count(Vendor_Id)as name from tbl_vendor where Date >= '".$year."/".$month."/01 00:00:00' and Date <= '".$year."/".$month."/30 23:59:59'"); 
    $aa = $query->row()->name;  
    $query1=$this->db->query("select Count(Vendor_Id) as name from tbl_vendor where Date >= '".$year."/".$previous_month."/01 00:00:00' and Date <= '".$year."/".$previous_month."/30 23:59:59'");
    $ab = $query1->row()->name; 
     $data=array("recent"=> $aa,"previous"=>$ab);
     return $data;
                }
                function get_product_count_of_vendor($id){                   
            $this->db->where('Vendor_Id',$id);			
            $this->db->where('is_active',0);
			$email_id = $this->db->get($this->product_version_table);
			return $email_id;       
                }
                 function get_product_total_count(){
                      $v_id  = $this->session->userdata('Vendor_Id');					 
                      $query=$this->db->query("select * from  tbl_product_version where is_active=0 and Vendor_id=".$v_id);
			return $query;       
                }
                function get_product_count(){                         			
               $query=$this->db->query("select tbl_product_version.product_version_name,tbl_vendor.Name from tbl_product_version LEFT JOIN tbl_vendor on tbl_vendor.Vendor_Id=tbl_product_version.Vendor_id WHERE tbl_product_version.is_approved=0 and tbl_vendor.role_id<>5 and tbl_product_version.is_active=0");
				return $query;       
                }
                 function getdaily_earning($today,$month,$year,$p_date){
                       // 2017/11/01 00:00:00' and invoice_date <= '2017/11/01 23:59:59'select sum(Final_Amount) as name from tbl_customer_agreement where invoice_date >= '2017$p_date=1/12/2 00:00:00' and invoice_date <= '2017$p_date=1/12/223:59:59
                  $query=$this->db->query("select sum(Final_Amount) as name from tbl_customer_agreement where invoice_date >= '".$year."/".$month."/".$today." 00:00:00' and invoice_date <= '".$year."/".$month."/".$today." 23:59:59'"); 
                     $aa = $query->row()->name;  
                 $query1=$this->db->query("select sum(Final_Amount) as name from tbl_customer_agreement where invoice_date >= '".$year."/".$month."/".$p_date." 00:00:00' and invoice_date <= '".$year."/".$month."/".$p_date." 23:59:59'");
                    $ab = $query1->row()->name; 
                    $data=array("recent"=> $aa,"previous"=>$ab);
                     return $data;
                }
                function getdaily_sales($today,$month,$year,$p_date){
                       // 2017/11/01 00:00:00' and invoice_date <= '2017/11/01 23:59:59'select sum(Final_Amount) as name from tbl_customer_agreement where invoice_date >= '2017$p_date=1/12/2 00:00:00' and invoice_date <= '2017$p_date=1/12/223:59:59
                  $query=$this->db->query("select count(Customer_Agreement_Id) as name from tbl_customer_agreement where invoice_date >= '".$year."/".$month."/".$today." 00:00:00' and invoice_date <= '".$year."/".$month."/".$today." 23:59:59'"); 
                     $aa = $query->row()->name;  
                 $query1=$this->db->query("select count(Customer_Agreement_Id) as name from tbl_customer_agreement where invoice_date >= '".$year."/".$month."/".$p_date." 00:00:00' and invoice_date <= '".$year."/".$month."/".$p_date." 23:59:59'");
                    $ab = $query1->row()->name; 
                    $data=array("recent"=> $aa,"previous"=>$ab);
                     return $data;
                }
                function getsatsifaction(){ 
			$this->db->select('Avg(rating) as name');
                            $this->db->from('tbl_ratings');										
                            $earnings= $this->db->get()->row()->name;			 			
			return $earnings;       
                }
                function get_graph_info(){
							$email_id=$this->db->query("SELECT sum(tbl_customer_agreement.Final_Amount) as sale,tbl_payment_way.name from tbl_customer_agreement left join tbl_payment_way on tbl_customer_agreement.sale_type= tbl_payment_way.payment_id where  tbl_customer_agreement.is_payment=1 group by tbl_customer_agreement.sale_type");
							return $email_id;       
                }
                 function get_trending_product_by_cat(){
                        $email_id=$this->db->query("select  count(tbl_customer_agreement_transaction.product_id)as count, SUM(tbl_customer_agreement_transaction.Final_Amount) as total_sale,tbl_customer_agreement_transaction.Product_vendor_id,tbl_customer_agreement_transaction.product_id,tbl_vendor.Name as vendorname,tbl_product_category_new.Name as category_name from tbl_customer_agreement_transaction  left join  tbl_vendor on tbl_customer_agreement_transaction.Product_vendor_id=tbl_vendor.Vendor_Id left join tbl_product_category_new on tbl_product_category_new.product_category_id=tbl_vendor.business_category_id  where tbl_customer_agreement_transaction.is_payment=1 group by tbl_product_category_new.product_category_id 
ORDER BY SUM(tbl_customer_agreement_transaction.Final_Amount) desc LIMIT 5");
                        return $email_id;       
                }
                 function fetch_feedback_data()
                 {                   
                   $user = $this->db->query("SELECT tbl_feedback.msg,tbl_customer.Name from tbl_feedback left join tbl_customer on tbl_feedback.customer_id=tbl_customer.Customer_id");
                   return $user;
                 }
                 function get_total_sale_value(){
                     $this->db->select('sum(Final_Amount) as name');
                      $this->db->from('tbl_customer_agreement_transaction');	
                      $this->db->where('is_payment',1);            
                       $data_send=$this->db->get()->row()->name;
                       return $data_send;
                }
                  function getVendor_Data()
                {	
		$role_id=$this->session->userdata('role_id');					
		if($role_id==1)	{				
                    $this->db->select('Vendor_Id,Name');
                    $this->db->from('tbl_vendor');
                     $this->db->where('role_id',2);      
                    $this->db->order_by('Name', 'asc');
                    $query = $this->db->get();
                    return $query;
                }		
                } 
        }
        ?>