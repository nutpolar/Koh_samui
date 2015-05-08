<?php

class event_m extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    public function get_event() {
        //return $this->db->get('tb_event')->result();
        $this->db->select("*");
        $this->db->from("tb_event");
        $this->db->order_by('DATE(tb_event.date)');
        $this->db->order_by('MONTH(tb_event.date)');
        return $this->db->get()->result();
    }

    public function get_edit_event($id) {
        return $this->db->where('id',$id)->get('tb_event')->row();
    }
    
    public function insert_event($input = array()) {
        $star_exp = explode(" ", $input['date']);
        $date = strtotime($star_exp[2] . "-" . $star_exp[1] . "-" . $star_exp[0]);
        $data = array(
            'title' => $input['name'],
            'date' => date('Y-m-d 00:00:00', $date),
            'url' => $input['link'],
            'detail' => $input['detail'],
        );
        $this->db->insert('tb_event', $data);
        return TRUE;
    }
    public function update_event($event_id,$input = array()){
        $star_exp = explode(" ", $input['date']);
        $date = strtotime($star_exp[2] . "-" . $star_exp[1] . "-" . $star_exp[0]);
        $data = array(
            'name' => $input['name'],
            'date' => date('Y-m-d 00:00:00', $date),
            'url' => $input['link'],
            'detail' => $input['detail'],
        );
        $this->db->where('id',$event_id);
        $this->db->update('tb_event',$data);
        //echo '<pre>';        print_r($data); exit;
        return TRUE;
    }
     public function delete_event($id){
        $this->db->where('id', $id);
        $this->db->delete('tb_event'); 
        return TRUE;
    }
    
    
}