<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assignment/application/css/bootstrap.css" crossorigin="anonymous">

    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='../assignment/application/css/x3dom.css'>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assignment/application/css/custom.css" crossorigin="anonymous">

      <!-- Lets have some fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- fancyBox3 -->
    <link rel="stylesheet" type="text/css" href="../assignment/application/css/jquery.fancybox.min.css">
    
    <title>Web 3D Coca Cola Assignment</title>

  </head>
  <body id="bodyColor">
      <!-- The 3D App header -->
      <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      
            <!-- Brand -->
            <div class="logo">
              <a class="navbar-brand" href="#">
                <h1>Coca Cola</h1>
                <p>The one and only, Coca Cola</p>
              </a>
            </div>

            <!-- Navbar Menu Icon -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- link Menu Icon button to the links class navbar-collapse selector] -->
            <div class="collapse navbar-collapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a id="navHome" class="nav-link active" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" 
                    data-trigger="hover" data-placement="bottom" title="Statement of Originality" 
                    data-content="This is the statement of originality">Statement</a>
                  </li>
              

                    <li class="nav-item">
                    <a id="navGallery" class="nav-link active"  href="#" data-toggle="popover" 
                    data-trigger="hover" data-placement="bottom" title="Gallery" 
                    data-content="This is the Gallery">Gallery</a>
                  </li>

                  <li class="nav-item">
                    <a id="navLink" class="nav-link active"  href="#" data-toggle="popover" 
                    data-trigger="hover" data-placement="bottom" title="Links" 
                    data-content="Links are here">Links</a>
                  </li>
              

                  <!-- Dropdown -->
                  <li class="nav-item">
                      <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Appletiser and Pepper">Models</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                  </li>
                </ul>
            </div>
      </nav>

      <!-- This is the main contents of the page, it has a background image across 1 column, followed by three columns holding cards in a row for the 3 images and associated texts
      -->
    
      <div class="container-fluid main_contents">
      <div class="main_contents" id='home'>
        <div class="row">
          <div class="col-sm-12">
           <!-- <div id="main_3d_image"> -->


           <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class=" carousel-item active">
                  <img src="../assignment/application/assets/images/cokeBanner1.jpg" alt="banner1">
                </div>

                <div class="carousel-item">
                  <img src="../assignment/application/assets/images/cokeBanner2.jpg" alt="banner2">
                </div>

                <div class="carousel-item">
                  <img src="../assignment/application/assets/images/cokeBanner3.jpg" alt="banner3">
                  </div>

                  <div class="carousel-item">
                  <img src="../assignment/application/assets/images/banner4.png" alt="banner4">
                  </div>
                </div>
                </div>
              </div>
            </div>
            

            <!-- A row to hold three cards for the Coke, Appletiser and Pepper contents -->
            <div class="row">
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="../assignment/application/assets/images/renderImages/coke1.png" data-fancybox data-caption="3D Coke Can Render">
                            <img class="card-img-top img-fluid img-thumbnail" src="../assignment/application/assets/images/coca_cola.jpg" alt="Coca Cola">
                          </a>
                          <div class="card-body">
                                <div id="title_left" class="card-title drinksText"></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"></div>
                                <h><?php echo $data[0]['card_Description1'] ?></h> 
                                  <br>
                                  <br>
                                  <br>
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>                 
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card">
                          <a href="../assignment/application/assets/images/renderImages/bottle.png" data-fancybox data-caption="3D Appletiser Bottle Render" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" src="../assignment/application/assets/images/appletiser.jpg" alt="appletiser">
                          </a>
                          <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <h><?php echo $data[0]['card_Description2'] ?></h> 
                                  <br>
                                  <br>
                                  <br>
                                  <br>      
                            <a href="https://www.coca-cola.co.uk/brands/appletiser" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                          
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="../assignment/application/assets/images/renderImages/cup.png" data-fancybox data-caption="3D Pepper Cup Render" class="thumbnail">
                            <img class="card-img-top img-fluid img-thumbnail" src="../assignment/application/assets/images/dr_pepper.jpg" alt="Dr Pepper">
                          </a>
                          <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <h><?php echo $data[0]['card_Description3'] ?></h> 
                                  <br>
                                  <br>


                            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                      </div>
                  </div>
            </div>
          </div>  <!-- End home page contents-->

          <!-- Statement -->
          <div id="about" style="display:none;">
            <div id= "about"class="card-body">
                <br>
                <h2>
                These web pages are submitted as part requirement for the degree of Computing for Digital Media at the University of Sussex. 
                <br>
                They are the product of my own labour except where indicated in the web page content.
                <br>
                 These web pages or contents may be freely copied and distributed provided the source is acknowledged.
                </h2>                                   
           </div>
        </div>  
        <!-- End Statement -->

          <!-- Gallery -->
          <div id="galleryPage" style="display:none;">
            <div id= "galleryPage"class="card-body">
                <br>
                 <div class="card-title title_gallery drinksText"></div>
                 <div class="gallery" id="gallery"></div>                     
           </div>
        </div>  
        <!-- End Gallery -->

       <!-- Gallery -->
       <div id="link" style="display:none;">
            <div id= "link"class="card-body">
                <br>
                <h3>
                Github Link:<a href="https://github.com/Akxiva/Web-3D-Assignment.git">Here</a>
                <br>
                3ds Max Archive:<a href="https://github.com/Akxiva/Web-3D-Assignment/tree/main/3ds%20Max%20archive">Here</a>
                <br>
                X3D model  Link:<a href="https://github.com/Akxiva/Web-3D-Assignment/tree/main/application/assets/x3d">Here</a>
                <hr>                 
              </h3>      
           </div>
        </div>  
        <!-- End Statement -->


     

          <!-- This is the content for X3D models and 3D Image Gallery -->
          <div id="models" class="main_contents" style="display:none;">
            <div class="row">
              <!-- X3D Model -->
              <div class="col-sm-12">
                <div class="card text-left">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <!-- X3D Models -->
                    <div>
                        <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_appletiser" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>

                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="appletiserScene(); appletiserDescription();">Appletiser</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Pepper</button>
                        
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                          <x3d id="wire">
                            <scene>
                                <Switch whichChoice="0" id='SceneSwitch'>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assignment/application/assets/x3d/coke_Spin.x3d" > </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assignment/application/assets/x3d/bottle.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assignment/application/assets/x3d/cup.x3d"> </inline>
                                    </transform>
                                </Switch>
                            </scene>
                          </x3d>
                        </div> 
                        <br>
                        <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                        <br>
                        <div id="x3dCreationMethod_appletiser" class="card-text drinksText"></div>
                        <br>
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                    </div>
                  </div>
                </div>
              </div>


            </div> <!-- End row for X3D Model and Gallery -->
          </div> 

          <!-- Row to hold the interaction panels -->
          <div id="interaction" class="row" style="display:none;">
                <!-- Column for the camera view controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Camera</a>
                            </li>               
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraFront();"> Front </a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBack();"> Back </a>
                          <hr>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();"> Left </a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();"> Right </a>
                          <hr>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraTop();"> Top </a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBottom();"> Bottom </a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <br>
                            <p></p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the animation controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Controls</h3>
                          </div>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">Start Animation</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <br>
                              
                              <br>
                              
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                            <a class="nav-link active" href="#">Wireframe</a>
                              <div class="dropdown-menu">
                                <!-- <a class="dropdown-item" href="#">Polygon</a> -->
                                <a class="dropdown-item" href="#" onclick="wireFrame();">Wireframe View</a>
                                <!-- <a class="dropdown-item" href="#">Vertex</a> -->
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                          <a class="nav-link active" href="#">Light</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="headLight();">Default</a>
                                <a class="dropdown-item" href="#" onclick="omniLight();">Onmi On/Off</a>
                                <a class="dropdown-item" href="#" onclick="targetLight();">Target On/Off</a>
                                <a class="dropdown-item" href="#" onclick="headLight();">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wireframe View</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <br>
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
          </div> <!-- End row for the interaction panels -->

          <!-- Row to hold one card to hold the coke descriptive text, etc.-->
          <div id="cokeDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_coke" class="card-title drinksText"></div>
                          <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                          <h><?php echo $data[0]['model_Description1'] ?></h> 
                                  <br>
                                  <br>
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End coke description contents -->

          <!-- Row to hold one card to hold the appletiser descriptive text, etc.-->
          <div id="appletiserDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_appletiser" class="card-title drinksText"></div>
                          <div id="subTitle_appletiser" class="card-subtitle drinksText"></div>
                          <h><?php echo $data[0]['model_Description2'] ?></h> 
                                  <br>
                                  <br>
                        <a href="https://www.coca-cola.co.uk/brands/appletiser" class="btn btn-primary btn-responsive">Visit Appletiser</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End Appletiser description contents -->

          <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
          <div id="pepperDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <h><?php echo $data[0]['model_Description3'] ?></h> 
                                  <br>
                                  <br>
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End pepper description contents -->
      </div> <!-- End 3D App SPA Contents -->
      

      <!-- Start Footer -->
      <nav id="footerColor" class="navbar navbar-expand-sm footer fixed-bottom"> 
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright ">
                  <p><span class="align-baseline">&copy 2022 3D Apps | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
              </div>
              <div class="navbar-text float-right social">
                  <a href="https://www.facebook.com/cocacolaGB/?brand_redir=40796308305"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="https://twitter.com/CocaCola?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter fa-2x"></i></a>
                  <a href="https://www.google.com"><i class="fab fa-google-plus fa-2x"></i></a>
                  <a href="https://github.com/Akxiva/Web-3D-Assignment"><i class="fab fa-github-square fa-2x"></i></a>
              </div>
          </div>
      </nav> 

      <!-- My 3D App modals -->
      <!-- Contact modal -->
      <!-- The Modal -->
      <div class="modal fade" id="contactModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">3D App Contact Details</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <p>Sze Chun Kwok (Aiden)
                   <br>
                    Email : sk727@sussex.ac.uk
                    <hr>
                  </p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
      </div>

      <!-- JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../assignment/application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
      <script src="../assignment/application/js/popper.min.js" crossorigin="anonymous"></script>
      <script src="../assignment/application/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="../assignment/application/js/fontawesome-all.min.js"></script>
      <!-- Custom JavaScript code for your 3d App -->
      <script src="../assignment/application/js/custom.js" crossorigin="anonymous"></script>
      <!-- JavaScript to swap for SPA and restyle -->
      <script src="../assignment/application/js/swap_restyle.js"></script>
      <!-- Include the x3dom JavaScript -->
      <script type='text/javascript' src='../assignment/application/js/x3dom-1.7.2/x3dom.js'></script>
      <!-- JavaScript and PHP based Gallery generator  -->
      <script type="text/javascript" src="../assignment/application/js/gallery_generator.js"></script>
      <!-- JQuery code to get content data from a backend JSON file -->
      <script src="../assignment/application/js/getJsonData.js"></script>
      <!-- JavaScript model interactions -->
      <script src="../assignment/application/js/modelInteractions.js"></script>

      <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
      <script src="../assignment/application/js/jquery.fancybox.min.js"></script>
  </body>
</html>