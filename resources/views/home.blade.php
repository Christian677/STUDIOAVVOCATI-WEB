@extends('layouts.app')

@section('content')
<div class="center-text">
    
    <img src="https://lirp.cdn-website.com/3521c4ef/dms3rep/multi/opt/avvocati-ferraris-asti-007-126w.png"/>
    <h1>Studio Casponi</h1>
    <h1 class="arrow" id="down-arrow">▼</h1>
    
</div>
<style>
    body{
        background-color: #C0C0C0;
    }
    div.center-text{
        width: 50%;
        height: 50%;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -10%;
        margin-left: -25%;
    }
    h1.arrow{
        margin-top: 10%;
    }
</style>
@endsection
