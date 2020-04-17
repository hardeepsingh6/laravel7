@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://hrdpsingh.co.uk/img/logo.png" style="height:250px; background-color:lightwhite; border:1px solid grey" class="rounded-circle">    
        </div>
        <div class="col-9 p-5">
            <div><h1>{{$user->username }}</h1> </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">freecodecamp.org</div>
            <div>We rae gloablcommunity ofmillions of perople learning to code together, we are open 24 x 7 whole year   </div>
            <div><a href="#">www.hrdpsingh.co.uk</a></div>       
        </div>
    </div>

    
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://www.cypherarts.com/wp-content/uploads/2020/01/gettyimages-858489898.jpg" class= "w-100" alt="">        
        </div>
        <div class="col-4">
            <img src="https://www.cypherarts.com/wp-content/uploads/2020/01/Facetune-Best-Editing-Apps-Instagram-Selfies.png" class= "w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://www.cypherarts.com/wp-content/uploads/2020/01/876-scaled-1-768x512.jpg" class= "w-100" alt="">
        </div>
    </div>

























    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection
