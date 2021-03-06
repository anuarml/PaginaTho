<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>ETT</title>

        <meta name="description" content="" />
        <!-- anuar-->
        <meta name="author" content="anuar">
        <!-- Favicon-->
        <link rel="shortcut icon" href="./favicon.png" />		
        
        <!-- Bootstrap -->
        <link href="css/librerias/bootstrap.min.css" rel="stylesheet">
        <!-- Template  -->
        <!--<link href="css/templatemo_style.css" rel="stylesheet">-->
        <link href="css/adminPanel/main.css" rel="stylesheet">
        <link href="css/adminPanel/theme.css" rel="stylesheet">
        <link href="css/adminPanel/MoneAdmin.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="css/librerias/Font-Awesome/css/font-awesome.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->   
    </head>
    <body class="padTop53">
        <!-- MAIN WRAPPER -->
        <div id="wrap">
            <!-- HEADER SECTION -->
            <div id="top">

                <nav class="navbar navbar-inverse navbar-fixed-top " >
                    <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                        <i class="icon-align-justify"></i>
                    </a>
                    <!-- LOGO SECTION -->
                    <header class="navbar-header" id="topBar">
                        <!--<a href="index.html" class="navbar-brand" >
                            
                        </a>-->
                        <img id="logoNav" src="images/LogoETTCompleto.png" alt="" />
                    </header>
                    <!-- END LOGO SECTION -->
                </nav>

            </div>
            <!-- END HEADER SECTION -->

            <!-- MENU SECTION -->
            <div id="left">
                <div class="media user-media well-small">
                    <!--<a class="user-link" href="#">
                        <img class="media-object img-thumbnail user-img" alt="User Picture" src="images/about/jr.jpg"/>
                    </a>-->
                    <div class="media-body">
                        <h5 class="media-heading"> Panel de administracion</h5>   
                    </div>
                    <br/>
                </div>

                <ul id="menu" class="collapse">                    
                    <li class="panel active">
                        <a href="#" id="proyectos">
                            <i class="icon-table"></i> Proyectos
                        </a>                   
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-film"></i> Eventos 
                        </a>
                    </li>
                    <!--<li><a href="tables.html"><i class="icon-table"></i> Data Tables </a></li>
                    <li><a href="maps.html"><i class="icon-map-marker"></i> Maps </a></li>

                    <li><a href="grid.html"><i class="icon-columns"></i> Grid </a></li>-->                     
                    <li><a href="./"><i class="icon-signin"></i> Cerrar &loz; Sesión </a></li>
                </ul>
            </div>
            <!--END MENU SECTION -->

            <!--PAGE CONTENT -->
            <div id="content">              
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1> Eventos </h1>
                        </div>
                    </div>
                    <hr/>                       
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Block Validation</h5>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <div class="btn-group">
                                                    <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                        href="#collapseOne">
                                                        <i class="icon-chevron-up"></i>
                                                    </a>
                                                    <button class="btn btn-xs btn-danger close-box">
                                                        <i class="icon-remove"></i>
                                                    </button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
                                    <form action="#" class="form-horizontal" id="block-validate">

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Required</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="required2" name="required2" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">E-mail</label>

                                            <div class="col-lg-4">
                                                <input type="email" id="email2" name="email2" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Password</label>

                                            <div class="col-lg-4">
                                                <input type="password" id="password2" name="password2" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Confirm Password</label>

                                            <div class="col-lg-4">
                                                <input type="password" id="confirm_password2" name="confirm_password2" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Date</label>

                                            <div class="col-lg-4">
                                                <input type="date" id="date2" name="date2" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Url</label>

                                            <div class="col-lg-4">
                                                <input type="url" id="url2" name="url2" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Digits Only</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="digits" name="digits" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Range [5,16]</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="range" name="range" class="form-control" />
                                            </div>
                                        </div>

                                        
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="Click To Validate" class="btn btn-primary btn-lg " />
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header class="dark">
                                    <div class="icons"><i class="icon-ok"></i></div>
                                    <h5>Popup Validation</h5>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <div class="btn-group">
                                                    <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                        href="#collapse2">
                                                        <i class="icon-chevron-up"></i>
                                                    </a>
                                                    <button class="btn btn-xs btn-danger close-box"><i class="icon-remove"></i></button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapse2" class="body collapse in">
                                    <form class="form-horizontal" id="popup-validation">

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Required</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="validate[required] form-control" name="req" id="req">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Select</label>
                                            <div class="col-lg-4">
                                                <select name="sport" id="sport" class="validate[required] form-control">
                                                    <option value="">Choose a sport</option>
                                                    <option value="option1">Tennis</option>
                                                    <option value="option2">Football</option>
                                                    <option value="option3">Golf</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Multiple Select</label>

                                            <div class="col-lg-4">
                                                <select name="sport2" id="sport2" multiple="multiple" class="validate[required] form-control">
                                                    <option value="">Choose a sport</option>
                                                    <option value="option1">Tennis</option>
                                                    <option value="option2">Football</option>
                                                    <option value="option3">Golf</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Url</label>

                                            <div class=" col-lg-4">
                                                <input value="http://" class="validate[required,custom[url]] form-control" type="text"
                                                    name="url1" id="url1" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">E-mail</label>

                                            <div class=" col-lg-4">
                                                <input class="validate[required,custom[email]] form-control" type="text" name="email1"
                                                    id="email1" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Password</label>

                                            <div class=" col-lg-4">
                                                <input class="validate[required] form-control" type="password" name="pass1" id="pass1" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Confirm Password</label>

                                            <div class=" col-lg-4">
                                                <input class="validate[required,equals[pass1]] form-control" type="password" name="pass2"
                                                    id="pass2" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Minimum field size (6)</label>

                                            <div class=" col-lg-4">
                                                <input value="" class="validate[required,minSize[6]] form-control" type="text" name="minsize1"
                                                    id="minsize1" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Maximum field size, optional</label>

                                            <div class=" col-lg-4">
                                                <input value="0123456789" class="validate[optional,maxSize[6]] form-control" type="text"
                                                    name="maxsize1" id="maxsize1" />
                                                <span class="help-block">note that the field is optional - it won't fail if it has no value</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Number</label>

                                            <div class=" col-lg-4">
                                                <input value="-33.87a" class="validate[required,custom[number]] form-control" type="text"
                                                    name="numbe2r" id="number2" />
                                                <span class="help-block">a signed floating number, ie: -3849.354, 38.00, 38, .77</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">IP</label>

                                            <div class=" col-lg-4">
                                                <input value="192.168.3." class="validate[required,custom[ipv4]] form-control" type="text"
                                                    name="ip" id="ip" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Date</label>

                                            <div class=" col-lg-4">
                                                <input value="201-12-01" class="validate[required,custom[date]] form-control" type="text"
                                                    name="date3" id="date3" />
                                                <span class="help-block">ISO 8601 dates only YYYY-mm-dd</span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Date Earlier</label>

                                            <div class=" col-lg-4">
                                                <input value="2012/12/16" class="validate[custom[date],past[2012/09/13]] form-control"
                                                    type="text" name="past" id="past" />
                                                <span class="help-block">Please enter a date ealier than 2012/09/13</span>
                                            </div>
                                        </div>

                                        <div style="text-align:center" class="form-actions no-margin-bottom">
                                            <input type="submit" value=" Click To Validate" class="btn btn-primary btn-lg " />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-ok"></i></div>
                                    <h5>Inline Validation</h5>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <div class="btn-group">
                                                    <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                        href="#collapse3">
                                                        <i class="icon-chevron-up"></i>
                                                    </a>
                                                    <button class="btn btn-xs btn-danger close-box"><i class="icon-remove"></i></button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapse3" class="accordion-body collapse in body">
                                    <form action="#" class="form-horizontal" id="inline-validate">
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Required</label>

                                            <div class="col-lg-8">
                                                <input type="text" id="required" name="required" class="form-control col-lg-6" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">E-mail</label>

                                            <div class="col-lg-8">
                                                <input type="email" id="email" name="email" class="form-control col-lg-6" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Password</label>

                                            <div class="col-lg-8">
                                                <input type="password" id="password" name="password" class="form-control col-lg-6" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Confirm Password</label>

                                            <div class="col-lg-8">
                                                <input type="password" id="confirm_password" name="confirm_password" class="form-control col-lg-6" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Date</label>

                                            <div class="col-lg-8">
                                                <input type="date" id="date" name="date" class="form-control col-lg-6" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Url</label>

                                            <div class="col-lg-8">
                                                <input type="url" id="url" name="url" class="form-control col-lg-6" />
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Minimum 3 Chars</label>

                                            <div class="col-lg-8">
                                                <input type="text" id="minsize" name="minsize" class="form-control col-lg-6" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Maximum 6 Chars</label>

                                            <div class="col-lg-8">
                                                <input type="text" id="maxsize" name="maxsize" class="form-control col-lg-6" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Minimum 3 </label>

                                            <div class="col-lg-8">
                                                <input type="text" id="minNum" name="minNum" class="form-control col-lg-6" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Maximum 16 </label>

                                            <div class="col-lg-8">
                                                <input type="text" id="maxNum" name="maxNum" class="form-control col-lg-6" />
                                            </div>
                                        </div>
                                        <div class="form-actions" style="text-align:center">
                                            <input type="submit" value="Click To Validate" class="btn btn-primary btn-lg" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                                       
                   
                     

                    
                    </div>
                    
                    
                    

                </div>
              <!--END PAGE CONTENT -->
            </div>

         <!--END MAIN WRAPPER -->

        <!-- FOOTER -->
        <div id="footer">
            <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
        </div>
        <!--END FOOTER -->
        <script src="js/librerias/jquery.min.js"></script>
        <script src="js/librerias/jquery-ui.min.js"></script>
        <script src="js/librerias/bootstrap.min.js"></script>
        <script src="js/librerias/jquery.singlePageNav.min.js"></script>
        <script src="js/librerias/unslider.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($){
                 $("#proyectos").click(function(){
                     $("#content").load("index.php");
                 });
            });
        </script>
    </body>
</html>