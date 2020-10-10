@extends('layouts.app')

@include('include.navbar')
@section('content')
<picture>
    <img src="{{ asset('images/pexels-bianca-gonçalves-1752806.jpg') }}" class="img-fluid">

</picture>

<div class="jumbotron bg-secondary">
<header>
    <h1>CoffeeDropped<h1>
    <p>Your one stop shop for buying coffee pods and earn cashback from recycling to do your bit for the environment</p>
</header>
</div>
<div class="jumbotron bg-white">
   <div id="coffee">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('images/coffeeimage.jpg') }}" class="img-thumbnail">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/coffeeimage2.jpg') }}" class="img-thumbnail">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/coffeeimage3.jpg') }}" class="img-thumbnail">
        </div>
    </div>
</div>
</div>

<div class="jumbotron bg-secondary">

    <h2>Recycling</h2>
    <p>Your one stop shop for buying coffee pods and earn cashback from recycling to do your bit for the environment</p>
</div>

<div class="jumbotron bg-white">
    <div id="coffee">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('images/coffeepods1.jpg') }}" class="img-thumbnail">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/coffeepods2.jpg') }}" class="img-thumbnail">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/coffeepods3.jpg') }}" class="img-thumbnail">
        </div>
    </div>
   </div>
</div>
   <div class="jumbotron bg-success">
    <footer>
    <h2>CoffeeDropped</h2>
    <address>20 Coffee Way, Coffee Town, Coffeeshire, C01 1CD</address>
    <p>Your one stop shop for buying coffee pods and earn cashback from recycling to do your bit for the environment</p>
    </footer>
</div>
@endsection
