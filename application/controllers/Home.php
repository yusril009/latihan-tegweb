<?php
class Home extends CI_Controller
{
    function index()
    {
        $data['nama'] = "Albert";
        $data['judul'] = "Codeigniter";
        $this->load->view("header", $data);
        $this->load->view("navigation");
        $this->load->view("content1", $data);
        $this->load->view("footer");
    }
    function yusril()
    {
        $data['judul'] = "Bio Yusril";
        $this->load->view("header", $data);
        $this->load->view("navigation");
        $this->load->view("bio-yusril");
        $this->load->view("footer");
    }
    function renal()
    {
        $data['judul'] = "Bio Renal";
        $this->load->view("header", $data);
        $this->load->view("navigation");
        $this->load->view("bio-renal");
        $this->load->view("footer");
    }
    function country()
    {
    }
}