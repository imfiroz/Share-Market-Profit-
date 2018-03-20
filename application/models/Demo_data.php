<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
class Demo_data extends CI_Model 
        {
            var $meeting_data =  'tbl_meeting_request';
             public function __construct()
                    {
                        parent::__construct();
                        $this->load->database();
                    }
                    public function sw_search($keyword)
    {
        $this->db->select('Hsn_Id, Hsn_Code');
        $this->db->from('tbl_hsn');
       // $this->db->where('suppress', 0);
        $this->db->like('Hsn_Code', $keyword);
        $this->db->order_by("Hsn_Code", "asc");
 
        $query = $this->db->get();
        foreach($query->result_array() as $row){
            //$data[$row['friendly_name']];
            $data[] = $row;
        }
        //return $data;
        return $query;
    }

        }