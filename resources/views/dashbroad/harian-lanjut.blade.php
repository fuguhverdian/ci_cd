@extends('dashbroad.layout.main')

@section('container')
<div class="content_lanjut">
<main>
    <header>
      <div class="container">
        <div id="header">
          <h2><i class="fas fa-clipboard-check"></i>To-do List {{ $hari }}</h2>
          {{-- <form action="/postTugas" method="POST">
              @csrf --}}
          <div class="user_input">
            <input type="text" id="input" placeholder="What do you have planned?" name="tugas"> <button id="add_item" type="submit">Submit</button>
        </div>
    {{-- </form> --}}
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div id="to_do_list"></div>
      </div>
    </section>
  </main>
</div>
@endsection