@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-receipt"></i>  Transaksi
        </h1>
    </div>
    @stop

     @section('content')
        <div class="page-content browse container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                      <div class="panel panel-info">
                        <div class="panel-heading" style="text-align:center;padding:5px">
                            <h3> Buat Transaksi Baru </h3>
                        </div>
                        <div class="panel-body">
                          <div class="form-group">
                            <label for>Line Proses</label>
                            <select class="form-control" name="lineproses" id="proses">
                                @foreach ($dataProses as $proses)
                                    <option value="{{$proses->id}}">{{$proses->nama}}</option>
                                @endforeach
                            </select>


                          </div>
                          <div class="form-group">
                            <label for>Tanggal Transaksi</label>
                            <input
                              {{-- v-model="form.report_date" --}}
                              type="date"
                              name="report_date"
                              id="report_date"
                              class="form-control"
                            />
                          </div>

                          <button type="button" class="btn btn-success float-right">Mulai</button>
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
        </div>

    @stop


    @section('javascript')

    @stop
