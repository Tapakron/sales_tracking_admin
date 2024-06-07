@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
{{-- !------------------------------------------------------- --}}
<form id="form" action="/backend/login" method="post" {{ csrf_token() }}>
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input id="username" name="username">
    <input id="password" name="password">
    <button type="submit" id="submit" name="submit">เข้าสู่ระบบ</button>
</form>
{{-- !------------------------------------------------------- --}}
@endsection

@section('modal-content')
@endsection

@section('js-content')
@endsection