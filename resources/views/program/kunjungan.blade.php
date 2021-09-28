@extends('master.layouts')

@section('content')   
<div class="row tm-row">
    <div class="row tm-row" left"></div>
    <div class="row tm-row" left"></div>
    <a href="magang"> Magang </a>
    <a href="karir"> Karir </a>
    <div class="col-12">
        <h2 class="tm-color-primary tm-post-title tm-mb-60">Kunjungan Industri</h2>
    </div>
    @foreach($data_program as $program)
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
            <div class="tm-post-link-inner">
                    <a href="https://www.educastudio.com/program/karir/game-programmer">
                    <img src="{{asset('images/program/'.$program->image)}}" class="card-img-top">                            
            </div>
            {{-- <span class="position-absolute tm-new-badge">Game Programmer</span> --}}
            <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$program -> title}}</h2>
        </a>                    
        <p class="tm-pt-30">
            {{$program -> konten}}
        </p>
    </article>
    @endforeach
</div>      
@endsection
