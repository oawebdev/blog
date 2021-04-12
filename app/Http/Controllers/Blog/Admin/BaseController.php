<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Http\Controllers\Blog\BaseController as BlogBaseController;

abstract class BaseController extends BlogBaseController
{
    /**
     * BaseController constructor
     */
    public function __construct()
    {
        //Ініціалізація загальних елементів адмінки
    }
}
