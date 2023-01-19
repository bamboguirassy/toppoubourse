@extends('layouts.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Learning Today,<br>Leading Tomorrow</h1>
            <h2>We are team of talented designers making websites with Bootstrap</h2>
            @auth
                <a href="javascript:void(0)" onclick="document.getElementById('logoutForm').submit()" class="btn-get-started">Se
                    déconnecter</a>
                <form id="logoutForm" method="post" action="{{ route('logout') }}">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}" class="btn-get-started">Se connecter</a>
            @endauth
        </div>
    </section><!-- End Hero -->
@endsection
