@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
{{-- !------------------------------------------------------- --}}
<form id="form" action="/backend/login" method="post" {{ csrf_token() }}>
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input id="username" name="username" value="0806522912">
    <input id="password" name="password" value="m123456789">
    <button type="submit" id="submit" name="submit">เข้าสู่ระบบ</button>
</form>
{{-- !------------------------------------------------------- --}}
@endsection

@section('modal-content')
@endsection

@section('js-content')
@endsection