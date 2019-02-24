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
        $users = $this->Workouts_model->getWorkouts();
    }
}
