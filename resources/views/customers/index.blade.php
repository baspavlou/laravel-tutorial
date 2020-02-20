@extends('layout')
@section('title')
Customers 
@endsection
@section('content')
<h1>Customers</h1> 
<p><a href="customers/create">Create</a></p>
<hr>
@foreach($customers as $customer)
<div style="width:400px;display:flex;justify-content:space-between">
<div>{{$customer->id}}</div>
<div>{{$customer->name}}</div>
<div>{{$customer->company->name}}</div>
<div>{{$customer->active}}</div><br/>
</div>
@endforeach



@endsection