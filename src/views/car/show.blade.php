@extends('layouts.master')

@section('title', 'Show car')

@section('subtitle','Coche')

@section('container')
<p>Esto es un parrafo 1</p>
@parent
<p>Matricula {{$matricula}}</p>
@endsection