<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class Welcome extends REST_Controller
{

    function __construct()
    {
        parent::__construct();
        // $this->load->model('Api_model', 'model');
        $this->load->database();
    }

    public function index_options()
    {
        $this->set_response(null, 204);
    }

    private function checkToken()
    {
        $headers = $this->input->request_headers();

        if (array_key_exists('Authorization', $headers) && !empty($headers['Authorization'])) {
            $decodedToken = AUTHORIZATION::validateTimestamp(trim(substr($headers['Authorization'], 7)));
            if ($decodedToken != false) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
	}
}