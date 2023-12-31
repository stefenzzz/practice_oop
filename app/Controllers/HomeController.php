<?php

namespace App\Controllers;

use App\{View, App, Container};
use App\Services\InvoiceService;

// use PDO;
// use App\Models\{User,Invoice,SignUp};

class HomeController
{

    public function __construct(private InvoiceService $invoiceService)
    {

    }
    public function index(): View
    {   
        
        
        $this->invoiceService->process([],25);
        return View::make('index');
    }
}