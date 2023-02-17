
<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mcv extends CI_Model
{
    private $a = "cv_data";
    private $b = "hobbies";
    private $c = "social_medias";
    private $d = "educations";
    private $e = "experiences";
    private $f = "languages";
    private $g = "skills";

    public function getData()
    {
        return $this->db->get($this->a)->result_array();
    }
    public function getHobbies()
    {
        return $this->db->get($this->b)->result_array();
    }
    public function getSocial()
    {
        return $this->db->get($this->c)->result_array();
    }
    public function getEducations()
    {
        return $this->db->get($this->d)->result_array();
    }
    public function getExperiences()
    {
        return $this->db->get($this->e)->result_array();
    }
    public function getLanguages()
    {
        return $this->db->get($this->f)->result_array();
    }
    public function getSkills()
    {
        return $this->db->get($this->g)->result_array();
    }
}
