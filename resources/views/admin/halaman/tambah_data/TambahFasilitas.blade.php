@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Fasilitas</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url ('CrudFasilitas')}}">Data Fasilitas</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Data Fasilitas</li>            
            </ol>
          </div>
          <hr>
          <div class="row justify-content-center">
            <div class="col-lg-6">

              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Data Fasilitas</h6>
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

                  <form enctype="multipart/form-data" class="contact-form-area contact-page-form contact-form text-left" action="{{url('AksiTambahFasilitas')}}" method="post">

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
                      <label>Ruangan Tambahan</label>
                      <input type="text" class="form-control" name="ruangan_tambahan" placeholder="Masukkan Ruangan Tambahan">
                    </div>
                    <div class="form-group">
                      <label>Toilet</label>
                      <input type="text" class="form-control" name="toilet" placeholder="Masukkan Toilet">
                    </div>
                    <div class="form-group">
                      <label>Perlengkapan Operator</label>
                      <input type="text" class="form-control" name="perlengkapan_operator"placeholder="Masukkan Perlengkapan Operator">
                    </div>
                    <div class="form-group">
                      <label>Kursi</label>
                      <input type="text" class="form-control" name="kursi" placeholder="Masukkan Kursi">
                    </div>
                    <div class="form-group">
                      <label>Musholah</label>
                      <input type="text" class="form-control" name="musholah" placeholder="Masukkan Musholah">
                    </div>
                    <div class="form-group">
                      <label>>Fasilitas Tambahan 1</label>
                      <input type="text" class="form-control" name="fasilitas_tambahan1" placeholder="Masukkan Fasilitas Tambahan 1">
                    </div>
                    <div class="form-group">
                      <label>Fasilitas Tambahan 2</label>
                      <input type="text" class="form-control" name="fasilitas_tambahan2" placeholder="Masukkan Fasilitas Tambahan 2">
                    </div>
                    <div class="form-group">
                      <label>Fasilitas Tambahan 3</label>
                      <input type="text" class="form-control" name="fasilitas_tambahan3" placeholder="Masukkan >Fasilitas Tambahan 1">
                    </div>
                    <div class="form-group">
                      <label>Fasilitas Tambahan 4</label>
                      <input type="text" class="form-control" name="fasilitas_tambahan4" placeholder="Masukkan Fasilitas Tambahan 4">
                    </div>
                    <div class="form-group">
                      <label>Fasilitas Tambahan 5</label>
                      <input type="text" class="form-control" name="fasilitas_tambahan5" placeholder="Masukkan Fasilitas Tambahan 5">
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
