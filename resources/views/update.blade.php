@extends('layout')

@section('body')
<div class="box-chat">
    <header class="header-message">
        <h1 class="title-message">Apakah anda ingin mengubah pesan anda?</h1>
        
    </header>
    <footer class="field-input-message">
        <form action="/message/update/{{ $message->id }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="message" id="message" class="input-message" placeholder="Masukan pesan anda" value="{{ $message->message }}">
            <button type="submit">Kirim</button>
            <a href="/" class="back-button-message">Batalkan</a>
        </form>
        <div class="field-back-button">
        
        </div>
    </footer>
</div>
@endsection