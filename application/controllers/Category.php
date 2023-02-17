<?php

class Category  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mcategory");
        $this->load->library('form_validation');
    }
    public  function index()
    {
        $data['categories'] = $this->mcategory->getAll();
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('category/category', $data);
        $this->load->view('layout/footer');
    }
    public  function create()
    {
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('category/create');
        $this->load->view('layout/footer');
    }
    public function save()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run() == true) {
            $data['name'] = $this->input->post('name');
            $this->Mcategory->save($data);
            if ($data) {
                set_pesan('Data berhasil disimpan');
                redirect('category');
            } else {
                set_pesan('Gagal menyimpan data');
                redirect('category/create');
            }
        } else {
            // $id = $this->input->post('id');
            // $data['categories'] = $this->Mcategory->getById($id);
            $this->load->view('layout/sidebar');
            $this->load->view('layout/navbar');
            $this->load->view('category/create');
            $this->load->view('layout/footer');
        }
    }

    function edit($id)
    {
        $data['categories'] = $this->Mcategory->getById($id);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('category/edit', $data);
        $this->load->view('layout/footer');
    }
    public function update()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $data['name'] = $this->input->post('name');
            $this->Mcategory->update($data, $id);
            if ($data) {
                set_pesan('Data berhasil diedit');
                redirect('category');
            } else {
                set_pesan('Gagal mengedit data');
                redirect('category/edit');
            }
        } else {
            $id = $this->input->post('id');
            $data['categories'] = $this->Mcategory->getById($id);
            $this->load->view('layout/sidebar');
            $this->load->view('layout/navbar');
            $this->load->view('category/edit', $data);
            $this->load->view('layout/footer');
        }
    }
    function delete($id)
    {
        $this->Mcategory->delete($id);
        if ($id) {
            set_pesan('Data berhasil dihapus');
            redirect('category');
        } else {
            set_pesan('Gagal menghapus data');
            redirect('category');
        }
    }
}
