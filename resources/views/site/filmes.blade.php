<!-- content main -->
<div class="main">
    <div class="wrap">
        <div class="section group">
          <div class="cont span_2_of_3">
            <h2 class="head">Filmes</h2>
            @foreach ($filme as $filme)
                <div class="top-box">
                 <div class="col_1_of_3 span_1_of_3">
                   <a href="{{URL::to('filmes/' .$filme->id. '/assistir')}}">
                    <div class="inner_content clearfix">
                        <div class="product_image">
                            <img class="img-responsive "  src="img-filmes/{{$filme->image}}" alt="" />
                        </div>
                        <div class="price">
                           <div class="cart-left">
                                <p class="title">{{$filme->nome}}</p>
                            </div>

                            <div class="clear"></div>
                         </div>
                       </div>
                     </a>
                    </div>

                </div>
            @endforeach
        </div>




                <div class="rsidebar span_1_of_left">
                    <div class="top-border"> </div>
                     <div class="border">
                     <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
                     <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
                      <script src="js/jquery.nivo.slider.js"></script>
                        <script type="text/javascript">
                        $(window).load(function() {
                            $('#slider').nivoSlider();
                        });
                        </script>
                                <div class="slider-wrapper theme-default">
                                  <div id="slider" class="nivoSlider">
                                    <img src="images/t-img1.jpg"  alt="" />
                                    <img src="images/t-img2.jpg"  alt="" />
                                    <img src="images/t-img3.jpg"  alt="" />
                                  </div>
                                 </div>
                                  <div class="btn"><a href="single.html">Check it Out</a></div>
                                 </div>
                                 <div class="top-border"> </div>
                                 <div class="sidebar-bottom">
                                    <h2 class="m_1">Newsletters<br> Signup</h2>
                                    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer</p>
                                    <div class="subscribe">
                                         <form>
                                            <input name="userName" type="text" class="textbox">
                                            <input type="submit" value="Subscribe">
                                         </form>
                                    </div>
                        </div>
                </div>
               <div class="clear"></div>
            </div>
        </div>
    </div>
