@extends('layouts.base')

@section('body')

{{-- Navigation --}}
@include('includes.navbar')
@include('includes.sign-up')
@include('includes.login')

{{-- Site Wrapper --}}
    @yield('content')

@include('includes.footer')

@stop