<?php

namespace App\Http\Controllers;

use App\Antrian;

use carbon\Carbon;

use Illuminate\Http\Requests;

use DB;

use ElephantIO\Client;

use ElphantIO\Engine\SocketIO\version2x;

class AntrianController extends Controller
{
    public function panggil(){
        return view('antrian');
    }

    public function antrian_baru(){
        $day = carbon::now()->format('d');

        $month = carbon::now()->addMonth(1)->format('m');

        $year = carbon::now()->format('Y');

        $antrian = Antrian::where('status', 'GENERATE')

                    ->whereDate('time_generate', date('Y-m-d'))

                    ->orderBy('time_generate', 'asc')

                    ->get();

        return view('antrian_baru', compact('antrian'));

    }

    public function generate(){
        return view('generate');

    }

    public function printAntrian($nama){
        $antrian = Antrian::where('status', 'GENERATE')

                    ->whereDate('time_generate', date('Y-m-d'))

                    ->orderBy('time_generate', 'desc')

                    ->first();

                    if (condition) {
                        # code...
                    } else {
                        # code...
                    }
                    
                    $nomor = (!empty($antrian)) ? $nomor = $antrian->nomor+1 : $nomor = 100 ;
                    
    }


    $simpan_antrian = new Antrian();

    $simpan_antrian->nomor = $nomor;

    $simpan_antrian->time_generate = date('Y-m-d H:i:s');

    $simpan_antrian->time_status = date('Y-m-d H:i:s');

    $simpan_antrian->type_antrian = $nama;

    $simpan_antrian->inisial = $nama;

    $simpan_antrian->status = "GENERATE";

    $simpan_antrian->save();



    $version = new Version2X("http://127.0.0.1:7000");

    $client = new Client($version);

    $client->initialize();

    $client->emit('send data', ['antrian' => 1]);

    $client->close();

}



public function suara(){

    $antrian = Antrian::where('id_antrian',$_GET['id'])

    ->whereDate('time_generate', date('Y-m-d'))

    ->first();



    $panggil = str_replace("", ". ",$antrian->inisial.'. '.$antrian->nomor);



    $version = new Version2X("http://127.0.0.1:7000");

    $client = new Client($version);

    $client->initialize();

    $client->emit('send data', ['suara' =>  1,'panggil' => $panggil]);

    $client->close();

    

}



public function ada_antrian(){

    $antrian = Antrian::where('id_antrian',$_GET['id'])

    ->whereDate('time_generate', date('Y-m-d'))

    ->first();

    $antrian->status = "ADA";

    $antrian->save();



    $version = new Version2X("http://127.0.0.1:7000");

    $client = new Client($version);

    $client->initialize();

    $client->emit('send data', ['ada' => 1]);

    $client->close();

    

}



public function tidak_ada_antrian(){

    $antrian = Antrian::where('id_antrian',$_GET['id'])

    ->whereDate('time_generate', date('Y-m-d'))

    ->first();

    $antrian->status = "TIDAK ADA";

    $antrian->save();



    $version = new Version2X("http://127.0.0.1:7000");

    $client = new Client($version);

    $client->initialize();

    $client->emit('send data', ['ada' => 1]);

    $client->close();

    
    }

}

?>