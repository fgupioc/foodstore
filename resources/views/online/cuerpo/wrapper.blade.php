@extends('online.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- HERO -->
    @include('online.cuerpo.hero')
    <!-- /HERO -->
    <!-- PORTFOLIO -->
    @include('online.cuerpo.portfolio')
    <!-- /PORTFOLIO -->
    <hr class="divider">
    <!-- FOOTER -->
    @include('online.layouts.render.footer')
    <!-- /FOOTER -->
</div>
 @endsection