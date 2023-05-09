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

    public function index(Request $request){
        // $data = Transaksi::all();
        $data_proses = Proses::all();
        return view('transaksi',['dataProses'=>$data_proses]);
    }

    // public function index(Request $request){
    //     $data = Transaksi::all();
    //     $data_proses = Proses::all();
    //     // return $data_proses;
    //     return view('voyager::transaksi.create', [
    //         // 'dataType' => $this->getDataType(),
    //         'dataTypeContent' => $data,
    //         'dataProses' => $data_proses,
    //         // 'isModelTranslatable' => false,
    //     ]);
    // }

    // public function getDataType(){
    //     return DataType::where('slug','transaksi');
    // }

    // public function create(Request $request){
    //     return parent::create($request);
    // }


    // public function index(Request $request)
    // {
    //     $data = (new $this->model)->select();

    //     if ($request->has('query')) {
    //         $query = $request->get('query');
    //         $query = json_decode($query, true); //true to set the array as associative
    //         // $columns = $this->getColumnList();
    //         // foreach ($query as $key => $value) {
    //         //     if (\in_array($key, $columns)) {
    //         //         if (isset($this->foreign[$key])) {
    //         //             $data = $data->where($key, $value);
    //         //         } else {
    //         //             $data = $data->where($key, 'like', "%{$value}%");
    //         //         }
    //         //     }
    //         // }
    //     }



    //     // order of column
    //     if ($request->has('orderBy')) {
    //         $ascending = $request->has('ascending') && ($request->get('ascending') == 1) ?
    //             'asc' : 'desc';
    //         $data = $data->orderBy($request->get('orderBy'), $ascending);
    //     }

    //     $data = $data->paginate($request->has('limit') ? $request->limit : 15);

    //     // foreach ($data as $key => $value) {
    //     //     $this->computeValue($value);
    //     // }

    //     // laravel collections
    //     $results = collect([
    //         'success' => true,
    //         'request' => $request->all()
    //     ]);

    //     return  $results->merge($data);
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $check_komponen = Komponen::all();
        $store = new MainTransaksi;
        $store->tanggal_transaksi = $request->report_date;
        $store->proses_id = $request->lineproses;
        $store->dibuat_oleh = auth::user()->name;
        $store->save();

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

    public function show_quality_check(Request $request,$id){
        $main_transaksi = new MainTransaksi;
        $data = $main_transaksi::where('id',$id);
        return $data;
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
