@extends('layouts.master')

@section('title', 'Clients')

@section('subtitle','Client')

@section('container')
<p>Es VIP: {{$vip}}</p>
@if($vip)
<h2>Eres un cliente VIP</h2>
@else
<h2>No eres un cliente VIP</h2>
@endif
<p>parrafo siempre visible</p>
<p>{{count($clients)}}</p>
<ul>
  @forelse($clients as $client)
  <li>{{$client}}</li>
  @empty
  <li>Vacio</li>
  @endforelse
</ul>
@endsection