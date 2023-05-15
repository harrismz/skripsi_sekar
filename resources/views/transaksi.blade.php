@extends('layouts.app')

     @section('content')
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row">
                      <div class="card">
                        <div class="card-header text-center">
                            <h3> Quality Check </h3>
                        </div>
                        <div class="card-body">
                            {{-- {{ dd($dataProses) }} --}}

                            <form action="{{ route('transaksi.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for>Line Proses</label>
                                    <select class="form-control" name="lineproses" id="lineproses">
                                        @foreach ($dataProses as $proses)
                                            <option value="{{$proses->id}}">{{$proses->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for>Model</label>
                                    <select class="form-control" name="model" id="model">
                                        @foreach ($dataProses as $proses)
                                            <option value="{{$proses->id}}">{{$proses->model}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label for>Tanggal Transaksi</label>
                                  <input
                                    type="date"
                                    name="report_date"
                                    id="report_date"
                                    class="form-control"
                                  />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info pull-right" >Mulai</button>
                                </div>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
        </div>

    @stop


    @section('javascript')

    @stop
