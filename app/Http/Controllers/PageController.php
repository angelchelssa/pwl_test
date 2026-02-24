<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return ' 244107020202 / Angel Chelssa Leoniy Eka Permatasari';
    }

    public function articles($id)
    {
        return 'halaman artikel dengan id ' . $id;
    }
}
