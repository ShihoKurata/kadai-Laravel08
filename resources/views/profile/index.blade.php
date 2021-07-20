@extends('layouts.profile_front')

@section('content')
    <div class="container">
        @foreach($posts as $post)
  <h1>id: {{$post->id}}</p>
  <p>氏名: {{ $post->name }}<p>
  <p>性別: {{ $post->gender }}<p>
  <p>趣味: {{ $post->hobby }}<p>
  <p>自己紹介: {{ $post->introduction }}<p>
      
      
@endforeach  
    </div>
@endsection