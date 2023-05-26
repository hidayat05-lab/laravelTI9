<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="card mt-5">
<div class="card-body">
<h3 class="text-center">Form skill</h3><br/>
{{-- menampilkan error validasi --}}
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif <br/>
 <!-- form validasi -->
<form action="{{url('hasil')}}" method="post">
{{ csrf_field() }}
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" value="{{old('nama')}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text " class="form-control" value="{{old('email')}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="lokasi" class="col-4 col-form-label">lokasi</label> 
    <div class="col-8">
      <select id="lokasi" name="lokasi" class="custom-select">
        <option value="surakarta">Surakarta</option>
        <option value="yogyakarta">Yogyakarta</option>
        <option value="bandung">Bandung</option>
        <option value="jakarta">Jakarta</option>
        <option value="surabaya">surabaya</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label class="col-4">jenis kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="radio_0" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="radio_0" class="custom-control-label">laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="radio_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="radio_1" class="custom-control-label">perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">skill</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="checkbox_0" type="checkbox" class="custom-control-input" value="php"> 
        <label for="checkbox_0" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="checkbox_1" type="checkbox" class="custom-control-input" value="mysql"> 
        <label for="checkbox_1" class="custom-control-label">mysql</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="checkbox_2" type="checkbox" class="custom-control-input" value="javascript"> 
        <label for="checkbox_2" class="custom-control-label">javascript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="checkbox_3" type="checkbox" class="custom-control-input" value="html"> 
        <label for="checkbox_3" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="checkbox_4" type="checkbox" class="custom-control-input" value="css"> 
        <label for="checkbox_4" class="custom-control-label">CSS</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>