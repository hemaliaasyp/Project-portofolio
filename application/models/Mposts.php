<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mposts extends CI_Model
{
    private $table = "posts";
    public function getAll()
    {
        $this->db->select([
            "p.id",
            "p.title",
            "p.content",
            "p.featured_image",
            "p.created_at",
            "p.updated_at",
            "u.name as created_by",
            "u2.name as updated_by"
        ]);
        $this->db->join("users u", "u.id = p.created_by", "left");
        $this->db->join("users u2", "u2.id = p.updated_by", "left");
        $getAll = $this->db->get($this->table . ' p')->result();
        return $getAll;
    }
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }
    public function getDetail($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->result();
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array('id' => $id));
    }
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
    public function ambildata($table)
    {
        return $this->db->get($table);
    }

    private function querydatatable($search, $start, $length, $filter)
    {
        $this->db->select([
            "p.id",
            "title",
            "featured_image",
            "created_at",
            "u.name as created_by",
            "u2.name as updated_by",
            "updated_at",
        ]);

        if ($search["value"] != "") {
            $this->db->or_like([
                "title"        => $search["value"],
                "content"    => $search["value"]
            ]);
        }
        if ($filter["category"] != "") {
            $this->db->or_where_in("category_id", $filter["category"]);
        }

        $this->db->order_by("created_at asc");
        $this->db->join("users u", "u.id = p.created_by", "left");
        $this->db->join("users u2", "u2.id = p.updated_by", "left");
        $this->db->join("post_categories pc", "pc.post_id = p.id", "left");
        $this->db->group_by("p.id");
        $this->db->limit($length, $start);

        $posts = $this->db->get($this->table . " p");
        return $posts;
    }

    public function getdatatable($search, $start, $length, $filter)
    {
        $posts = $this->querydatatable($search, $start, $length, $filter)->result();
        return $posts;
    }
    public function countTotal()
    {
        return $this->db->count_all($this->table);
    }

    public function countFiltered($search, $start, $length, $filter)
    {
        $posts = $this->querydatatable($search, $start, $length, $filter);
        return $posts->num_rows();
    }
}
