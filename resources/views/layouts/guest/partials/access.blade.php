
        <a class="btn " aria-label="Cerca" href="#">
        <img src="/images/acc.jpg" width="50" alt="" data-toggle="modal" data-target="#modalLeft" data-backdrop="false">
        </a>


<div class="modal it-dialog-scrollable fade mx-4 my-4" tabindex="-1" role="dialog" id="modalLeft">
   <div class="modal-dialog modal-dialog-left" role="document">
      <div class="modal-content">
         <div class="modal-header bg-color">
            <h5 class="modal-title text-white text-center">
                         menu accessibilità
                    </h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <svg class="icon icon-md icon-white">
                  <use xlink:href="/svg/sprite.svg#it-close"></use>
               </svg>
            </button>
         </div>
         <div class="modal-body">
             <div class="container my-4 ">
                 <!-- row1==contrast part -->
                 <div class="row p-4">
                     <div class="col-md-4 "> 
                         <img src="/images/brightness.png" class="mx-auto d-block" style="width:40px;height:40px; cursor:pointer;" onclick="sfondo_nero();" alt="" srcset="">
                        <p class="text-center">Sfondo Nero</p>
                    </div>
                    
                     <div class="col-md-4  ">
                        <img src="/images/gray.png" class="mx-auto d-block"  style="width:40px;height:40px;cursor:pointer;" onclick="scala_grigi();" alt="">
                        <p class="text-center">scala Di Grigi</p>
                    </div>
                    
                     <div class="col-md-4 ">
                     <img src="/images/sun.png" class="mx-auto d-block" style="width:40px;height:40px;cursor:pointer;" onclick="defaults_them()" alt="">
                     <p class="text-center">Default</p>
                     </div>
                 </div>
                 <hr class="divider">
                 <!-- row 2=text size -->
                 <div class="row py-3">
                     <div class="col-md-4 ">
                     <img src="/images/t.png" class="mx-auto d-block"  style="width:20px;height:20px;cursor:pointer;" onclick="javascript:body.style.fontSize='0.85em';" alt="">
                     <p class="text-center">Testo Piccolo</p>
                     </div>
                    
                     <div class="col-md-4">
                     <img src="/images/t.png" class="mx-auto d-block"style="width:30px;height:30px;cursor:pointer;" onclick="javascript:body.style.fontSize='1.00em';" alt="">
                     <p class="text-center">Testo Medio</p>
                    </div>
                    
                    <div class="col-md-4">
                    <img src="/images/t.png" class="mx-auto d-block"  style="width:40px;height:40px;cursor:pointer;" onclick="javascript:body.style.fontSize='1.5em';" alt="">
                     <p class="text-center">Testo Grande</p>
                    </div>
                 </div>
                 <hr class="divider">
                 <!-- cursor size -->
                 <div class="row py-3">
                     <div class="col-md-6">
                        <img src="/images/cursor.png" class="mx-auto d-block" style="width:40px;height:40px;cursor:pointer;margin:0 auto;" alt="" onclick="cursor();">
                        <p class="text-center">Grande Cursore</p> 
                    </div>
                   
                     <div class="col-md-6">
                     <img src="/images/cursor2.png" class="mx-auto d-block"  style="width:20px;height:20px;cursor:pointer;margin:0 auto;" alt="" onclick="javascript:body.style.cursor='context-menu';">
                        <p class="text-center">Cursore Predefinito</p> 
                     </div>
                 </div>
                 <hr class="divider">
                 <!-- zoom part -->
                 <div class="row">
                     <div class="col-md-12">
                         <!-- <div class="row">
                         <img src="/images/lop.png" class="mx-auto d-block " style="cursor:pointer;width:40px;height:40px;"  onclick="default_zoom();" alt="">

                         </div> -->
                         <div class="row">
                         <input type="range"  class="mx-auto d-block " min="50" max="150" value="100" onchange="zoom(this.value);">
                         </div>
                         <div class="row">
                         <span id="showper" class="text-center mx-auto d-block">50 %</span>
                         </div>
                     </div>

                 </div>
            
                 <hr class="divider">
                 <!-- screen reader -->
                 <div class="row">
                     <div class="col-md-6">
                    <a href="https://www.nvaccess.org/">
                    <img src="/images/windows.png" class=" rounded mx-auto d-block" style="cursor:pointer;width:120px;height:120px;"  onclick="default_zoom();" alt="">
                    <span class="h6 text-center d-block mx-auto pt-3">NV Acess Per Windows</span>
                    </a>
                     </div>
                     <div class="col-md-6">
                         <a href="https://wiki.gnome.org/Projects/Orca/">
                         <img src="/images/ububtu.jpg" class=" rounded mx-auto d-block" style="cursor:pointer;width:120px;height:120px;"  onclick="default_zoom();" alt="">
                         <span class="h6 text-center d-block mx-auto pt-3">Orca per Ubuntu</span>
                        </a>

                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-12">
                        <p class="px-3 py-3 text-justify text-primary ">
                        La preghiamo di consultare la relativa documentazione riguardo il loro utilizzo cliccando su uno dei precedenti link. Verrà indirizzato su un sito esterno.
                        </p>
                     </div>
                 </div>
             </div>
         </div>
         <div class="modal-footer bg-white mb-5">
            <button class="rounded btn btn-outline-primary btn-block " >
            <a href="https://userway.org/get/#how-it-works" class="text-primary" style="text-decoration: none;">How UserWay Works</a>
            
            </button>
         </div>
      </div>
   </div>
</div>