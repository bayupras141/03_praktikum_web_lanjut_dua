@extends('master.layouts')

@section('content')
<div class="row tm-row tm-mb-40">
    <div class="col-12">                    
        <div class="mb-4">
            <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">About this Group</h2>
        </div>                    
    </div>
</div>     
<div class="row tm-row tm-mb-60">
    <div class="col-12">
        <hr class="tm-hr-primary  tm-mb-55">
    </div>                
    <div class="col-lg-6 tm-mb-60 tm-person-col">
        <div class="media tm-person">
            <img src="img/about-02.jpg" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
                <h2 class="tm-color-primary tm-post-title mb-2">Bayu Prasetyo</h2>
                <h3 class="tm-h3 mb-3">CEO/Founder</h3>
                <p class="mb-0 tm-line-height-short">
                    Aliquam non vulputate lectus, vel ultricies diam. Suspendisse at ipsum
                    hendrerit, vestibulum mi id, mattis tortor.
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 tm-mb-60 tm-person-col">
        <div class="media tm-person">
            <img src="img/about-03.jpg" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
                <h2 class="tm-color-primary tm-post-title mb-2">Dwiki Septian Pradikta</h2>
                <h3 class="tm-h3 mb-3">Project Director</h3>
                <p class="mb-0 tm-line-height-short">
                    Quisque in bibendum elit, in egestas turpis. Vestibulum ornare sollicitudin congue. 
                    Aliquam lorem mi, maximus at iaculis ut.
                </p>
            </div>
        </div>
    </div>
</div>    
@endsection
