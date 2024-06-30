@extends('dashbroad.layout.main')

@section('container')
        <div class="content_harian">
            <h1>Let's Make Your Plan</h1>
            <main class="grid">
                <article class="day">
                    <img src="{{ asset('assets/img harian/image11.png') }}" >
                    <div class="content">
                        <h2 class="btnn"><a href="/harian-senin">Monday</a></h2>
                    </div>
                </article>
                <article class="day">
                    <img src="{{ asset('assets/img harian/image22.png') }}" >
                    <div class="content">
                        <h2 class="btnn"><a href="/harian-selasa">Tuesday</a></h2>
                    </div>
                </article>
                <article class="day">
                    <img src="{{ asset('assets/img harian/image33.png') }}" >
                    <div class="content">
                        <h2 class="btnn"><a href="/harian-rabu">Wednesday</a></h2>
                    </div>
                    </article>
                <article class="day">
                    <img src="{{ asset('assets/img harian/image44.png') }}" >
                    <div class="content">
                        <h2 class="btnn"><a href="/harian-kamis">Thursday</a></h2>
                    </div>
                    </article>
                <article class="day">
                    <img src="{{ asset('assets/img harian/image55.png') }}" >
                    <div class="content">
                        <h2 class="btnn"><a href="/harian-jumat">Friday</a></h2>
                    </div>
                    </article>
                <article class="day">
                    <img src="{{ asset('assets/img harian/image6.png') }}" >
                    <div class="content">
                        <h2 class="btnn"><a href="/harian-sabtu">Saturday</a></h2>
                    </div>
                    </article>
                <article class="day">
                    <img src="{{ asset('assets/img harian/image77.png') }}" >
                    <div class="content">
                        <h2 class="btnn"><a href="/harian-minggu">Sunday</a></h2>
                        </div>
                    </article>
                <article class="semangat">
                    <img src="{{ asset('assets/img harian/image.jpg') }}" width="200px" height="200px">
                    <div class="content2">
                        <h2>Do it for your future self. FIGHTING!</h2>
                    </div>
                    </article>
                </main>
            </div>
@endsection
