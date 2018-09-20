@include('template-site.head')

@include('template-site.topo')

@include('template-site.menu')


@include('template-painel.content-main')


<!--gallery-->
<div class="gallery">
    <h3 id="forms-example" class="">@yield('title')</h3>
    @if(Session::has('message'))
        <div class="alert alert-success">
              <button type="button" class="btn btn-success warning_2" data-dismiss="alert" aria-hidden="true">×</button>
              <p>Filme não encontrado</p>
              <a href="inserir-filme" class="alert-link">Inserir outro Filme?</a>
        </div>
    @endif


    <div class="clearfix"> </div>
</div>

@include('template-site.footer')

<!--//gallery-->
