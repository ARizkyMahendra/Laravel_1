<!DOCTYPE html>
<html lang="en">
  <head>
    @include('Admin.Template.head')
  </head>
    
  <body>
    <div id="wrapper">
      <!-- navbar -->
      @include('Admin.Template.navbar')
      <!-- /.navbar -->
      

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h2>Buat table disini !!! HALAMAN InputPage</h2>
            
            <div class="card card-info card-outline">
              <div class="card-header">
                <div class="card-tools">
                  <a href="{{route('create')}}" class="btn btn-success" style="margin-bottom: 10px;"> tambah data <i class=" fa fa-plus-square"></i></a></br>
                </div>
              </div>
              
              <div class="card-body"> 
                <table class="table table-bordered">
                  <tr>
                    <th>Acara</th>
                    <th>tempat</th>
                    <th>tanggal</th>
                    <th>status</th>
                    <th>aksi</th>
                  </tr>
                  @foreach ($dtAgenda as $item)
                  <tr>
                    <td> {{ $item->acara }} </td>
                    <td> {{ $item->tempat }}</td>
                    <td> {{ date('d-m-y',strtotime($item->tgl_mulai)) }} - {{ date('d-m-y',strtotime($item->tgl_selesai)) }}</td>
                    <td> {{ $item->status }}</td>
                    <td> 
                      <a href="{{route('edit', $item->id)}}" ><i class='fa fa-edit'></i></a> |  <a href="{{route('delete', $item->id)}}"><i class="fa fa-trash" style="color: red;"></i></a>                   
                    </td>
                  </tr>
                  @endforeach
                </table>  
              </div>
              <div class="card-footer">
                {{ $dtAgenda->links('vendor.pagination.custom')}}
              </div>
            </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->
      
    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="{{asset('BsTemplate/js/jquery-1.10.2.js')}}"></script>
    <script src="{{asset('BsTemplate/js/bootstrap.js')}}"></script>
    @include('sweetalert::alert')

  </body>
</html>