@extends('dashbroad.layout.main')

@section('container')
<div class="content_isitugas">
<h2 class="mt-4">drop your assignment, here !</h2>
        @if ($message = Session::get('success'))
        <div>
            <script>alert("Data berhasil diinputkan!")</script>
        </div>
        @endif
        @if ($message = Session::get('hapus'))
        <div>
            <script>alert("Data berhasil dihapus!")</script>
        </div>
        @endif
      <div class="mt-5 mb-2 me-0">
        <div class="column">
          <button class="btn btn-sm btn-primary float-end" id="add-input">Tambah</button>
          <br/>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <div class="tabel-responsive">
            <form action="/post" method="POST">
                @csrf
            <table class="table table-sm table-bordered">
              <thead class="head_table" text-align="center">
                <tr>
                  <th>Check</th>
                  <th>Mata Kuliah</th>
                  <th>Tugas</th>
                  <th>Tenggat</th>
                  <th>Media Pengumpulan</th>
                  <th>Status</th>
                  <th>del</th>
                </tr>
              </thead>

                <tbody id="data">
                    <tr id="input-tr-0">
                        <td><div class="form-check form-switch ms-2">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>

                        <td><input type="text" class="form-control form-control-sm @error('mata_kuliah') is-invalid @enderror" name='mata_kuliah'></td>
                        @error('mata_kuliah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <td><input type="text" class="form-control form-control-sm @error('tugas') is-invalid @enderror" name='tugas'></td>
                        @error('tugas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <td><input type="date" class="form-control form-control-sm @error('tenggat') is-invalid @enderror" name='tenggat'></td>
                        @error('tenggat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <td><input type="text" class="form-control form-control-sm @error('media') is-invalid @enderror" name='media'></td>
                        @error('media')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <td><select class="form-select @error('status') is-invalid @enderror"  id="status" onchange="changeColor(this)" name='status'>
                                <option >Belum selesai</option>
                                <option >Dalam proses</option>
                                <option >Selesai</option>
                                </select></td>
                                @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                        <td><button onclick="validasidelete" class="btn btn-sm btn-danger delete-record float-end" data-id="${i}">Hapus</button></td>

                    </tr>
                </tbody>
            </table>
            <div class="mt-1 mb-2 me-0">
                <div class="column">
                  <button class="btn btn-sm btn-primary float-end" type="submit">Submit All</button>
                  <br/>
                </div>
              </div>
        </form>
          </div>
        </div>
    </div>

    <h1>List Tugas..</h1>
    <div class="row">
        <div class="column">
          <div class="tabel-responsive">
            <table class="table table-sm table-bordered">
              <thead class="head_table" text-align="center">
                <tr>
                  <th>Mata Kuliah</th>
                  <th>Tugas</th>
                  <th>Tenggat</th>
                  <th>Media Pengumpulan</th>
                  <th>Status</th>
                  <th>del</th>
                </tr>
              </thead>
              @foreach ($kegiatans as $k)
                <tbody id="data">
                    <tr id="input-tr-0">
                        <td>{{ $k['mata_kuliah'] }}</td>
                        <td>{{ $k['tugas'] }}</td>
                        <td>{{ $k['tenggat'] }}</td>
                        <td>{{ $k['media'] }}</td>
                        <td>{{ $k['status'] }}</td>
                        <td>
                            <form action={{ route('kegiatan.destroy', $k->id) }} method="POST">
                                @csrf
                                @method('DELETE')
                            <button type="submit" onclick="return confirm('Sure Want Delete?')" class="btn btn-sm btn-danger delete-record float-end" value="Delete">Hapus</button>
                            </form>
                        </td>

                @endforeach
</div>

@endsection
