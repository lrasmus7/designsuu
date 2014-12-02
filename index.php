<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--<meta http-equiv="refresh" content="0; url="http://localhost/index.php?id=1" />-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Student Admin Menu</title>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- MetisMenu CSS -->
<link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/sb-admin-2.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- fonts -->
<link href='http://fonts.googleapis.com/css?family=Marko+One|Open+Sans:400italic,700,400' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="ScriptLibrary/jquery-latest.pack.js"></script>
<script type="text/javascript" src="ScriptLibrary/dmxDataBindings.js"></script>
<script type="text/javascript" src="ScriptLibrary/dmxDataSet.js"></script>
<script type="text/javascript">
  /* dmxDataSet name "maincoursedata" */
       jQuery.dmxDataSet(
         {"id": "maincoursedata", "url": "dmxDatabaseSources/Main_Course_Data.php?id={{$URL.id}}&limit=25", "dataSourceType": "database", "dataType": "jsonp"}
       );
  /* END dmxDataSet name "maincoursedata" */
  /* dmxDataSet name "imagedata" */
       jQuery.dmxDataSet(
         {"id": "imagedata", "url": "dmxDatabaseSources/Image_Data.php?limit=25", "dataSourceType": "database", "dataType": "jsonp"}
       );
  /* END dmxDataSet name "imagedata" */
  /* dmxDataSet name "project1Images" */
       jQuery.dmxDataSet(
         {"id": "project1Images", "url": "dmxDatabaseSources/project_1.php?id={{$URL.id}}&limit=25", "dataSourceType": "database", "dataType": "jsonp"}
       );
  /* END dmxDataSet name "project1Images" */
  /* dmxDataSet name "project2Images" */
       jQuery.dmxDataSet(
         {"id": "project2Images", "url": "dmxDatabaseSources/project_2.php?id={{$URL.id}}&limit=25", "dataSourceType": "database", "dataType": "jsonp"}
       );
  /* END dmxDataSet name "project2Images" */
  /* dmxDataSet name "project3Images" */
       jQuery.dmxDataSet(
         {"id": "project3Images", "url": "dmxDatabaseSources/project_3.php?id={{$URL.id}}&limit=25", "dataSourceType": "database", "dataType": "jsonp"}
       );
  /* END dmxDataSet name "project3Images" */
</script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        	<div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Design SUU</a>
            </div>
            <!-- /.navbar-header -->
				
                <!-- Nav tabs -->
                
                <!--#web1-pills #web2-pills #web3-pillsdata-toggle="tab"data-toggle="tab"data-toggle="tab"-->
                            <ul class="nav nav-pills col-xs-9 col-md-4">
                                <li class="active"><a href="index.php?id=1" >Web 1</a>
                                </li>
                                <li><a href="index.php?id=2" >Web 2</a>
                                </li>
                                <li><a href="index.php?id=3" >Web 3</a>
                                </li>
                            </ul>
                            
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-heart fa-fw"></i> Extras</a>
                        </li>
                        <li><a href="#"><i class="fa fa-book fa-fw"></i> Archive</a>
                        </li>
                        <li><a href="#"><i class="fa fa-eye fa-fw"></i> Student View</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="admin/admin_login.html"><i class="fa fa-sign-in fa-fw"></i> Login</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           
         </div>   
        </nav>

        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <h1>{{maincoursedata.data[0].courseNumber}} {{maincoursedata.data[0].courseName}}</h1>
                <h1>Professor {{maincoursedata.data[0].firstName}} {{maincoursedata.data[0].lastName}}</h1>
                <hr>
            </div></div><!-- row -->

                        <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="web1-pills">
                                    <br>
                                    <div class="col-lg-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4>Project 1</h4>
                                            </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                    
                                                    
                                                    
                                                    
                                                    
                                                            <div class="col-md-6" data-binding-repeat="{{project1Images.data}}" data-binding-id="repeat1"><figure><a href="#"><img src="{{link}}{{filename}}"  alt="thumbnail.png" class="img-responsive center-block"></a><figcaption>{{firstName}} {{lastName}}</figcaption></figure> <!-- link to upload --></div>
                                                            
                                                            
<!--                                                            <div class="col-md-6"><figure><a href="#"><img src="http://dummyimage.com/200x200/4d494d/686a82.gif&text=placeholder+image" alt="thumbnail.png" class="img-responsive center-block"></a><figcaption>Student Name</figcaption></figure> </div>
                                                  </div>
                                                     <div class="row">
                                                            <div class="col-md-6"><figure><a href="#"><img src="http://dummyimage.com/200x200/4d494d/686a82.gif&text=placeholder+image" alt="thumbnail.png" class="img-responsive center-block"></a><figcaption>Student Name</figcaption></figure> </div>
                                                            <div class="col-md-6"><figure><a href="#"><img src="http://dummyimage.com/200x200/4d494d/686a82.gif&text=placeholder+image" alt="thumbnail.png" class="img-responsive center-block"></a><figcaption>Student Name</figcaption></figure> </div>-->
                                                   
                                                   
                                                     </div>
                                                </div>
                                            <div class="panel-footer">
                                                <p>More</p>
                                            </div>
                                        </div> <!-- /.panel -->
                                    </div> <!-- /.col-lg-4 -->


                                    <div class="col-lg-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4>Project 2</h4>
                                            </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                            <div class="col-md-6" data-binding-repeat="{{project2Images.data}}" data-binding-id="repeat2"><figure><a href="#"><img src="{{link}}{{filename}}" alt="thumbnail.png" class="img-responsive center-block"></a><figcaption>{{firstName}} {{lastName}}</figcaption></figure></div>
                                                           
                                                           <!-- <div class="col-md-6"><figure><a href="#"><img src="http://dummyimage.com/200x200/4d494d/686a82.gif&text=placeholder+image" alt="thumbnail.png" class="img-responsive center-block"></a><figcaption>Student Name</figcaption></figure></div>
                                                     </div>
                                                     <div class="row">
                                                            <div class="col-md-6"><figure><a href="#"><img src="http://dummyimage.com/200x200/4d494d/686a82.gif&text=placeholder+image" alt="thumbnail.png" class="img-responsive center-block"></a><figcaption>Student Name</figcaption></figure></div>
                                                            <div class="col-md-6"><figure><a href="#"><img src="http://dummyimage.com/200x200/4d494d/686a82.gif&text=placeholder+image" alt="thumbnail.png" class="img-responsive center-block"></a><figcaption>Student Name</figcaption></figure></div>-->
                                                            
                                                     </div>   
                                                </div>
                                            <div class="panel-footer">
                                                <p>More</p>
                                            </div>
                                        </div> <!-- /.panel -->
                                    </div> <!-- /.col-lg-4 -->


                                    <div class="col-lg-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4>Project 3</h4>
                                            </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                                                                                        <div class="col-md-6" data-binding-repeat="{{project3Images.data}}" data-binding-id="repeat2"><figure><a href="#"><img src="{{link}}{{filename}}" alt="thumbnail.png" class="img-responsive center-block"></a><figcaption>{{firstName}} {{lastName}}</figcaption></figure></div>
                                                     </div>   
                                                </div>
                                            <div class="panel-footer">
                                                <p>More</p>
                                            </div>
                                        </div> <!-- /.panel -->
                                    </div> <!-- /.col-lg-4 --> <!-- end web1 -->

                               
                                <!-- end tab contents -->

            
        </div>
        <!-- /#page-wrapper -->
	<footer>&copy; Southern Utah University 2014</footer>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>

