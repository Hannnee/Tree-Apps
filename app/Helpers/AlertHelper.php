<?php

namespace App\Helpers;

use App\Services\AlertService;
use Illuminate\Support\Facades\Session;

class AlertHelper extends AlertService
{
    public static function fillable($status, $message, $alert)
    {
        $alertService = new AlertService($status, $message);
        $alertService->showAlert();
        Session::flash('alert', $alert);
    }

    public static function soft($status, $message)
    {
        $alertService = new AlertService($status, $message);
        $alertService->showAlert();
    }
}
