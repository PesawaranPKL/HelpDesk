<?php

namespace App\Controllers;

class TicketController extends BaseController
{
    public function index(): string
    {
        return view('tracking_ticket');
    }
}
