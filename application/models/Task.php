<?php
/**
 * Created by PhpStorm.
 * User: grim
 * Date: 8/18/17
 * Time: 9:58 AM
 */

class Task extends CI_Model
{
public function __construct()
{
    $this->load->database();
}
    public function listout(){
        $query=$this->db->get('tasks');

        return $query->result_array();
    }
    public function store(){
        $this->load->helper('url');
        $data=array(
            'name'=>$this->input->post('name'),
            'address'=>$this->input->post('address'),
            'dob'=>$this->input->post('dob'),
            'contact'=>$this->input->post('contact')

        );
        return $this->db->insert('tasks',$data);
    }
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('tasks');
    }
    public function edit($id){
        $data=array(
            'name'=>$this->input->post('name'),
            'address'=>$this->input->post('address'),
            'dob'=>$this->input->post('dob'),
            'contact'=>$this->input->post('contact')
        );
        $this->db->where('id',$id);
        $this->db->update('tasks',$data);
    }
}