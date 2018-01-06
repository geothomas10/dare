@extends('layouts.layout')
@section('title')
data
@stop
@section('body')
@foreach($products as $rec)
 <h1>{{ $rec->product}} </h1>
@endforeach
@stop