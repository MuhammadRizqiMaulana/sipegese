@extends('admin.layout.TampilanAdmin')
@section('content')
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Penyewaan</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Penyewaan</li>
            </ol>
          </div>
          <hr>
          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
          <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <strong>Status :</strong><h5 class="m-0 font-weight-bold text-primary">Menunggu Validasi Pembayaran</h5>
                  <p></p>
                  <p></p>
                  <p></p>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>
                          No
                        </th>
                        <th>
                            Id Penyewaan
                        </th>
                        <th>
                            Nama Gedung
                        </th>
                        <th>
                            Tanggal Sewa
                        </th>
                        <th>
                            Bukti Pembayaran
                        </th>
                        <th>
                            Jumlah Bayar
                        </th>
                        <th>
                            Status Bayar
                        </th>
                        <th style="width: 20%">
                          Aksi
                        </th>
                        <th>
                            Nama Acara
                        </th>
                        <th>
                            Nama Penyewa
                        </th>
                        <th>
                            Harga
                        </th>
                        <th style="width: 20%">
                          
                        </th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>
                          No
                        </th>
                        <th>
                            Id Penyewaan
                        </th>
                        <th>
                            Nama Gedung
                        </th>
                        <th>
                            Tanggal Sewa
                        </th>
                        <th>
                            Bukti Pembayaran
                        </th>
                        <th>
                            Jumlah Bayar
                        </th>
                        <th>
                            Status Bayar
                        </th>
                        <th style="width: 20%">
                          Aksi
                        </th>
                        <th>
                            Nama Acara
                        </th>
                        <th>
                            Nama Penyewa
                        </th>
                        <th>
                            Harga
                        </th>
                        <th style="width: 20%">
                          
                        </th>
                      </tr>
                    </tfoot>
                  <tbody>
                      @php
                        $no=1;
                      @endphp
                      @foreach($datas as $tampil)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$tampil->id_penyewaan}}</td>
                        <td>{{$tampil->Gedung->nama_gedung}}</td>
                        <td>{{$tampil->tanggal_sewa}}</td>

                        @if(isset($tampil->Pembayaran))
                        <td>      

                          <a href="{{ url('img/bukti_bayar/'.$tampil->Pembayaran->bukti_pembayaran) }}">
                          <img style="width:150px" src="{{ url('img/bukti_bayar/'.$tampil->Pembayaran->bukti_pembayaran) }}"></a>
                        </td>
                        <td>@currency($tampil->Pembayaran->jumlah_bayar)</td>
                        <td>
                          @if ($tampil->Pembayaran->status_bayar == 'Menunggu Validasi')
                            <span class="badge badge-warning">{{$tampil->Pembayaran->status_bayar}}</span>
                          @elseif ($tampil->Pembayaran->status_bayar == 'Pembayaran Selesai')
                            <span class="badge badge-success">{{$tampil->Pembayaran->status_bayar}}</span>
                          @elseif ($tampil->Pembayaran->status_bayar == 'Tidak Sesuai')
                            <span class="badge badge-danger">{{$tampil->Pembayaran->status_bayar}}</span>
                          @endif
                        </td>
                        <td>
                          <a class="btn btn-success btn-sm" href="AksiValidasi{{$tampil->id_penyewaan}}" aria-disabled="true" disabled>
                            <i class="fas fa-check"></i>Konfirmasi
                          </a>
                          <a class="btn btn-danger btn-sm" href="AksiBayarSalah{{$tampil->Pembayaran->id_pembayaran}}">
                            <i class="fas fa-ban"></i>Tidak sesuai
                          </a>
                        </td>
                        @else
                          <td><label><b>Belum Bayar</b></label></td>
                          <td><label><b>Belum Bayar</b></label></td>
                          <td><label><b>Belum Bayar</b></label></td>
                          <td><label><b>Belum Bayar</b></label></td>
                        @endif

                        <td>{{$tampil->nama_acara}}</td>
                        <td>{{$tampil->nama_penyewa}}</td>
                        <td>@currency($tampil->Gedung->harga)</td>

                        
                        <td>
                          <a href="EditPenyewaan{{$tampil->id_penyewaan}}" class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a href="HapusPenyewaan{{$tampil->id_penyewaan}}" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

        <!---Container Fluid-->
@endsection