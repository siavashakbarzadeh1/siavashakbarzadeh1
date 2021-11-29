<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts.user.partials.head')
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
    <link href="{{ asset('css/bootstrap-italia.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap/bootstrap-italia-custom.css') }}" rel="stylesheet">
<link href="{{ asset('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap') }}" rel="stylesheet">
</head>

<body id="body"  >

    @include('layouts.user.partials.new-header')
    <main>
        {{-- @auth
            @include('layouts.user.partials.breadcrumbs')
        @endauth --}}
        @include('layouts.user.partials.breadcrumbs')
        
        <div class=" access acc-btn ">
            <!-- <span class="d-none d-md-block">Cerca</span> -->
            <a class="btn  "  href="#">
            <svg stroke="#0066cc" fill="#0066cc" data-toggle="modal" width="70"height="70" data-target="#modalLeft"   class="rounded-circle" data-backdrop="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63 63"><defs></defs><title>Asset 10</title><circle class="a" cx="31.49" cy="16.08" r="5.5" transform="translate(-2.14 26.98) rotate(-45)"/><path class="a" d="M47.62,22.28a88.73,88.73,0,0,1-32.25,0,1.63,1.63,0,0,0-1.92,1.32,1.64,1.64,0,0,0,1.32,1.92,92,92,0,0,0,10.92,1.34,2.62,2.62,0,0,1,2.42,2.93l-.32,2.75a54.14,54.14,0,0,1-3,12.67l-2,5.35a1.65,1.65,0,0,0,3.09,1.16v0l.49-1c1.6-3.41,3.09-6.9,4.45-10.43a.74.74,0,0,1,1.38,0c1.36,3.53,2.85,7,4.45,10.44l.51,1.09h0a1.64,1.64,0,0,0,1.48,1,1.6,1.6,0,0,0,.57-.11,1.64,1.64,0,0,0,1-2.12l-2-5.35a54.67,54.67,0,0,1-3-12.67l-.31-2.77a2.61,2.61,0,0,1,2.42-2.91,92.51,92.51,0,0,0,10.83-1.32,1.73,1.73,0,0,0,1.44-1.67A1.65,1.65,0,0,0,47.62,22.28Z"/><path class="b" d="M31.5,0A31.5,31.5,0,1,0,63,31.5,31.53,31.53,0,0,0,31.5,0Zm0,60A28.5,28.5,0,1,1,60,31.5,28.54,28.54,0,0,1,31.5,60Z"/></svg>




            <!-- <img src=""   alt="" srcset="" > -->
            </a>
        </div>

