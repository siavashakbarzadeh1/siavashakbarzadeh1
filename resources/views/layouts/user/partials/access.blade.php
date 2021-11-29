<div class="it-header-slim-wrapper p-0 m-0" id="accessibility" >
<div class="container-fluid bg-dark text-white " >
    <div class="row">
        <div class="col-md-11 col-sm-11">
            <div class="container   my-1" style="min-height:20px;">
                <div class="row">
                    <!--resize font based on cookie -->
                    <div class="col-md-3 col-sm-12 text-center">
                    <div class="dropdown ">
                        <span>Dimensione Testo A</span>
                        <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            
                            <svg class="icon-expand icon icon-white icon-md icon-primary"><use xlink:href="/svg/sprite.svg#it-expand"></use></svg>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="link-list-wrapper">
                            <ul class="link-list">
                                <li><a class="list-item" href="#" onclick="javascript:body.style.fontSize='0.55em'; setFontSizeCookie('page_font_size', '0.1', 30);" style="cursor: pointer;"><span style="font-size:0.65em">Picolo A</span></a></li>
                                <li><a class="list-item" href="#" onclick="javascript:body.style.fontSize='0.85em'; setFontSizeCookie('page_font_size', '1.2', 30);" style="cursor: pointer;"><span style=";font-size:0.85em">Medio A</span></a></li>
                                <li><a class="list-item" href="#"onclick="javascript:body.style.fontSize='1.2em'; setFontSizeCookie('page_font_size', '1.7', 30);" style="cursor: pointer;"><span style="font-size:1.2em">Grand A</span></a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- zooooom -->
                    <div class="col-md-2 col-sm-12 text-center">
                    <div class="dropdown">
                            <span class="text-white" style="cursor:pointer;">Zoom</span>
                            <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <svg class="icon-expand icon icon-white icon-md icon-primary"><use xlink:href="/svg/sprite.svg#it-expand"></use></svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="link-list-wrapper">
                                <ul class="link-list">
                                    <li class="list-item px-4"><input type="range" min="50" max="150" value="100" id="range" onchange= "zoom(this.value);"></li>
                                    <li>
                                        <span class="divider"></span>
                                    </li>
                                    <li class="list-item px-4 "><span class="text-primary" onclick="default_zoom();";">Default size</span></li>
                                </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cursor size -->
                    <div class="col-md-2 col-sm-12 text-center">
                    <div class="dropdown">
                            <span class="text-white" style="cursor:pointer;">Cursor</span>
                            <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <svg class="icon-expand icon icon-white icon-md icon-primary"><use xlink:href="/svg/sprite.svg#it-expand"></use></svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="link-list-wrapper">
                                <ul class="link-list">
                                    <li class="list-item px-4"><span onclick= "cursor();">change cursor pointer</span></li>
                                    <li>
                                        <span class="divider"></span>
                                    </li>
                                    <li class="list-item px-4 "><span class="text-primary" onclick="javascript:body.style.cursor='context-menu';">Default size</span></li>
                                </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- contrast -->
                    <div class="col-md-2 col-sm-12 text-center">
                    <div class="dropdown">
                            <span class="text-white" style="cursor:pointer;">Contrasto Elevato</span>
                            <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <svg class="icon-expand icon icon-white icon-md icon-primary"><use xlink:href="/svg/sprite.svg#it-expand"></use></svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="link-list-wrapper">
                                <ul class="link-list">
                                    <li class="list-item px-4 "><span class="text-primary" onclick="defaults_them();" >default</span></li>
                                    <li>
                                        <span class="divider"></span>
                                    </li>
                                    <li class="list-item px-4 "><span class="text-primary" onclick="sfondo_nero();" >Sfondo nero</span></li>
                                    <li>
                                        <span class="divider"></span>
                                    </li>

                                    <li class="list-item px-4 "><span class="text-primary" onclick="scala_grigi();">scala di grigi</span></li>
                                </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--i will implemented this part with vue  -->
                    <!-- Lettore Di Schermo -->
                    <!-- <div class="" > -->
                    <div class="dropdown col-sm-12 col-md-3">
                
                    <button class="btn btn-dropdown dropdown-toggle  col-sm-12" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    <span class="text-white">Lettore Di Schermo</span>    
                    <svg class=" icon icon-white icon-md icon-primary"><use xlink:href="/svg/sprite.svg#it-expand"></use></svg>
                        </button>  
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="link-list-wrapper">
                            <p class="p-2 h6 text-danger">Il portale è compatibile con i seguenti lettori di schermo.</p>
                            <ul class="link-list" style="border:solid 2px black;margin:10px;padding:5px" >
                                <li><a class="list-item text-center mt-3"  target="_blank" href="https://www.nvaccess.org/"><span class="h5 text-ceter">NV Acess Per Windows</span><img width="180px"  src="/images/windows.png" alt="Nv_access" ></a></li>
                                <li>
                                    <span class="divider"></span>
                                </li>
                                <li><a class="list-item h5 text-center"  target="_blank"  href="https://wiki.gnome.org/Projects/Orca/"><span class="h5 text-center">Orca per Ubuntu</span><img  width="100px" src="/images/ubuntu.png" alt="orca_access" ></a></li>

                            </ul>
                            <p class="px-3 text-justify ">
                            La preghiamo di consultare la relativa documentazione riguardo il loro utilizzo cliccando su uno dei precedenti link. Verrà indirizzato su un sito esterno.
                            </p>
                            </div>
                    
                        </div>
                        
                        </div>
                    
                </div>
            </div>
            </div>
            <div class="col-md-1 col-sm-1">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close" onclick="dis_close();">
                <svg class="icon icon-white bg-dark icon-md">
                    <use xlink:href="/svg/sprite.svg#it-close"></use>
                </svg>
            </button>
        
            </div>
            
        
        
        </div>
    
</div>
</div>
<!-- disability part -->


<!-- Button trigger modal -->




























