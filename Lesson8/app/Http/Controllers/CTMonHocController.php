<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CTMonHocController extends Controller
{
    //
    public function ctGetData(){
        $monhoc = DB::select("Select * FROM CTMONHOC");
        return view('ctmonhoc',['monhoc'=>$monhoc]);
    }
    public function ctGetDetail($mamh){
        $monhoc = DB::select("Select * from CTMONHOC where CTMAMH=?",[$mamh])[0];
        return view('ctdetailmh',['monhoc'=>$monhoc]);
    }
    public function ctEdit($mamh)
    {
        // Fetch the record based on CTMAMH
        $monhoc = DB::select("SELECT * FROM CTMONHOC WHERE CTMAMH = ?", [$mamh]);

        // Check if a record was found
        if (empty($monhoc)) {
            return redirect('/home')->with('error', 'Record not found.');
        }

        return view('ctedit', ['monhoc' => $monhoc[0]]);
    }

    public function ctEditSubmit(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'CTMAMH' => 'required|string|max:2',
            'CTTENMH' => 'required|string|max:50',
            'CTSOTIET' => 'required|integer|max:99',
        ]);

        // Get the input values
        $mamh = $request->input('CTMAMH');
        $tenmh = $request->input('CTTENMH');
        $sotiet = $request->input('CTSOTIET');

        // Update the record in the database
        DB::update("UPDATE CTMONHOC SET CTTENMH = ?, CTSOTIET = ? WHERE CTMAMH = ?", [$tenmh, $sotiet, $mamh]);

        return redirect('/home')->with('success', 'Record updated successfully.');
    }
    public function ctDeleteSubmit($mamh){
        // lay ma de xoa
        $mamh= DB::delete("DELETE FROM CTMONHOC WHERE CTMAMH=?",[$mamh]);
        return redirect('/home')->with('success','xoa thanh cong');
    }
    public function ctCreate()
    {
        return view('ctcreate');
    }

    // Handle the form submission to insert a new subject
    public function ctStore(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'CTMAMH' => 'required|string|max:2',
            'CTTENMH' => 'required|string|max:50',
            'CTSOTIET' => 'required|integer|min:1|max:255',
        ]);

        // Insert the new subject into the database
        DB::table('CTMONHOC')->insert([
            'CTMAMH' => $request->input('CTMAMH'),
            'CTTENMH' => $request->input('CTTENMH'),
            'CTSOTIET' => $request->input('CTSOTIET'),
        ]);

        return redirect('/home')->with('success', 'Subject added successfully.');
    }
}
