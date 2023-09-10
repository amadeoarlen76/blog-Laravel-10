@extends('template_backend.home')
@section('content')
    <div class="container-fluid">
        <!-- Box Row Atas -->
        <div class="row">
          <!-- ./col 1-->
          <div class="col-sm col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner text-center">
                <h3>4</h3>
                <p>Pengguna</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col 1-->
          <!-- ./col 2-->
          <div class="col-sm col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner text-center">
                <h3>4</h3>
                <p>Post dibuat</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col 2-->
        </div>


        <!-- Row Bawahnya -->
        <div class="row">
          <!-- ./col 3 -->
          <div class="col-sm col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner text-center">
                <div class="my-5">
                  <h3>4</h3>
                  <p>Kategori</p>
                </div>
              </div>
              <div class="icon">
                <i class="ion ion-archive"></i>
              </div>
            </div>
          </div>
           <!-- ./col 3 -->
          <!-- ./col 4-->
          <div class="col-sm col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner text-center">
                <h3>4</h3>
                <p>Tag Berita</p>
              </div>
              <div class="icon">
                <i class="ion ion-cash"></i>
              </div>
            </div>
          </div>
          <!-- ./col 4-->
        </div>

      </div><!-- /.container-fluid -->
@endsection