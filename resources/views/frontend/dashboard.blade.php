@extends('layouts.app')

@section('title', 'Leverage Trading - Dashboard')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 w-full" id="cards-container">
    </div>

    <script src="assets/js/dashboard-coin-card.js"></script>
@endsection