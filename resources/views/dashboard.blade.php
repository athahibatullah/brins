<!-- resources/views/dashboard.blade.php -->

@extends('layout')

@section('title', 'Dashboard')

@section('content')
    <h2>Dashboard</h2>
    <div>
        <p>Total Registered Users: {{ $userCount }}</p>
        <p>Total Registered Products: {{ $productCount }}</p>
    </div>
@endsection
