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
        $result= $query->result_array();
        return $result;
    }
    public function getWorkoutsLeaderboard()
    {
        $query = $this->db->query("SELECT pr.weight as pr_weight, user_weight, user_age, date_created, first_name,last_name,username  FROM gym_bros.users_pr pr  left join gym_bros.users users on pr.users_id = users.id
  where workouts_id = 1");
        $result= $query->result_array();
        return $result;
    }
}
