<!DOCTYPE html>
<html lang="en">
<head>

    <title>Area Riservata</title>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="<?php echo url('/login'); ?>/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/areariservata'); ?>/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/areariservata'); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/areariservata'); ?>/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/areariservata'); ?>/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo url('/areariservata'); ?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/areariservata'); ?>/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/areariservata'); ?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo url('/areariservata'); ?>/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/areariservata'); ?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo url('/areariservata'); ?>/css/main.css">
<!--===============================================================================================-->
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src = "<?php echo url('/img'); ?>/logoindexwhite.png">

                    </a>
                    
                </div>
              
                

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="laboratorioindex.html" ><i class="fa fa-desktop "></i>Dashboard <span class="badge"></span></a>
                    </li>
                   

                  
                   


                    
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Logout</a>
                    </li>

                    
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Area Riservata ASL</h2>   
                    </div>
                </div>              
                
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h5><b>LISTA ESITI TAMPONI</b></h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>CF Prenotante</th>
                                    <th>CF Tamponato</th>
                                    <th>Data</th>
                                    <th>Ora</th>
                        
                                    <th>Esito</th>
                           
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>dffd</td>
                                    <td>dffd</td>
                                    <td>dffd</td>
                               
                                   
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>@mdo</td>
                                    <td>dffd</td>
                                    <td>dffd</td>
                             
                                    
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>dffd</td>
                                    <td>dffd</td>
                                   
                                    
                                </tr>
                                
                                
                            </tbody>
                        </table>
                 

                        
                
                        <button type=”submit”>Tasso di Positività</button>  <br> <br>
                        <h5><b>Filtra Per:</b></h5>
                        <select id="ddl" onchange="configureDropDownLists(this,document.getElementById('ddl2'))">
                            
                            <option value="Filtra Per"></option>
                            <option value="Colours">Esito</option>
                            <option value="Shapes">Data</option>
                            <option value="Names">Ora</option>
                            </select><br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                        </form>
                       
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  ©2021 Realizzato da <a href="https://github.com/BarbieriGiuseppe/GRUPPO_LCB">Gruppo LCB</a>
                </div>
            </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <!--===============================================================================================-->
	<script src="<?php echo url('/areariservata'); ?>/areariservata/js/jquery-1.10.2.js"></script>
    <!--===============================================================================================-->
        <script src="<?php echo url('/areariservata'); ?>/areariservata/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="<?php echo url('/areariservata'); ?>/areariservata/js/custom.js"></script>
        
    
   
</body>
</html>
