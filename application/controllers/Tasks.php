<?php
/**
 * Created by PhpStorm.
 * User: grim
 * Date: 8/18/17
 * Time: 9:58 AM
 */

class Tasks extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('task');
        $this->load->helper('url_helper');
        $this->load->library('form_validation');

    }
    public function index(){

        $data['tasks']=$this->task->listout();
        $data['title']='index page';
        $this->load->view('templates/header',$data);
        $this->load->view('tasks/index',$data);
        $this->load->view('templates/footer',$data);
    }

    public function store(){
    $this->load->helper('form');

    $data['title']='insert some data';
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('address','Address','required');
    $this->form_validation->set_rules('dob','DOB','required');
    $this->form_validation->set_rules('contact','Contact','required|numeric');
    if($this->form_validation->run()===false){
        $this->load->view('templates/header',$data);
        $this->load->view('tasks/index');
        $this->load->view('templates/footer');
    }else{
        $this->task->store();
        $this->load->view('tasks/success');

    }

}
    public function delete_row($id){
    $this->load->model("task");
    $this->task->delete($id);
    return redirect('tasks/');
    }

    public function edit_row($id){

        $this->load->model("task");
        $this->load->edit($id);
//        return redirect('tasks/edit');
    }
}