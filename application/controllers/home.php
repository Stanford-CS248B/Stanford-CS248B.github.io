<?php

class home extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        // $this->load->model('articles_model');
        $this->load->model('lectures_model');
        // $this->load->model('slides_model');
        // $this->load->model('newsfeed_model');
        // $this->load->model('comments_model');
        // $this->load->model('votes_model');
        // $this->load->helper(array('form', 'url', 'course_url'));
    }

    function index() {
        // TODO(mburman) This should be a config.
        $data['lectures_uploaded'] = $this->lectures_model->get_all();
        $this->load_view('Home', 'home', $data);
    }
}
?>