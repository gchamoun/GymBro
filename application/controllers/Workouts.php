<?php
class Workouts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Workouts_model');
        $this->load->helper('url_helper');
    }
    public function getWorkouts()
    {
        $workouts = $this->Workouts_model->getWorkouts();
        echo json_encode(array('results' => $workouts));
    }
    public function getWorkoutsLeaderboard()
    {
        $workouts = $this->Workouts_model->getWorkoutsLeaderboard();
        echo json_encode(array('results' => $workouts));
    }
}
