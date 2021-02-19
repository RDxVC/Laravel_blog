@extends('layouts.app')

@section('title-block')Новое сообщение@endsection

@section('content')

<h1>Новое сообщение</h1>
<form action="{{ route('contact-form') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text" name="name" placeholder="Введите имя" id="name" value="{{ old('name') }}" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">Введите Email</label>
    <input type="email" name="email" placeholder="Введите Email" id="email" value="{{ old('email') }}" class="form-control">
  </div>
  <div class="form-group">
    <label for="name">Тема сообщения</label>
    <input type="text" name="subject" placeholder="Введите имя" id="subject" value="{{ old('subject') }}" class="form-control">
  </div>
  <div class="form-group">
    <label for="message">Сообщение</label>
    <textarea type="text" name="message" id="message" class="form-control">Введите сообщение</textarea>
  </div>
  <button type="submit" name="button" class="btn btn-success">Отправить</button>
</form>
@endsection
