<?php

namespace App\Controllers;

use App\Models\PengaduanModel;
use App\Models\KategoriModel;

class TicketController extends BaseController
{
    public function index(): string
    {
        return view('tracking_ticket');
    }

    public function detail_ticket(): string
    {
        $data = $this->request->getGet();
        if ($data) {

            if ($data['token'] != NULL) {

                $model = new PengaduanModel();
                // $datas['hasil'] = true;
                $datas['pengadu'] = $model->get_status_pengaduan($data['token']);

                if ($datas['pengadu'] == null || $datas['pengadu'] == false) {
                    $datas['hasil'] = false;
                } else {
                    $datas['hasil'] = true;
                }
                // var_dump($datas['data_beasiswa']);

            } else {

                $datas['hasil'] = false;
            }
            // return view('hasil', $datas);
            // var_dump($datas);

        } else {
            $datas['hasil'] = false;
            // return view('hasil', $datas);
        }

        // $datas['title'] = "Cek Status Pengaduan";
        $model = new KategoriModel();
        // $datas['kategori'] = $model->get_kategori();
        return view('tracking_ticket_detail', $datas);
        // return view('tracking_ticket_detail');
    }
}
