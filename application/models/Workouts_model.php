<?php
class Workouts_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getWorkouts()
    {
        $query = $this->db->query("select *
  from   workouts");
        return json_encode($query->result_array());
    }
}
