<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ChatBotModel;
use CodeIgniter\API\ResponseTrait;

class ChatBotController extends BaseController
{
    use ResponseTrait;

    public function __construct()
    {
        $this->chatbotModel = new ChatBotModel();
        
    }
    public function index()
    {
        return view('testing');
    }
    public function json_parent()
    {
        $response =  $this->chatbotModel->parent_bot();
        return $this->respond($response);
    }
    public function json_chill($id)
    {
        $response =  $this->chatbotModel->getAnak($id);
        return $this->respond($response);
    }
}
