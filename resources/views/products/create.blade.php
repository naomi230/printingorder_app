@extends('products.layout')

@section('content')

<h1>Create Products..</h1>

<h2>Add new product</h2>
<a href="{{route('products.index')}}">Back</a>

@if ($errors->any())
    <strong>whoops</strong>There is some problem with your input<br><br>
    <ul>
        @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    </ul>      
        @endforeach
     @endif

<form action="{{ route('products.store')}}" method="POST">
  @csrf
    <div class="col-xs-12 col-sm-12 col -md-12">
    <strong>Name:</strong>
    <input type="text" name="name" placeholder="name">
</div>
<strong>Detail:</strong>
<div class="col-xs-12 col-sm-12 col -md-12">
    
<textarea style="height:150px" name="detail" placeholder="detail"></textarea>
</div>
<div class="col-xs-12 col-sm-12 col -md-12" text:center>
    <button type="submit">Submit</button>
</div>
</form>
@endsection