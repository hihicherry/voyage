
@extends('layouts/master')

@section('title', '首頁')

@section('js')
    <scrip src="js/2.js" />
    @parent
@stop

@section('content')
    <div class="container clearfix">
        我的內容
    </div>

    @foreach($data as $tmp)
        @if($loop->iteration % 3 == 0)
        <hr>
        @endif
        <h2>{{ $tmp }}</h2>
        <h3>{{ $loop->iteration }}</h3>
    @endforeach
    {{ $tel }}
@stop


