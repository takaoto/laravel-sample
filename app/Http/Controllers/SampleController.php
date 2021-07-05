<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\DevicesImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class SampleController extends Controller
{
    /**
     * 初期画面表示
     * 
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }
      
    
    /**
     * CSVアップロード・DB保存サンプル
     * 
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new DevicesImport,request()->file('file'));
              
        return back();
    }

    /**
     * ファイルアップロードサンプル
     *
     * @param Request $request
     * @return void
     */
    public function upload(Request $request)
    {
        $file = $request->file('uploadFile');


        if (!is_null($file)) {

            $file_name = $file->getClientOriginalName();

            Storage::putFileAs('', $file, $file_name);
        }

        return view('import');
    }
}
