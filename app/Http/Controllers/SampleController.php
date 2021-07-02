<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\DevicesImport;
use Maatwebsite\Excel\Facades\Excel;

class SampleController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }
      
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new DevicesImport,request()->file('file'));
              
        return back();
    }
}
