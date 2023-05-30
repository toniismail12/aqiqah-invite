<?php

namespace App\Http\Controllers;

use App\Models\BioModel;
use App\Models\Deskripsi;
use App\Models\more;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function updateInfo(Request $request)
    {

        if($request->kode == null || $request->kode !== "zhafira") {
            return redirect("/");
        }

        return view('dashboard.index', [
            'kode' => $request->kode,
            'bio'=> BioModel::all(),
            'desc'=> Deskripsi::all(),
            'more'=> more::all(),
        ]);
    }

    public function updateBio(Request $request)
    {

        if($request->kode == null || $request->kode !== "zhafira") {
            return redirect("/");
        }

        return view('dashboard.update-bio', [
            'kode' => $request->kode,
            'bio'=> BioModel::all(),
        ]);
    }

    public function simpanupdateBio(Request $request)
    {

        BioModel::where('id', '1')->update([
            "nama"=>$request->nama,
            "tanggal_lahir"=>$request->tanggal_lahir,
            "tempat_lahir"=>$request->tempat_lahir,
        ]);

       return redirect("/update-info?kode=zhafira");
    }

    public function updateDeskripsi(Request $request)
    {

        if($request->kode == null || $request->kode !== "zhafira") {
            return redirect("/");
        }

        return view('dashboard.update-deskripsi', [
            'kode' => $request->kode,
            'desc'=> Deskripsi::all(),
        ]);
    }

    public function simpanupdateDeskripsi(Request $request)
    {

        Deskripsi::where('id', '1')->update([
            "tanggal_acara"=>$request->tanggal_acara,
            "jam_acara"=>$request->jam_acara,
            "judul"=>$request->judul,
            "kata_pembuka"=>$request->kata_pembuka,
            "kata_penutup"=>$request->kata_penutup,
            "alamat"=>$request->alamat,
        ]);

       return redirect("/update-info?kode=zhafira");
    }

    public function updateMore(Request $request)
    {

        if($request->kode == null || $request->kode !== "zhafira") {
            return redirect("/");
        }

        return view('dashboard.update-yb', [
            'kode' => $request->kode,
            'more'=> more::all(),
        ]);
    }

    public function simpanupdateMore(Request $request)
    {

        more::where('id', '1')->update([
            "yang_berbahagia"=>$request->yang_berbahagia,
        ]);

       return redirect("/update-info?kode=zhafira");
    }

}

