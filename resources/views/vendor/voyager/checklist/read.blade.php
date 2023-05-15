@extends('voyager::master')
@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel panel-heading bg-info">
            <div  class="panel-title">
                <h3>Checklist {{ $data['main_transaksi'][0]['nama'] }}</h3>
                <small> tanggal : {{ $data['main_transaksi'][0]['tanggal_transaksi'] }}</small>
            </div>

        </div>
        <div class="panel panel-body">
            {{-- {{dd($data['transaksi'])}} --}}
            <form action="{{ route('transaksi.verification') }}" method="POST">
                <input type="hidden" name="main_transaksi_id" value="{{$data['main_transaksi'][0]['id']}}">
                <input type="hidden" name="line" value="{{$data['main_transaksi'][0]['proses_id']}}">
                <input type="hidden" name="tanggal" value="{{$data['main_transaksi'][0]['tanggal_transaksi']}}">
            {{-- <form action="#" method="POST"> --}}
                @csrf
                <table class="table">
                    <thead>
                        <tr  class="text-center">
                            <th>No</th>
                            <th>Nama Item</th>
                            <th>Checklist</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data['komponen'] as $index => $item)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $item['nama'] }}</td>
                            <td class="text-center">
                                <select class="form-control" name="status[{{$index}}]" id="status[{{$index}}]">
                                    @if (count($data['transaksi'])>0)
                                        <option value="{{ $data['transaksi'][$index]['status'] }}" selected>{{ $data['transaksi'][$index]['status'] }}</option>
                                    @else
                                        <option value="" selected>Pilih</option>
                                    @endif
                                    <option value="OK">OK</option>
                                    <option value="NG">NG</option>
                                </select>
                            </td>
                        </tr>

                    @endforeach
                    @if(isset($data['main_transaksi'][0]['diverifikasi_oleh']))
                        <tr>
                            <td class="text-center"><b>TOTAL OK</b></td>
                            <td><b>: {{ $data['total_ok'] }}</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center"><b>TOTAL NG</b></td>
                            <td><b>: {{ $data['total_ng'] }}</b></td>
                            <td></td>
                        </tr>
                    @endif
                </tbody>
            </table>
            @if(!isset($data['main_transaksi'][0]['diverifikasi_oleh']))
            <button type="submit" class="btn btn-success pull-right">Verification</button>



            @endif
            </form>
        </div>
        {{-- {{dd($data['main_transaksi'])}} --}}
        @if(isset($data['main_transaksi'][0]['dibuat_oleh']))
        <div class="panel panel-footer">
            <ul>
                @if(isset($data['main_transaksi'][0]['dibuat_oleh']))
                <li>Dibuat Oleh : {{$data['main_transaksi'][0]['dibuat_oleh']}} pada tanggal {{$data['main_transaksi'][0]['created_at']}}</li>
                @endif
                @if(isset($data['main_transaksi'][0]['diverifikasi_oleh']))
                <li>Diverifikasi Oleh : {{$data['main_transaksi'][0]['diverifikasi_oleh']}} pada tanggal {{$data['main_transaksi'][0]['diverifikasi_tanggal']}}</li>
                @endif
            </ul>
        </div>
        @endif

    </div>
 </div>
@stop
