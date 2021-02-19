@extends('layouts.app')

@section('title-block')Обновление записи@endsection

@section('content')

<h1>Обновление записи</h1>
<form action="{{ route('contact-update-submit', $data->id) }}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text" name="name" placeholder="Введите имя" value="{{ $data->name }}" id="name" class="form-control" disabled>
  </div>
  <div class="form-group">
    <label for="email">Введите Email</label>
    <input type="email" name="email" placeholder="Введите Email" value="{{ $data->email }}" id="email" class="form-control" disabled>
  </div>
  <div class="form-group">
    <label for="name">Тема сообщения</label>
    <input type="text" name="subject" placeholder="Введите имя" value="{{ $data->subject }}" id="subject" class="form-control">
  </div>
  <div class="form-group">
    <label for="message">Сообщение</label>
    <textarea type="text" name="message" id="message" class="form-control">{{ $data->message }}</textarea>
  </div>
  <button type="submit" name="button" class="btn btn-success">Обновить</button>
</form>
@endsection
