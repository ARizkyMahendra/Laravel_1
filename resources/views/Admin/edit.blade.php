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
            <div class="card card-info card-outline">
              <div class="card-header">
                <h3>Edit Agenda</h3>
              </div>
                           
              <div class="card-body"> 
                <form action="{{route('update',$agenda->id)}}" method="post">
                  @csrf
                  <div class="form-group">
                    <input type="text" id="acara" name="acara" class="form-control" placeholder="Nama Acara" value="{{$agenda->acara}}">
                  </div>
                  <div class="form-group">
                    <textarea type="text" id="tempat" name="tempat" class="form-control" placeholder="Nama Tempat" >{{$agenda->tempat}}</textarea>
                  </div>
                  <div class="form-group">
                    <input type="date" id="tgl_mulai" name="tgl_mulai" class="form-control" placeholder="Tanggal Mulai Acara" value="{{$agenda->tanggal}}">
                  </div>
                  <div class="form-group">
                    <input type="date" id="tgl_selesai" name="tgl_selesai" class="form-control" placeholder="Tanggal Selesai Acara" value="{{$agenda->tanggal}}">
                  </div>
                  <div class="form-group">
                    <p>Status Acara</p>
                    <input type="radio" id="segera" name="status" value="segera">
                    <label for="segera">Segera</label>
                    <input type="radio" id="ditunda" name="status" value="ditunda">
                    <label for="ditunda">Ditunda</label>
                    <input type="radio" id="selesai" name="status" value="selesai">
                    <label for="selesai">Selesai</label>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primarry">Ubah Data</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->
      
    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="{{asset('BsTemplate/js/jquery-1.10.2.js')}}"></script>
    <script src="{{asset('BsTemplate/js/bootstrap.js')}}"></script>
    

  </body>
</html>