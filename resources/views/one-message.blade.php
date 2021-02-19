@extends('layouts.app')

@section('title-block'){{$data->subject}}@endsection
@section('content')
      <div class="alert alert-info">
      <h3>{{ $data->subject }}</h3>
      <p>{{ $data->message }}</p>
      <p>{{ $data->name }} - {{ $data->email }}</p>
      <p><small>{{ $data->created_at }}</small></p>
      <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-info">Редактировать</button></a>
      <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
    </div>
@endsection
