<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('home/home');
    }
    public function Blog()
    {
        $this->load->view('home/blog');
    }
    public function Works()
    {
        $this->load->view('home/works');
    }
    public function Worksdetail()
    {
        $this->load->view('home/worksdetail');
    }

    public function cv()
    {

        $data['cv_data']  = $this->mcv->getData();
        $data['hobbies']  = $this->mcv->getHobbies();
        $data['social_medias']  = $this->mcv->getSocial();
        $data['educations']  = $this->mcv->getEducations();
        $data['experiences']  = $this->mcv->getExperiences();
        $data['languages']  = $this->mcv->getLanguages();
        $data['skills']  = $this->mcv->getSkills();
        // $this->load->view('cv/cv', $data);
        $this->load->library('pdf');
        $this->pdf->setFileName('CV-Hemalia.pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->loadView('cv/cv', $data);
    }
}
