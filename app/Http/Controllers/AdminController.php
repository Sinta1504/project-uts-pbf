<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function formElements()
    {
        return view('admin.form_elements');
    }

    public function tablePlugins()
    {
        return view('admin.table_plugins');
    }

    public function calendar()
    {
        return view('admin.calendar');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function modalNotification()
    {
        return view('admin.modal_notification');
    }
}