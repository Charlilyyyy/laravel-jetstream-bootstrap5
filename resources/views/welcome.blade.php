@extends('layouts.app')
@section('main')
<div style="height: 550px" class="first-sec">
    <div class="row" style="padding: 100px 0 0 0">
        <div class="col-4">
            <div id="intro" style="padding: 100px 0 0 100px">
                <h1>Welcome To eSWIS</h1>
                <h1 style="font-size: 5rem; font-weight: 800">SABAH</h1>
                <h2>This is electronic scheduled waaste management system for all premises registered in Sabah state</h2>
            </div>
        </div>
    </div>
</div>
<div style="height: 2000px" class="second-sec">
    <div class="row" style="padding: 100px 0 0 0">
        <div class="col-5"></div>
        <div class="col-7">
            @livewire('login-form')
        </div>
    </div>
</div>

<style>
    .first-sec{
        background-color: #0d6a14b3;
    }

    .second-sec{
        background-color: #7fc084b3;
    }

    #intro{
        h1{
            color: #fff;
        }
        h2{
            color: #ffffffae;
            font-size: 1.1rem
        }
    }
</style>
@endsection
