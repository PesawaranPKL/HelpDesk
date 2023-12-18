<?php

namespace App\Controllers;

class TicketController extends BaseController
{
    public function index(): string
    {
        return view('tracking_ticket');
    }

    public function detail_ticket(): string
    {
        return view('tracking_ticket_detail');
    }
}
