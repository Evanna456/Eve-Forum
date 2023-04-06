@extends('shared.master')

@section('title')
Eve Forum
@endsection

@section('description')
Project System
@endsection

@section('keywords')
Eve Forum, forum
@endsection

@section('header')
@include('shared.header')
<style>
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h2>Eve Forum</h2>
        </div>
    </div>
</div>
<br>
<script defer>
</script>
@endsection