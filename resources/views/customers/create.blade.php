@extends('layout')
@section('title')
Add New Customers 
@endsection
@section('content')
<h1>Add New Customers</h1> 

<form action='/customers' method='POST'>
    <label for='name'>Name</label>
    <input type="text" name='name' value={{old('name')}}><br/><br/>
    <label for='name'>Email</label>

    <input type="text" name='email' value={{old('email')}}><br/><br/>
    {{-- <div>{{$error->first('name')}}</div> --}}
    <label for='name'>Status</label>
    <select name='active' id='active'>
        <option value="" disabled>Select Customer Status</option>
        <option value="1" >Active</option>
        <option value="0" >Inactive</option>
    </select><br/><br/>
    <label for='name'>Company</label>
    <select name='company_id' id='company_id'>
       
        @foreach ($companies as $company)
        <option value={{$company->id}} >{{$company->name}}</option>
        @endforeach
    </select><br/><br/>
    <button type='Submit'>Submit</button>
    @csrf
</form>
<hr>

@endsection