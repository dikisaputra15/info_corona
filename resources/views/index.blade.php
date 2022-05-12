<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Corona Info</title>
  </head>
  <body>
    <div class="container">
        <h5 style="text-align:center;">jumlah kasus sembuh dan jumlah kasus meninggal untuk provinsi DKI Jakarta, Jawa Tengah, Jawa Timur</h5>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Provinsi</th>
                <th scope="col">jumlah kasus sembuh</th>
                <th scope="col">jumlah kasus meninggal</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($list_data as $item)
                  @if ($item['key'] == 'DKI JAKARTA')
                    <tr>
                      <td>{{$item['key']}}</td>
                      <td>{{$item['jumlah_sembuh']}}</td>
                      <td>{{$item['jumlah_meninggal']}}</td>
                    </tr>
                  @elseif($item['key'] == 'JAWA TENGAH')
                    <tr>
                      <td>{{$item['key']}}</td>
                      <td>{{$item['jumlah_sembuh']}}</td>
                      <td>{{$item['jumlah_meninggal']}}</td>
                    </tr>
                  @elseif($item['key'] == 'JAWA TIMUR')
                    <tr>
                      <td>{{$item['key']}}</td>
                      <td>{{$item['jumlah_sembuh']}}</td>
                      <td>{{$item['jumlah_meninggal']}}</td>
                    </tr>
                  @endif
                @endforeach
                
            </tbody>
          </table><br><br>

          <h5 style="text-align:center;">Jumlah kasus untuk laki-laki & perempuan se Indonesia</h5>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Provinsi</th>
                <th scope="col">jumlah kasus Laki - Laki</th>
                <th scope="col">jumlah kasus perempuan</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($list_data as $item)
                  <tr>
                    <td>{{$item['key']}}</td>
                    <td>{{$item['jenis_kelamin'][0]['doc_count']}}</td>
                    <td>{{$item['jenis_kelamin'][1]['doc_count']}}</td>
                  </tr>
                @endforeach
            </tbody>
          </table><br><br>

          <h5 style="text-align:center;">Rumah Sakit Rujukan</h5>
          <table id="dataTable" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th scope="col">Kode RS</th>
                <th scope="col">Nama</th>
                <th scope="col">Jml Tempat Tidur</th>
                <th scope="col">Wilayah</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($rujukan as $drujukan)
                <tr>
                  <td>{{$drujukan['kode_rs']}}</td>
                  <td>{{$drujukan['nama']}}</td>
                  <td>{{$drujukan['tempat_tidur']}}</td>
                  <td>{{$drujukan['wilayah']}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    
  </body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script>
   $(document).ready(function() {
      $('#dataTable').DataTable();

      $('.custom-file-input').on('change', function() {
         let fileName = $(this).val().split('\\').pop();
         $(this).next('.custom-file-label').addClass("selected").html(fileName);
      });

   });
</script>