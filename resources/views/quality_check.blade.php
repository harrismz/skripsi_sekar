@extends('layouts.app')

     @section('content')
     <br>
    <br>
    <br>
    <br>
     <div class="container">
        <div class="card">
            <div class="card-header bg-info">
                <div class="row">
                    <h3>Checklist {{ $data['main_transaksi'][0]['nama'] }}</h3>
                    <p class="float-end"> Model : {{ $data['main_transaksi'][0]['model'] }}</p>
                    <p class="float-end"> tanggal : {{ $data['main_transaksi'][0]['tanggal_transaksi'] }}</p>
                </div>

            </div>
            <div class="card-body">
                {{-- {{dd($data['transaksi'])}} --}}
                <form action="{{ route('transaksi.simpan') }}" method="POST">
                    <input type="hidden" name="main_transaksi_id" value="{{$data['main_transaksi'][0]['id']}}">
                    <input type="hidden" name="line" value="{{$data['main_transaksi'][0]['proses_id']}}">
                    <input type="hidden" name="tanggal" value="{{$data['main_transaksi'][0]['tanggal_transaksi']}}">
                {{-- <form action="#" method="POST"> --}}
                    @csrf
                    <table class="table">
                        <thead>
                            <tr  class="text-center">
                                <th>No</th>
                                <th>Nama Komponen</th>
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
                    </tbody>
                </table>
                @if (count($data['transaksi'])==0)
                <button type="submit" class="btn btn-primary float-end">Selesai</button>
                @endif
                </form>
            </div>

            @if(isset($data['main_transaksi'][0]['dibuat_oleh']))
            <div class="card-footer">
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

