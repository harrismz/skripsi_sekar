<?php
namespace App\Http\Controllers;

use App\Models\Komponen;
use App\Models\MainTransaksi;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaksi;
use App\Models\Proses;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
// use Illuminate\Database\controllers\Controllers;
// use Illuminate\Http\Controllers\Controller;
// use TCG\Voyager\Models\DataType;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // protected $model = Transaksi::class;

    public function index(){
        // $data = Transaksi::all();
        $data_proses = Proses::all();
        // return $data_proses;
        return view('transaksi',['dataProses'=>$data_proses]);
    }


    public function store(Request $request)
    {
        // return $request->report_date;
        $store = MainTransaksi::firstOrCreate([
            'tanggal_transaksi' => $request->report_date,
            'proses_id' => $request->lineproses
            // 'dibuat_oleh' => auth::user()->name
        ]);


        $check_komponen = Komponen::all();


        $lastId = $store->id;

        $parameter = collect($request)->merge(collect($check_komponen));
        // return $this->show_quality_check($parameter,$lastId);
        return redirect()->route('transaksi.quality_check',['last_id'=>$lastId,'parameter'=> $parameter]);

    }

    public function show_quality_check($id){
        // return $id;
        $main_transaksi = new MainTransaksi;
        $transaksi = new Transaksi;
        $main_transaksi = $main_transaksi::select('main_transaksi.id','main_transaksi.proses_id','proses.nama','proses.model','main_transaksi.tanggal_transaksi'
                            ,'main_transaksi.dibuat_oleh','main_transaksi.created_at','main_transaksi.diverifikasi_oleh','main_transaksi.diverifikasi_tanggal');
        $main_transaksi = $main_transaksi->where('main_transaksi.id','=',$id);
        $main_transaksi = $main_transaksi->join('proses', 'main_transaksi.proses_id', '=', 'proses.id');
        $main_transaksi = $main_transaksi->get();

        $transaksi = $transaksi::where('main_transaksi_id','=',$id);
        $transaksi = $transaksi->get();

        $komponen = new Komponen;
        $komponen = $komponen::all();
        $data = array_merge(['main_transaksi'=>$main_transaksi,'transaksi'=>$transaksi,'komponen'=>$komponen]);
        // return $data;
        // $data = [
        //     'name' => 'John Doe',
        //     'age' => 30,
        //     'email' => 'john@example.com',
        // ];

        return view('quality_check')->with('data',$data); //with('main_transaksi',$main_transaksi)->with('transaksi',$transaksi)->with('komponen',$komponen);
        // return view('transaksi',$transaksi);
    }
    public function verification_show($id){
        // return $id;
        $main_transaksi = new MainTransaksi;
        $transaksi = new Transaksi;
        $main_transaksi = $main_transaksi::select('main_transaksi.id','main_transaksi.proses_id','proses.nama','main_transaksi.tanggal_transaksi'
                            ,'main_transaksi.dibuat_oleh','main_transaksi.created_at','main_transaksi.diverifikasi_oleh','main_transaksi.diverifikasi_tanggal');
        $main_transaksi = $main_transaksi->where('main_transaksi.id','=',$id);
        $main_transaksi = $main_transaksi->join('proses', 'main_transaksi.proses_id', '=', 'proses.id');
        $main_transaksi = $main_transaksi->get();

        $transaksi = $transaksi::where('main_transaksi_id','=',$id);
        $transaksi = $transaksi->get();

        $total_ok = new Transaksi;
        $total_ok = $total_ok::where('main_transaksi_id','=',$id);
        $total_ok = $total_ok->where('status','=','OK');
        $total_ok = $total_ok->count();

        $total_ng = new Transaksi;
        $total_ng = $total_ng::where('main_transaksi_id','=',$id);
        $total_ng = $total_ng->where('status','=','NG');
        $total_ng = $total_ng->count();

        $komponen = new Komponen;
        $komponen = $komponen::all();
        $data = array_merge(['main_transaksi'=>$main_transaksi,'transaksi'=>$transaksi,'komponen'=>$komponen,'total_ok'=>$total_ok,'total_ng'=>$total_ng]);
        // return $data;
        // $data = [
        //     'name' => 'John Doe',
        //     'age' => 30,
        //     'email' => 'john@example.com',
        // ];

        return view('vendor.voyager.checklist.read')->with('data',$data); //with('main_transaksi',$main_transaksi)->with('transaksi',$transaksi)->with('komponen',$komponen);
        // return view('transaksi',$transaksi);
    }

    public function simpan(Request $request){
        // return $request;
        $proses_id = $request->input('line');
        $tanggal_transaksi = $request->input('tanggal');
        $main_transaksi_id = $request->input('main_transaksi_id');
        $status = $request->status;
        foreach ($status as $key => $value) {
            $transaksi = new Transaksi();
            // return $transaksi = Transaksi::find($main_transaksi_id)->get();
            $transaksi->tanggal_transaksi = $tanggal_transaksi;
            $transaksi->proses_id = $proses_id;
            $transaksi->main_transaksi_id = $main_transaksi_id;
            $transaksi->komponen_id = $key;
            $transaksi->status = $value;
            $transaksi->dibuat_oleh = auth::user()->name;
            $transaksi->save();
        }


        return $this->index();

    }
    public function verification(Request $request){
        $verify = MainTransaksi::find($request->input('main_transaksi_id'));
        $verify->diverifikasi_oleh = Auth::user()->name;
        $verify->diverifikasi_tanggal = Carbon::now();
        $verify->save();
        // return $request;
        // $proses_id = $request->input('line');
        // $tanggal_transaksi = $request->input('tanggal');
        // $main_transaksi_id = $request->input('main_transaksi_id');
        // $status = $request->status;
        // foreach ($status as $key => $value) {
        //     $transaksi = new Transaksi();
        //     // return $transaksi = Transaksi::find($main_transaksi_id)->get();
        //     $transaksi->tanggal_transaksi = $tanggal_transaksi;
        //     $transaksi->proses_id = $proses_id;
        //     $transaksi->main_transaksi_id = $main_transaksi_id;
        //     $transaksi->komponen_id = $key;
        //     $transaksi->status = $value;
        //     $transaksi->dibuat_oleh = auth::user()->name;
        //     $transaksi->save();
        // }


        return view('vendor.voyager.checklist');

    }
    

    public function jam(){
        // Mendapatkan waktu saat ini
        $currentTime = Carbon::now();

        // Mendapatkan waktu dalam format tertentu
        $formattedTime = $currentTime->format('H:i:s');

        return $formattedTime;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // implementasi method show
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
