@extends('page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Alternatif</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Alternatif</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/alternatif/update/'.$alternatif->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="alternatif" class="col-sm-2 col-form-label">Alternatif</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" placeholder="Alternatif" value="{{ $alternatif->nama}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_tanaman" class="col-sm-2 col-form-label">C1</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="efek_Samping" placeholder="Nilai Kriteria (Jenis Tanaman)" value="{{ $alternatif->efek_Samping}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_tanah" class="col-sm-2 col-form-label">C2</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="efektivitas" placeholder="Nilai Kriteria (Jenis Tanah)" value="{{ $alternatif->efektivitas}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kondisi_tanah" class="col-sm-2 col-form-label">C3</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="harga" placeholder="Nilai Kriteria (Kondisi Tanah)" value="{{ $alternatif->harga}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="harga_pupuk" class="col-sm-2 col-form-label">C4</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="dosis" placeholder="Nilai Kriteria (Harga Pupuk)" value="{{ $alternatif->dosis}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kadar_air" class="col-sm-2 col-form-label">C5</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ketersediaan" placeholder="Nilai Kriteria (Kadar Air)" value="{{ $alternatif->ketersediaan}}">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection