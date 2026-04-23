@extends('layouts.app')

@section('title', 'Leverage Trading - Dashboard')

@section('content')
    @include("frontend.coin-cards")

    @include("frontend.retail-charts-asessts")

    @include("frontend.market-values")

    <script src="assets/js/dashboard-coin-card.js"></script>
@endsection