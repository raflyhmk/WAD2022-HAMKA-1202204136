@extends('parts.master')
@extends('parts.navbar')
    <!-- banner -->
@section('contents')
    <section id="banner">
        <div class="container jumbotron">
            <div class="row">
                <div class="col-md-6  align-self-center banner">
                    <h1 class="title text-capitalize">
                        selamat datang di show room hamka 
                    </h1>
                    <p class="desc mb-3">
                        At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.
                    </p>
                   <a href="ListCarHamka">
                     <button type="button" class="btn btn-primary btn-mycar mt-4">My Car</button>
                   </a>
                    <div class="w-100 mt-5"></div>
                   <img src="{{URL ('asset/images/logo-ead 1.png')}}" alt="logo" >    
                   <span class="ms-3">hamka_1202204136</span>     
                </div>
                <div class="col-md-6 image-banner">
                    <img src="{{URL ('asset/images/mobil_home.jpg')}}" alt="preview mobil">
                </div>
            </div>
        </div>
    </section>
@endsection