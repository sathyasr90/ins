@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://image.freepik.com/free-vector/phoenix-logo-template_23-2148502726.jpg" style="width:150px; height: 150px; " class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user -> username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>18</strong> posts</div>
                <div class="pr-5"><strong>123</strong> followers</div>
                <div class="pr-5"><strong>10</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">DigitizeMee</div>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
            <a href="#">digitizme.org</a>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4"><img src="https://images.pexels.com/photos/54098/us-army-soldiers-army-men-54098.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" class="w-100" alt=""></div>
        <div class="col-4"><img src="https://images.pexels.com/photos/943974/pexels-photo-943974.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="w-100" alt=""></div>
        <div class="col-4"><img src="https://images.pexels.com/photos/1485630/pexels-photo-1485630.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" class="w-100" alt=""></div>

    </div>

</div><img src="" class="w-100" alt="">
@endsection
