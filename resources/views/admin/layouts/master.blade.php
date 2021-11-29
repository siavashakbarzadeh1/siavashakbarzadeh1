@include("admin.section.header")
<head>
    @include("admin.section.head")
</head>

    
 <body>
 <div class="content ">
     <div class="container-fluid">
         <div class="row ">
            
             
           <div class="col-md-2 mx-0 col-sm-auto float-left" id="sidebar" style="padding:0px;width:179px;" >
                @include("admin.section.sidebar")

           </div>
            <div class="col col-md-10 col-sm-auto float-left" style="padding:0px;width:304px;" id="complete" >
                
                    

                    
                    
                    @yield("content")

                   
                
            </div>

            

            

             
             
         </div>
     </div>       
           

</div>

 </body>
      
     
        

        
            
        
  


    <script>
    window.__PUBLIC_PATH__ = '{{ asset('/fonts') }}'
    </script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>

    <script src="{{asset('js/bootstrap-italia.bundle.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    @yield('js')
@include("admin.section.footer")