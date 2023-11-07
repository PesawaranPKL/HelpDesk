<?php

if (!function_exists('uploadFile')) {
    function uploadFile($inputName, $destinationPath)
    {
        $request = service('request');
        $file = $request->getFile($inputName);

        if ($file->isValid() && !$file->hasMoved()) {
            $randomName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/file_upload/' . $destinationPath, $randomName);
            return $randomName;
        }

        return null;
    }
}
/* 
    => cara penggunaan, kalian masukan ke function construct : 
        "helper('upload');"

    => untuk penggunaan pada saat upload silahkan gunakan
     "$nama_variable_untukrandomname = uploadFile('nama_variabel_post', 'PATH');"

    => PATH itu contohnya "artikel/tumbnail"
*/
