<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<body>
 
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="card mt-5">
<div class="card-body">
<table class="table table-bordered table-striped">
    <tr>
        <td style="width:150px">Nama</td>
        <td>{{ $data->nama }}</td>
    </tr>
    <tr>
        <td>tanggal pemeriksaan</td>
        <td>{{ $data->tgl_pemeriksaan }}</td>
    </tr>
    <tr>
        <td>Tanggal Lahir/Usia</td>
        <td>{{ $data->tgl_lahir }}</td>
    </tr>
    <tr>
        <td>jenis kelamin</td>
        <td>{{ $data->jk}}</td>
    </tr>
    </div>
                    </div>
                </div>
            </div>
        </div>

</table>