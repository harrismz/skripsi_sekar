<?php

namespace App\Http\Controllers\Admin;

use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class VoyagerOverrideController extends VoyagerBaseController
{
    public function create()
    {
        // Tambahkan logika kustom Anda di sini
        // ...

        // Panggil fungsi create asli dari VoyagerBaseController
        return parent::create();
    }
}