<!-- Modal -->
<div class="modal it-dialog-scrollable fade mx-4 my-4" tabindex="-1" role="dialog" id="modalLeft">
   <div class="modal-dialog modal-dialog-left" role="document">
      <div class="modal-content">
         <div class="modal-header bg-color ">
            <h5 class="modal-title text-white text-center">
                         menu accessibilità
                    </h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close" >
               <svg class="icon icon-md icon-white " >
                  <use xlink:href="/svg/sprite.svg#it-close"></use>
               </svg>
            </button>
         </div>
         <div class="modal-body">
             <div class="container my-4 ">
                 <!-- row1==contrast part -->
                 <div class="row p-4">
                     <div class="col-md-4 mb-2"> 
                         <img src="/images/brightness.png" class="mx-auto d-block " style="width:40px;height:40px; cursor:pointer;" onclick="sfondo_nero();" alt="" srcset="">
                        <p class="text-center">Sfondo Nero</p>
                    </div>
                    
                     <div class="col-md-4  mb-2">
                        <img src="/images/gray.png" class="mx-auto d-block"  style="width:40px;height:40px;cursor:pointer;" onclick="scala_grigi();" alt="">
                        <p class="text-center">scala Di Grigi</p>
                    </div>
                    
                     <div class="col-md-4 mb-2 ">
                     <img src="/images/sun.png" class="mx-auto d-block" style="width:40px;height:40px;cursor:pointer;" onclick="defaults_them()" alt="">
                     <p class="text-center">Default</p>
                     </div>
                 </div>
                 <hr class="divider">
                 <!-- row 2=text size -->
                 <div class="row py-3">
                     <div class="col-md-4 mb-2 ">
                     <img src="/images/t.png" class="mx-auto d-block"  style="width:20px;height:20px;cursor:pointer;" onclick="javascript:body.style.fontSize='0.85em';" alt="">
                     <p class="text-center">Testo Piccolo</p>
                     </div>
                    
                     <div class="col-md-4 mb-2">
                     <img src="/images/t.png" class="mx-auto d-block"style="width:30px;height:30px;cursor:pointer;" onclick="javascript:body.style.fontSize='1.00em';" alt="">
                     <p class="text-center">Testo Medio</p>
                    </div>
                    
                    <div class="col-md-4 mb-2">
                    <img src="/images/t.png" class="mx-auto d-block"  style="width:40px;height:40px;cursor:pointer;" onclick="javascript:body.style.fontSize='1.5em';" alt="">
                     <p class="text-center">Testo Grande</p>
                    </div>
                 </div>
                 <hr class="divider">
                 <!-- cursor size -->
                 <div class="row py-3">
                     <div class="col-md-6 mb-2">
                         

                        <img src="/images/cursor.png" class="mx-auto d-block" style="width:40px;height:40px;cursor:pointer;margin:0 auto;" alt="" onclick="cursor();">
                        <p class="text-center">Grande Cursore</p> 
                    </div>
                   
                     <div class="col-md-6 mb-2">
                     <img src="/images/cursor2.png" class="mx-auto d-block"  style="width:20px;height:20px;cursor:pointer;margin:0 auto;" alt="" onclick="defaultCursor();">
                        <p class="text-center">Cursore Predefinito</p> 
                     </div>
                 </div>
                 <hr class="divider">
                 <!-- zoom part -->
                 <div class="row">
                     <div class="col-md-12">
                         <!-- <div class="row mb-2">
                         <img src="/images/lop.png" class="mx-auto d-block " style="cursor:pointer;width:40px;height:40px;"  onclick="default_zoom();" alt="">

                         </div> -->
                         <div class="row mb-2">
                         <input type="range" id="myrange" class="mx-auto d-block range-style "  min="50" max="150" value="100" onchange="zoom(this.value);">
                         <h6 style="cursor:pointer;" onclick="default_zoom();" class="mx-3 my-1 text-center text-"> Reset Zoom </h6> 
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-8 col-sm-6"> <span id="showper" class="text-center mx-auto d-block">100 %</span></div>
                            <div class="col-md-4 col-sm-6"></div>
                        </div>
                         <!-- <div class="row mb-2">
                         <span id="showper" class="text-center mx-auto d-block">100 %</span>
                         </div>
                     </div> -->
                    </div>
                 </div>
                 <hr class="divider">
                 <!-- screen reader -->
                 <div class="row">
                     <div class="col-md-6 mb-2">
                    <a href="https://www.nvaccess.org/">
                    <img src="/images/windows.png" class=" rounded mx-auto d-block" style="cursor:pointer;width:120px;height:120px;"  onclick="default_zoom();" alt="">
                    <span class="h6 text-center d-block mx-auto pt-3">NV Acess Per Windows</span>
                    </a>
                     </div>
                     <div class="col-md-6 mb-2">
                         <a href="https://wiki.gnome.org/Projects/Orca/">
                         <img src="/images/ububtu.jpg" class=" rounded mx-auto d-block" style="cursor:pointer;width:120px;height:120px;"  onclick="default_zoom();" alt="">
                         <span class="h6 text-center d-block mx-auto pt-3">Orca per Ubuntu</span>
                        </a>

                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-12 mb-2">
                        <p class="px-3 py-3 text-justify text-primary ">
                        La preghiamo di consultare la relativa documentazione riguardo il loro utilizzo cliccando su uno dei precedenti link. Verrà indirizzato su un sito esterno.
                        </p>
                     </div>
                 </div>
             </div>
         </div>
         <div class="modal-footer bg-white mb-5">
            <button class=" btn btn-block btn-outline-primary rounded" type="button" data-dismiss="modal" aria-label="Close" >
            <h6  class="text-center text-primary" style="text-decoration: none;">Chiuso</h6>
            
            </button>
         </div>
      </div>
   </div>
