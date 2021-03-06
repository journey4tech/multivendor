@extends('layouts.app')



@section('main-style-content')
    {{-- Style for Form --}}
    {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
    <link rel="stylesheet" href="{{ asset('backend/form/style.css') }}">
    {{-- END Style for Form --}}
@endsection



@section('main-content')


    <section style="margin-top: 10px" id="main-content" class="get-in-touch text-center">
        <div class="row">

            {{-- <section class="get-in-touch"> --}}
            <h1 class="title m-auto">Your Profile</h1>

            @if (session('success'))
                <div class="alert alert-success col-12 mb-5">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data"
                class="contact-form row m-auto">
                @csrf
                <div class="form-field col-lg-6">
                    <label class="label" for="name">Name</label>
                    <input value="{{ auth()->user()->name }}" name="name" id="name" class="input-text js-input"
                        type="text">
                </div>

                @error('name')
                    <span style="margin-top: -30px" class="text-danger d-flex col-lg-12 mb-4">{{ $message }}</span>
                @enderror

                <div class="form-field col-lg-12 ">
                    <label class="label" for="email">Email</label>
                    <input value="{{ auth()->user()->email }}" name="email" id="email" class="input-text js-input"
                        type="text">
                </div>

                @error('email')
                    <span style="margin-top: -30px" class="text-danger d-flex col-lg-12 mb-4">{{ $message }}</span>
                @enderror

                <div class="form-field col-lg-12">
                    <label class="label" for="previous_img">Previous
                        Image</label>
                    <img style="border-radius: 50%" width="100px" src="{{asset('backend/assets/images/profile-pic') .'/' . auth()->user()->image}}" alt="" id="previous_img">
                </div>

                <div class="form-field col-lg-6">
                    <label class="label" for="image">Choose your Profile
                        picture</label>
                    <input name="image" id="image" class="input-text js-input" type="file">
                </div>

                @error('image')
                    <span style="margin-top: -35px" class="text-danger d-flex col-lg-12 mb-4">{{ $message }}</span>
                @enderror

                <div class="form-field col-lg-12">
                    {{-- <input class="submit-btn" type="submit" value="update" name="submit"> --}}
                    <button class="submit-btn" type="submit">Update</button>
                </div>
            </form>

        </div>
    </section>


@endsection




@section('main-script-content')
    {{-- Script for Form in Banner/Edit --}}
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- END Script for Form in Banner/Edit --}}
@endsection
