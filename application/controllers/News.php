<?php
/**
 * Created by PhpStorm.
 * User: grim
 * Date: 8/17/17
 * Time: 2:25 PM
 */

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');

    }
    public function index(){
        $data55['newss']=$this->news_model->get_news();
    //newss should be in view in foreach
        $data55['title']='News archive';
        $this->load->view('templates/header',$data55);
        $this->load->view('news/index',$data55);
        $this->load->view('templates/footer');
    }
    public function view($slug=NULL)
    {
        $data['news_item']=$this->news_model->get_news($slug);
        if (empty($data['news_item'])){
            show_404();
        }
        $data['title']=$data['news_item']['title'];
        $this->load->view('templates/header',$data);
        $this->load->view('news/view',$data);
        $this->load->view('templates/footer');
    }
    public function create(){

        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title']='createa a news title';
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('text','Text','required');
        if($this->form_validation->run()===false){
            $this->load->view('templates/header',$data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
        }else{
            $this->news_model->set_news();
            $this->load->view('news/success');
        }
    }
}