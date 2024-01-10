@extends('layouts.master')

@section('title', 'Show client')

@section('subtitle','Coche')

@section('container')
<p>Esto es un parrafo 1</p>
@parent
<p>Matricula {{$name}}</p>
@endsection