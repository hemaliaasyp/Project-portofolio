<?php

class Posts  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mposts");
        $this->load->library('form_validation');
    }
    function index()
    {
        $data['categories'] = $this->mcategory->getAll();
        $data['posts']  = $this->mposts->getAll();
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('posts/posts', $data);
        $this->load->view('layout/footer');
    }
    public function create()
    {
        $data['categories'] = $this->mcategory->getAll();
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('posts/create', $data);
        $this->load->view('layout/footer');
    }
    public  function detail($id)
    {

        $data['posts'] = $this->Mposts->getDetail($id);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('posts/detail', $data);
        $this->load->view('layout/footer');
    }
    public function save()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('featured_image', 'Featured Image', 'required');
        // $this->form_validation->set_rules('updated_by', 'Updated By');
        // $this->form_validation->set_rules('created_by', 'Created By');
        // $this->form_validation->set_rules('updated_by', 'Updated By');
        // $this->form_validation->set_rules('created_by', 'Created By');
        if ($this->form_validation->run() == true) {
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $category_id = $this->input->post('category_id');
            $featured_image = $this->input->post('featured_image');


            $data = array(
                'title' => $title,
                // 'year' => $year,
                'content' => $content,
                'featured_image' => $featured_image,
                'created_by' => $this->session->userdata('id'),
                // 'updated_by' => $this->session->userdata('id'),
            );
            $this->Mposts->save($data);
            $post_id = $this->db->insert_id();
            foreach ($category_id as $category) {
                $dt = array(
                    'post_id' => $post_id,
                    'category_id' => $category
                );
                // $this->Mposts->save($dt);
                $this->db->insert('post_categories', $dt);
            }
            if ($data) {
                set_pesan('Data berhasil ditambahkan');
                redirect('posts');
            } else {
                set_pesan('Gagal menambahkan data');
                redirect('posts/create');
            }
        } else {
            $id = $this->input->post('id');
            $data['categories'] = $this->Mcategory->getById($id);
            $this->load->view('layout/sidebar');
            $this->load->view('layout/navbar');
            $this->load->view('posts/create');
            $this->load->view('layout/footer');
        }
    }
    function edit($id)
    {
        $data['categories'] = $this->mcategory->getAll();
        $data['posts'] = $this->Mposts->getById($id);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('posts/edit', $data);
        $this->load->view('layout/footer');
    }
    public function update()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('featured_image', 'Featured Image', 'required');

        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $featured_image = $this->input->post('featured_image');

            $data = array(
                'id' => $id,
                'title' => $title,
                // 'year' => $year,
                'content' => $content,
                'featured_image' => $featured_image,
                'updated_by' => $this->session->userdata('id'),
            );

            $this->mposts->update($data, $id);
            if ($data) {
                set_pesan('Data berhasil diedit');
                redirect('posts');
            } else {
                set_pesan('Gagal mengedit data');
                redirect('posts/create');
            }
        } else {
            // $id = $this->input->post('id');
            // $data['posts'] = $this->Mposts->getById($id);
            $this->load->view('layout/sidebar');
            $this->load->view('layout/navbar');
            $this->load->view('posts/create');
            $this->load->view('layout/footer');
        }
    }
    function delete($id)
    {
        $this->Mposts->delete($id);
        if ($id) {
            set_pesan('Data berhasil dihapus');
            redirect('posts');
        } else {
            set_pesan('Gagal menghapus data');
            redirect('posts');
        }
    }
    public function datatable()
    {
        $search = $this->input->post("search");
        $draw  = intval($this->input->post("draw"));
        $start  = intval($this->input->post("start"));
        $length  = intval($this->input->post("length"));
        // $posts = $this->Mposts->getdatatable($search, $start, $length);
        $no = $start + 1;
        $filter = [
            "category" => $this->input->post("category")
        ];
        $posts = $this->mposts->getdatatable($search, $start, $length, $filter);
        $no = $start + 1;

        foreach ($posts as $i => $post) {
            $post->no = $no++;
        }

        $countAll = $this->Mposts->countTotal();
        $countFiltered = $this->Mposts->countFiltered($search, $start, $length, $filter);

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode([
                "draw"                => $draw,
                "recordsTotal"        => $countAll,
                "recordsFiltered"    => $countFiltered,
                "data"                => $posts
            ]));
    }
}
