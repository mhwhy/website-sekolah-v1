@extends('layouts.main')
@section('container')

<h1 class="text-center card card-ku">KONTAK KITA</h1>
<form>
    <div class="mb-3 mt-3">
        <label for="exampleFormControlInput1" class="form-label mb-3">Email Kamu</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ketik disini">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Kirim pertanyaan(komentar)</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="saya ingin...." rows="3"></textarea>
      </div>
    <button type="submit" class="btn btn-success mt-3" style="margin-bottom: 5rem">Kirim</button>
  </form>

@endsection