</div>
<!-- end modal -->
                    <section id="area-riservata">
                    <!-- section-background-header -->
                        <div class="section section-user-header py-5 " style="min-height:500px">
                            <div class="container ">
                                <div class="row bg-white ">
                                    <div class="col-md-3 col-sm-auto"></div>
                                    
                                    <div class="col-md-6 col-sm-auto">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 p-1">
                                                <button class="btn rounded btn-block btn-outline-primary">
                                                <i class="fas fa-heart fa-2x"></i>
                                                <a href="#" target="_self" class="text-decoration-none">website</a>
                                                </button>
                                        </div>
                                        <div class="col-md-6 col-sm-12 p-1">
                                            <button class="btn rounded btn-block btn-outline-primary">
                                            <i class="fa fa-file-pdf fa-2x px-2"></i><a href="#"  class="text-decoration-none" target="_self">Bando</a>
                                            </button>
                                        </div>

                                   </div>
                                    </div>
                                    <div class="col-md-3 col-sm-auto "></div>
                                </div>
                              
                                
                                <div class="row pt-5">
                                    <div class="col-md-12 col-sm-auto">
                                    <ul class="nav nav-tabs row desnav" id="myTab" role="tablist">
                                        <!-- 1 -->
                                        <li class="nav-item  col-md-4 col-sm-4" onclick="ShowAlert();"><a class="nav-link " id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true"><i class="fas fa-home px-2"></i>Home</a></li>
                                        <!-- 2 -->
                                        <li class="nav-item col-md-4 col-sm-4"><a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><i class="fas fa-chalkboard-teacher px-2"></i>Instructions</a></li>
                                        <!-- 3 -->
                                        <li class="nav-item col-md-4 col-sm-4"><a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><i class="fas fa-info-circle px-2"></i>Help</a></li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                        <!-- 1 -->
                                        <div class="tab-pane my-3 fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                            <!-- alert success -->
                                            <div class="alert c-line complementary-3-bg-a1 rounded " id="alertSuccess" role="alert">
                                                <h4 class="alert-heading text-center text-success"> successo!</h4>
                                                <!-- <p clas>Stai leggendo questo importante messaggio di avviso di successo. Questo testo di esempio sarà più a lungo in modo da poter vedere come funzioni la spaziatura all'interno di un avviso con questo tipo di contenuto.</p> -->
                                                <hr>
                                                <p class="mb-0 text-center text-success">la tua domanda è stata presentata.</p>
                                            </div>
                                            <!-- alert failed -->
                                            <div class="alert c-line complementary-2-bg-a1 rounded " id="alertDanger" role="alert">
                                                <h4 class="alert-heading text-center text-danger">Attenzione!</h4>
                                                <!-- <p clas>Stai leggendo questo importante messaggio di avviso di successo. Questo testo di esempio sarà più a lungo in modo da poter vedere come funzioni la spaziatura all'interno di un avviso con questo tipo di contenuto.</p> -->
                                                <hr>
                                                <p class="mb-1 text-center text-dark">La presentazione della domanda sara prefezionata solo dopo avere inserito tui richiesti.</p>
                                                <p class="mb-1 pt-1 text-center text-dark">Per continuare clicare su</p>
                                                <p class="text-center pt-1"><a href="{{ route('questionary') }}" class=" linkshadow text-danger text-decoration-none">Complazione Domanda</a></p>
                                            </div>
                                        </div>
                                        <!--2  -->
                                        <div class="tab-pane my-3 fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                            <p class="text-justify c-line neutral-1-bg-a1 text-primary p-5 m-0">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ligula dui, aliquam ut eleifend vel, vestibulum sed tellus. Integer et tortor fermentum, luctus erat iaculis, condimentum ligula. Integer hendrerit turpis interdum nisi condimentum, sed luctus ante faucibus. Quisque pulvinar, ligula et accumsan convallis, lorem tellus malesuada turpis, non lacinia dui turpis eget ante. Cras sollicitudin turpis vel interdum vestibulum. Quisque eros magna, congue sit amet ex sed, sollicitudin luctus lorem. Donec eleifend, risus vel sodales euismod, quam ipsum faucibus erat, et tempor mi diam non eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse congue vestibulum ipsum nec vestibulum. Nunc interdum scelerisque porttitor.

                                                Aliquam mi mi, tempor in augue at, bibendum aliquet arcu. Maecenas mollis consequat pulvinar. Morbi aliquet pellentesque blandit. Nulla dictum non nisi a mattis. Donec neque sem, ornare ut ligula at, scelerisque varius est. Proin sed tortor et tortor porttitor molestie. Integer tempor dolor eget mauris ornare, id molestie felis ultricies. Cras convallis felis dictum imperdiet posuere. Suspendisse mauris urna, accumsan ac ex id, bibendum facilisis dolor.

                                                Proin molestie tortor ex, a congue nunc auctor nec. Sed pulvinar in sapien vitae maximus. Suspendisse id leo scelerisque, suscipit arcu nec, ultricies ante. Quisque lorem orci, pellentesque id velit nec, ultricies condimentum augue. In consectetur, justo sit amet rhoncus vehicula, nisi neque varius erat, in bibendum est velit a odio. Aenean a rutrum tortor, vitae pretium orci. Sed hendrerit magna lacinia accumsan lacinia. Donec commodo tortor non velit pretium vehicula.

                                                Pellentesque finibus, risus nec faucibus malesuada, eros eros molestie mauris, nec pulvinar magna leo non ipsum. Fusce euismod sapien magna. Aenean ut diam quam. Nam at tellus a justo feugiat mattis sed sed felis. Ut viverra facilisis felis, vitae interdum purus vestibulum et. Aenean dignissim id ante in ultrices. Phasellus tincidunt blandit ex id pellentesque. Quisque ultricies nulla at placerat pellentesque. Suspendisse dictum metus ut diam ullamcorper, in semper sem faucibus.

                                                Sed commodo, tortor a efficitur dapibus, est turpis pharetra leo, id sollicitudin erat mi id magna. Nam malesuada eleifend sapien quis hendrerit. Aenean molestie a turpis sit amet accumsan. Morbi ultrices faucibus ante at porta. Ut porttitor egestas quam sit amet lacinia. Proin varius arcu nisl, vitae pretium ligula consequat nec. Nam rhoncus, tortor eu interdum dapibus, velit odio venenatis nisl, nec dictum libero mauris ut est. Ut malesuada vel arcu a aliquet. Nullam maximus hendrerit consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque ut ipsum molestie, vulputate ipsum ut, tristique nisi. Duis ac diam rhoncus, elementum ex vel, ultricies urna. Nulla vel congue neque. Duis ac neque eget mi porta dictum faucibus ut magna.
                                            </p>
                                        </div>
                                        <!-- 3 -->
                                        <div class="tab-pane my-3 fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                            <p class="text-justify c-line neutral-1-bg-a1 text-primary p-5 m-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ligula dui, aliquam ut eleifend vel, vestibulum sed tellus. Integer et tortor fermentum, luctus erat iaculis, condimentum ligula. Integer hendrerit turpis interdum nisi condimentum, sed luctus ante faucibus. Quisque pulvinar, ligula et accumsan convallis, lorem tellus malesuada turpis, non lacinia dui turpis eget ante. Cras sollicitudin turpis vel interdum vestibulum. Quisque eros magna, congue sit amet ex sed, sollicitudin luctus lorem. Donec eleifend, risus vel sodales euismod, quam ipsum faucibus erat, et tempor mi diam non eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse congue vestibulum ipsum nec vestibulum. Nunc interdum scelerisque porttitor.

                                                    Aliquam mi mi, tempor in augue at, bibendum aliquet arcu. Maecenas mollis consequat pulvinar. Morbi aliquet pellentesque blandit. Nulla dictum non nisi a mattis. Donec neque sem, ornare ut ligula at, scelerisque varius est. Proin sed tortor et tortor porttitor molestie. Integer tempor dolor eget mauris ornare, id molestie felis ultricies. Cras convallis felis dictum imperdiet posuere. Suspendisse mauris urna, accumsan ac ex id, bibendum facilisis dolor.

                                                    Proin molestie tortor ex, a congue nunc auctor nec. Sed pulvinar in sapien vitae maximus. Suspendisse id leo scelerisque, suscipit arcu nec, ultricies ante. Quisque lorem orci, pellentesque id velit nec, ultricies condimentum augue. In consectetur, justo sit amet rhoncus vehicula, nisi neque varius erat, in bibendum est velit a odio. Aenean a rutrum tortor, vitae pretium orci. Sed hendrerit magna lacinia accumsan lacinia. Donec commodo tortor non velit pretium vehicula.

                                                    Pellentesque finibus, risus nec faucibus malesuada, eros eros molestie mauris, nec pulvinar magna leo non ipsum. Fusce euismod sapien magna. Aenean ut diam quam. Nam at tellus a justo feugiat mattis sed sed felis. Ut viverra facilisis felis, vitae interdum purus vestibulum et. Aenean dignissim id ante in ultrices. Phasellus tincidunt blandit ex id pellentesque. Quisque ultricies nulla at placerat pellentesque. Suspendisse dictum metus ut diam ullamcorper, in semper sem faucibus.

                                                    Sed commodo, tortor a efficitur dapibus, est turpis pharetra leo, id sollicitudin erat mi id magna. Nam malesuada eleifend sapien quis hendrerit. Aenean molestie a turpis sit amet accumsan. Morbi ultrices faucibus ante at porta. Ut porttitor egestas quam sit amet lacinia. Proin varius arcu nisl, vitae pretium ligula consequat nec. Nam rhoncus, tortor eu interdum dapibus, velit odio venenatis nisl, nec dictum libero mauris ut est. Ut malesuada vel arcu a aliquet. Nullam maximus hendrerit consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque ut ipsum molestie, vulputate ipsum ut, tristique nisi. Duis ac diam rhoncus, elementum ex vel, ultricies urna. Nulla vel congue neque. Duis ac neque eget mi porta dictum faucibus ut magna.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                       
                                </div>
                            </div>
                        </div>
                    </section>
<!-- end modal -->

        </main>
@yield('body')
      <!-- script part -->
      <script>
        window.__PUBLIC_PATH__ = '{{ asset('/fonts') }}'
    </script>
    
     <script src="{{asset('js/app.js')}}"></script>
<!-- add jquery before bootstrap -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
   
     <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" crossorigin="anonymous"></script>  -->
     <!-- <script src="{{asset('js/bootstrap-italia.min.js')}}"></script> -->
     
     <script src="{{asset('js/bootstrap-italia.bundle.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <!-- @yield('bootstrapitalia_css') -->
    
    @yield('js')
 

    
    
    @include('layouts.user.partials.footer')
    
    
    </body>
 
    
</html>
