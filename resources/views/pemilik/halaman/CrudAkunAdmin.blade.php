@extends('pemilik.layout.TampilanPemilik')
@section('content')
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Akun Admin</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('dashboardadmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Akun Admin</li>
            </ol>
          </div>
          <hr>
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

          <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  
                  <a href="{{url ('TambahAkunAdmin')}}" class="btn btn-success" >Tambah data</a>
                  <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>No Handphone</th>
                        <th>Foto</th>
                        <th>Level</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>No Handphone</th>
                        <th>Foto</th>
                        <th>Level</th>
                        <th></th>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach($datas as $tampil)
                      <tr>
                        <td>{{$tampil->id_admin}}</td>
                        <td>{{$tampil->nama_admin}}</td>
                        <td>{{$tampil->username}}</td>
                        <td>{{$tampil->password}}</td>
                        <td>{{$tampil->email}}</td>
                        <td>{{$tampil->no_hp}}</td>
                        <td>{{$tampil->foto}}</td>
                        <td>{{$tampil->level}}</td>
                        <td>
                          <a href="EditAkunAdmin{{$tampil->id_admin}}" class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a href="HapusAkunAdmin{{$tampil->id_admin}}" class="btn btn-danger">
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