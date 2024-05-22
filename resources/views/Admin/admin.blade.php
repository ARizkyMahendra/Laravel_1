<!DOCTYPE html>
<html lang="en">

<head>
  @include('Admin.template.head')
</head>

<body>
  <div id="wrapper">
    <!-- navbar -->
    @include('Admin.template.navbar')
    <!-- /.navbar -->


    <div id="page-wrapper">

      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            @foreach ($dtAgenda as $item)
              <div class="card" style="width: 100vh;">
              <div class="card-header">
                {{ $item->acara }}
              </div>
              <div class="card-body">
                <p class="card-text mb-1"><i class="bi bi-exclamation-circle-fill"
                  style="margin-right: 10px;"></i>{{ $item->acara }}</p>
                <p class="card-text mb-1"><i class="bi bi-geo-fill" style="margin-right: 10px;"></i>{{ $item->tempat }}
                </p>
                <p class="card-text mb-1">
                <i class="bi bi-calendar2-week-fill" style="margin-right: 10px;"></i>
                {{ date('d/m/y', strtotime($item->tgl_mulai)) }} - {{ date('d/m/y', strtotime($item->tgl_selesai)) }}
                </p>
                <p class="card-text mb-1">Status : {{ $item->status }}</p>
              </div>
              <hr style="height:2px;border-width:0;color:gray;background-color:gray">
              </div>
            @endforeach
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