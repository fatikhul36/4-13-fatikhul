@extends('layout.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Contact us</h2>
</div>
<form>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputname" placeholder="name">
    <label for="inputnama">nama</label>
  </div>
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="inputemail" placeholder="email">
    <label for="inputemail">email</label>
  </div><div class="form-floating mb-3">
    <textarea class="form-control" placeholder="tinggalkan pesan disini" id="floatingTextarea2" style="height : 100px"></textarea>
    <label for="floatingTextarea">pesan</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection