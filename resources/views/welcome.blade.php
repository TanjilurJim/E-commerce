@extends('layouts.master')
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="/">Dashboard Page</a>
        {{-- <a href="{{route('company.contact')}}">Contact</a>
        <a href="{{}}"></a> --}}
    {{-- </nav>
    Default Dashboard View
    <br><hr>
    <form action="/posts" method="post">
        {{csrf_field()}}
        {{-- <input type="hidden" name="" id=""  value=""> --}}
        {{-- <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <input type="submit" name="" id="">

     --}}
    
     -
    
    
    
    
    {{-- </form>

    <form action="/products/?id=1" method="post">
        @csrf
        <button type="submit">submit for products page</button>
    
    
    
    </form>
<hr>
    <form action="/products/1" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <button type="submit">submit for put or patch</button> 
    
    
    </form>
     
    <hr>
    <form action="/products/1" method="post">
        @csrf
        <input type="hidden" name="_method" value="Delete">
        <button type="submit">submit for Delete</button> 
    
    
    </form>
    <br><hr>
    <p>using laravel's blade directive ""</p>
    <form action="/products/1" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">submit for Delete</button> 
    
    
    </form>  --}} 

    @section('sidebar')
        This is the sidebar
        
    
    @endsection
    
    @section('content')

    

    @endsection