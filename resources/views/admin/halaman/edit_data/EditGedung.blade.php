@extends('pemilik.layout.TampilanPemilik')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Gedung</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('dashboardadmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url ('CrudGedung')}}">Data Gedung</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ubah Data Gedung</li>            
            </ol>
          </div>
          <hr>
          <div class="row justify-content-center">
            <div class="col-lg-6">

              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ubah Data Gedung</h6>
                </div>
                <div class="card-body">
                    <!------------ Alert----------->

                      @if($errors->any())
                              <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <ul>
                                      @foreach ($errors->all() as $error)
                                      <li>{{$error}}</li>
                                      @endforeach
                                    </ul>
                              </div>
                            @endif

                    <!------------ Alert----------->

                  <form class="contact-form-area contact-page-form contact-form text-left" action="AksiEditGedung{{$datas->id_gedung}}" method="post">

                    {{csrf_field()}}
                    {{method_field('PUT')}}

                    <div class="form-group">
                      <label>Nama Gedung</label>
                      <input type="text" class="form-control" name="nama_gedung" placeholder="Masukkan Nama Gedung" value="{{$datas->nama_gedung}}">

                          @if($errors->has('nama_gedung'))
                            <div class="text-danger">
                              {{$errors->first('nama_gedung')}}
                            </div>
                          @endif
                    </div>

                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" value="{{$datas->alamat}}">

                          @if($errors->has('alamat'))
                            <div class="text-danger">
                              {{$errors->first('alamat')}}
                            </div>
                          @endif
                    </div>

                    <div class="form-group">
                      <label>Deskripsi</label>
                      <input type="deskripsi" class="form-control" name="deskripsi"placeholder="Masukkan Deskripsi" value="{{$datas->deskripsi}}">

                          @if($errors->has('deskripsi'))
                            <div class="text-danger">
                              {{$errors->first('deskripsi')}}
                            </div>
                          @endif
                    </div>

                    <div class="form-group">
                      <label>Harga</label>
                      <input type="number" min="0" class="form-control" name="harga" placeholder="Masukkan Harga (tanpa titik koma)" value="{{$datas->harga}}">

                          @if($errors->has('harga'))
                            <div class="text-danger">
                              {{$errors->first('harga')}}
                            </div>
                          @endif
                    </div>

                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="text" class="form-control" name="gambar" placeholder="Masukkan Gambar" value="{{$datas->gambar}}">

                          @if($errors->has('gambar'))
                            <div class="text-danger">
                              {{$errors->first('gambar')}}
                            </div>
                          @endif
                    </div>

                    <div class="form-group"> 
                        <input type="reset" class="btn btn-secondary"  value="Batal">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      <!---Container Fluid-->
@endsection
