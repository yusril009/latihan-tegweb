<?php
class Home extends CI_Controller
{
    function index()
    {
        $data['judul'] = "Home";
        $this->load->view("header", $data);
        $this->load->view("navigation");
        $this->load->view("anggota");
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
    function kresna()
    {
        $data['judul'] = "Bio Kresna";
        $this->load->view("header", $data);
        $this->load->view("navigation");
        $this->load->view("bio-kresna");
        $this->load->view("footer");
    }
    function farhan()
    {
        $data['judul'] = "Bio Farhan";
        $this->load->view("header", $data);
        $this->load->view("navigation");
        $this->load->view("bio-farhan");
        $this->load->view("footer");
    }
    function country()
    {
    }
}