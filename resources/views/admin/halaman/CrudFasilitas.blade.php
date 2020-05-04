@extends('admin.layout.TampilanAdmin')
@section('content')
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Fasilitas</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('dashboardadmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Fasilitas</li>
            </ol>
          </div>
          <hr>
          <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="{{ url('crudfasilitas/tambah') }}" class="btn btn-success">Tambah data</a>
                  <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>
                            Id Fasilitas
                        </th>
                        <th>
                            Id Gedung
                        </th>
                        <th>
                            Ruangan Tambahan
                        </th>
                        <th>
                            Toilet
                        </th>
                        <th>
                            Perlengkapan Operator
                        </th>
                        <th>
                            Kursi
                        </th>
                        <th>
                            Mushola
                        </th>
                        <th>
                            Fasilitas Tambahan 1
                        </th>
                        <th>
                            Fasilitas Tambahan 2
                        </th>
                        <th>
                            Fasilitas Tambahan 3
                        </th>
                        <th>
                            Fasilitas Tambahan 4
                        </th>
                        <th>
                            Fasilitas Tambahan 5
                        </th>
                        <th style="width: 20%">
                          Aksi
                        </th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>
                              Id Fasilitas
                          </td>
                          <td>
                              Id Gedung
                          </td>
                          <td>
                              Ruangan Tambahan
                          </td>
                          <td>
                              Toilet
                          </td>
                          <td>
                              Perlengkapan Operator
                          </td>
                          <td>
                              Kursi
                          </td>
                          <td>
                              Mushola
                          </td>
                          <td>
                              Fasilitas Tambahan 1
                          </td>
                          <td>
                              Fasilitas Tambahan 2
                          </td>
                          <td>
                              Fasilitas Tambahan 3
                          </td>
                          <td>
                              Fasilitas Tambahan 4
                          </td>
                          <td>
                              Fasilitas Tambahan 5
                          </td>
                          <td style="width: 20%">
                            Aksi
                          </th>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

        <!---Container Fluid-->
@endsection