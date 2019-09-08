@extends('layouts.base')

@section('body')

{{-- Navigation --}}
@include('includes.shop_navbar')

{{-- Site Wrapper --}}
    @yield('content')

@include('includes.footer')
@stop
