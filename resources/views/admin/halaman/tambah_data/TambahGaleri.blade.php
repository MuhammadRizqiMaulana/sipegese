@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Galeri</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('dashboardadmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url ('CrudGedung')}}">Data Galeri</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Data Galeri</li>            
            </ol>
          </div>
          <hr>
          <div class="row justify-content-center">
            <div class="col-lg-6">

              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Data Galeri</h6>
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

                  <form enctype="multipart/form-data" class="contact-form-area contact-page-form contact-form text-left" action="{{url('AksiTambahGaleri')}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group col-md-12">
                      <div class="form-select">
                        <select name="gedung">
                          <option>Pilih gedung</option>
                          @foreach($gedungs as $gedung)
                          <option value="{{$gedung->id_gedung}}">{{$gedung->nama_gedung}}</option>
                          @endforeach
                        <select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Nama Galeri</label>
                      <input type="text" class="form-control" name="nama_galeri" placeholder="Masukkan Nama Galeri">
                    </div>
                    <div class="form-group">
                      <label>Gambar Galeri</label>
                      <input type="file" class="form-control" name="gambar_galeri">
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
