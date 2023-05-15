<?php
namespace App\Http\Controllers;

use App\Models\Komponen;
use App\Models\MainTransaksi;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaksi;
use App\Models\Proses;
use Illuminate\Http\Request;
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

    /* public function index(Request $request){
        $data = Transaksi::all();
        $data_proses = Proses::all();
        // return $data_proses;
        return view('voyager::transaksi.create', [
            // 'dataType' => $this->getDataType(),
            'dataTypeContent' => $data,
            'dataProses' => $data_proses,
            // 'isModelTranslatable' => false,
        ]);
    }

    public function getDataType(){
        return DataType::where('slug','transaksi');
    }

    public function create(Request $request){
        return parent::create($request);
    }


    public function index(Request $request)
    {
        $data = (new $this->model)->select();

        if ($request->has('query')) {
            $query = $request->get('query');
            $query = json_decode($query, true); //true to set the array as associative
            // $columns = $this->getColumnList();
            // foreach ($query as $key => $value) {
            //     if (\in_array($key, $columns)) {
            //         if (isset($this->foreign[$key])) {
            //             $data = $data->where($key, $value);
            //         } else {
            //             $data = $data->where($key, 'like', "%{$value}%");
            //         }
            //     }
            // }
        }



        // order of column
        if ($request->has('orderBy')) {
            $ascending = $request->has('ascending') && ($request->get('ascending') == 1) ?
                'asc' : 'desc';
            $data = $data->orderBy($request->get('orderBy'), $ascending);
        }

        $data = $data->paginate($request->has('limit') ? $request->limit : 15);

        // foreach ($data as $key => $value) {
        //     $this->computeValue($value);
        // }

        // laravel collections
        $results = collect([
            'success' => true,
            'request' => $request->all()
        ]);

        return  $results->merge($data);
    } */


    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->report_date;
        $store = MainTransaksi::firstOrCreate([
            'tanggal_transaksi' => $request->report_date,
            'proses_id' => $request->lineproses
            // 'dibuat_oleh' => auth::user()->name
        ]);

        // $store = MainTransaksi::where('tanggal_transaksi',$request->report_date);
        // $store = $store->where('proses_id',$request->lineproses);
        // $store = $store->get();

        // if(sizeof($store)==0){
        //     $saving = new MainTransaksi();
        //     $saving->tanggal_transaksi = $request->report_date;
        //     $saving->proses_id = $request->lineproses;
        //     $saving->save();
        //     $lastId = $saving->id;
        // }

        // $lastId = $store[0]['id'];
        // return $store;
        $check_komponen = Komponen::all();


        // $store->tanggal_transaksi = $request->report_date;
        // $store->proses_id = $request->lineproses;
        // $store->dibuat_oleh = auth::user()->name;
        // $store->save();

        $lastId = $store->id;

        $parameter = collect($request)->merge(collect($check_komponen));
        // return $this->show_quality_check($parameter,$lastId);
        return redirect()->route('transaksi.quality_check',['last_id'=>$lastId,'parameter'=> $parameter]);
        // return $check_komponen;
        // $data_ceklist = [];
        // foreach ($check_komponen as $key => $value) {

        // }

        // $this->checklist($request,$check_komponen);
    }

    public function show_quality_check($id){
        // return $id;
        $main_transaksi = new MainTransaksi;
        $transaksi = new Transaksi;
        $main_transaksi = $main_transaksi::select('main_transaksi.id','main_transaksi.proses_id','proses.nama','main_transaksi.tanggal_transaksi'
                            ,'main_transaksi.dibuat_oleh','main_transaksi.created_at');
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
