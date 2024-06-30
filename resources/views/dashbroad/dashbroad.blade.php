@extends('dashbroad.layout.main')

@section('container')
<div class="content_dashbroad">
    <h1>Hallo, {{ Auth::user()->name }}...</h1>
  <div class="datetime-1">
    <div class="date-1">
      <span id="dayname">Day</span>,
      <span id="month">month</span>
      <span id="daynum">00</span>,
      <span id="year">year</span>
    </div>
    <div class="time-1">
      <span id="hour">00</span>: <span id="minutes">00</span>:
      <span id="seconds">00</span>
      <span id="period">AM</span>
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
              <th>Check</th>
              <th>Mata Kuliah</th>
              <th>Tugas</th>
              <th>Tenggat</th>
              <th>Media Pengumpulan</th>
              <th>Status</th>
            </tr>
          </thead>
          @foreach ($kegiatans as $k)
            <tbody id="data">
                <tr id="input-tr-0">
                    <td><div class="form-check form-switch ms-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                        </div>
                    </td>
                    <td>{{ $k['mata_kuliah'] }}</td>
                    <td>{{ $k['tugas'] }}</td>
                    <td>{{ $k['tenggat'] }}</td>
                    <td>{{ $k['media'] }}</td>
                    <td>{{ $k['status'] }}</td>
            @endforeach
@endsection
