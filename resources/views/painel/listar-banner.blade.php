@include('template-painel.head')

@include('template-painel.top')

@include('template-painel.menu')

@include('template-painel.content-main')

@section('title', 'Listar Banner')


<!--gallery-->
<div class="gallery">
    <h3 id="forms-example" class="">@yield('title')</h3>
    @if(Session::has('message'))
        <div class="alert alert-success">
              <button type="button" class="btn btn-success warning_2" data-dismiss="alert" aria-hidden="true">×</button>
              {!! Session::get('message') !!}
              <a href="inserir-banner" class="alert-link">Inserir outro Banner?</a>
        </div>
    @endif

    @foreach( $banner as $banner )
        <div class="col-md-3">
            <div class="gallery-img">
            <a href="{{URL::to('banner/' .$banner->id. '/edit')}}" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
                <img class="img-responsive " src="img-banner/{{$banner->image}}" alt="" />
                <span class="zoom-icon"> </span> </a>
            </a>
            </div>
            <div class="text-gallery">
                <h6>{{$banner->nome}}</h6>
            </div>
        </div>
    @endforeach

    <div class="clearfix"> </div>
</div>
