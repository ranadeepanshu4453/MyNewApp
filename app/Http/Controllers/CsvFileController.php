<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CsvFileController extends Controller
{
    public function show(){
        return view('Dashboard.import');
    }
    public function import(Request $request){
        $request->validate([
            'importfile'=>'required|mimes:csv,txt',
        ]);
        
        $data=Excel::toArray($this,$request->file('importfile'));

        return redirect()->route('importShow')->with('data',$data[0]);
    }

}
