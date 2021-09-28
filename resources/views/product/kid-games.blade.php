@extends('master.layouts')
@section('content')
<div class="row tm-row tm-mb-120">
    <div class="col-12">
        <h2 class="tm-color-primary tm-post-title tm-mb-60">Kids</h2>
    </div>
    @foreach($data_produk as $produk)
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
            <div class="tm-post-link-inner">
                <a href="https://www.educastudio.com/category/marbel-edu-games/marbel-premium">
                <img src="{{asset('images/produk/'.$produk->image)}}" alt="" class="img-fluid">                      
            </div>
            <span class="position-absolute tm-new-badge"></span>
            <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$produk -> title}}</h2>
        </a>                    
    </article>
    @endforeach
</div> 
@endsection