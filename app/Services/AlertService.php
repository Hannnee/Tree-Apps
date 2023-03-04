<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;

class AlertService extends Service
{
    protected $status;
    protected $message;

    public function __construct($status, $message)
    {
        $this->status = $status;
        $this->message = $message;
    }

    public function showAlert()
    {
        Session::flash('status', $this->status);
        Session::flash('messages', $this->message);
    }
}
