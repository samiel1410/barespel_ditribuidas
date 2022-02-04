<?php

namespace Yuanrang\JunitLaravel\Http\Controllers;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function index()
    {
        return '测试index';
    }
}