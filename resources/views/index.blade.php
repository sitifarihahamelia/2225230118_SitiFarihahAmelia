@extends('layout')

@section('body')

<div class="box-chat">
    <header class="header-message">
        <h1 class="title-message">Send Yourself A Message</h1>
        <p class="text-title-message">Mulailah ungkapkan sesuatu yang selama ini terpendam dalam diri anda.</p>
    </header>
    <main class="content-message">
        @foreach ($message as $message)
            @if ($message->id % 2 == 0)
                <section class="right-message">
                    <p>{{ $message->message }}</p>
                    <div class="right-button">
                        <a href="/message/{{ $message->id }}">Ubah</a>
                        <a href="/delete/{{ $message->id }}">Hapus</a>
                    </div>
                </section>
            @endif

            @if ($message->id % 2 != 0)
                <section class="left-message">
                    <p>{{ $message->message }}</p>
                    <div class="left-button">
                        <a href="/message/{{ $message->id }}">Ubah</a>
                        <a href="/delete/{{ $message->id }}">Hapus</a>
                    </div>
                </section>
            @endif
        @endforeach
    </main>
    <footer class="field-input-message">
        <form action="/post" method="POST">
            @csrf
            <input type="text" name="message" id="message" class="input-message" placeholder="Masukan pesan anda">
            <button type="submit">Kirim</button>
        </form>
    </footer>
</div>

@endsection