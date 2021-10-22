@extends('layouts.admin-layout')
@section('title','Profile')
@section('content')
Profile------
<h1> {{ Auth::user()->name }}</h1>
@endsection
