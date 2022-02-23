@extends('layouts.app')

@section('content')
<div class="center-text">
    <img src="{{URL::to('/')}}/images/disegno.svg" class="logo"/>
    <h1>Studio Casponi</h1>
    <h1 class="arrow" id="down-arrow">▼</h1>
    
</div>
<style>
    body{
        background-color: #C0C0C0;
    }
    img.logo{
        width = "128px";
        height = "128px";
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
