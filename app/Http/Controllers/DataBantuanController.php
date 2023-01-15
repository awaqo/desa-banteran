<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBantuan;
use App\Models\User;
use App\Imports\DataBantuanImport;
use Maatwebsite\Excel\Facades\Excel;

class DataBantuanController extends Controller
{
    public function index()
    {
        $adminData = User::where('id', '=', auth()->id())->get();
        $dataBantuan = DataBantuan::all();
        return view('admin.data_bantuan.index', compact('adminData', 'dataBantuan'));
    }

    public function import_excel(Request $request)
    {
        try {
            $this->validate($request, [
                'file' => 'required|mimes:csv,xls,xlsx'
            ]);

            $file = $request->file('file');
            $nama_file = time() . '_' . $file->getClientOriginalName();
            $file->move('public/data_bantuan', $nama_file);

            Excel::import(new DataBantuanImport, public_path('data_bantuan/' . $nama_file));

            return redirect('admin/bantuan')->with('success', 'Data penerima bantuan berhasil diimport');
        } catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            dd($errorInfo);
        }
    }
}
