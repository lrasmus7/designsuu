<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Student Admin Menu</title>
<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.css" rel="stylesheet">
<!-- MetisMenu CSS -->
<link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="../css/sb-admin-2.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- fonts -->
<link href='http://fonts.googleapis.com/css?family=Marko+One|Open+Sans:400italic,700,400' rel='stylesheet' type='text/css'>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="../ScriptLibrary/jquery-latest.pack.js"></script>
<script type="text/javascript" src="../ScriptLibrary/dmxDataBindings.js"></script>
<script type="text/javascript" src="../ScriptLibrary/dmxDataSet.js"></script>
<script type="text/javascript" src="../ScriptLibrary/dmxDatabaseAction.js"></script>
<script type="text/javascript">
/* dmxDataSet name "student_select" */
       jQuery.dmxDataSet(
         {"id": "student_select", "url": "../dmxDatabaseSources/studentSelect.php?limit=25", "dataSourceType": "database", "dataType": "jsonp"}
       );
  /* END dmxDataSet name "student_select" */
function dmxDatabaseActionControl(action, id) { // v1.0
  if (jQuery.dmxDatabaseAction) {
    var da = jQuery.dmxDatabaseAction.get(id),
        args = Array.prototype.slice.call(arguments, 2);
    if (da) {
      da[action].apply(da, args);
    }
  }
}
function dmxDataBindingsAction(action, target) { // v1.50
 var inst, evt = jQuery.event.fix(window.event || arguments.callee.caller.arguments[0]),
  args = Array.prototype.slice.call(arguments, 2);

 switch (action) {
  case 'refresh': inst = 'ds'; action = 'load'; break;
  case 'setPage': inst = 'ds'; break;
  case 'selectCurrent': inst = 'rp'; action = 'select'; break;
 }

 inst = (inst == 'ds')
  ? jQuery.dmxDataSet.dataSets[target]
  : jQuery(evt.target).closest('[data-binding-id="' + target + '"]').data('repeater')
  || jQuery.dmxDataBindings.regions[target];

 if (inst) inst[action].apply(inst, args);

 evt.preventDefault();
}
</script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin_index.html">Student Control Panel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-heart fa-fw"></i> Extras</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="admin_index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="admin_class.html"><i class="fa fa-table fa-fw"></i> Class</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <h1>Class</h1>
                <hr>
            </div> <!-- row -->
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#web1-pills" data-toggle="tab">Web 1</a>
                                </li>
                                <li><a href="#web2-pills" data-toggle="tab">Web 2</a>
                                </li>
                                <li><a href="#web3-pills" data-toggle="tab">Web 3</a>
                                </li>
                            </ul>
                            
        
        <div class="insert">
            <p>
              <label for="studentID">Select Student Name:</label>
              <select name="studentID" id="studentID">
              <option>Select Your Name</option>
              <option class="select-dash" disabled="disabled">----------</option>
              <option data-binding-id="repeat1" data-binding-repeat="{{student_select.data}}" value="{{id}}">{{firstName}} {{lastName}}</option>
              
              </select>
            </p>
            <p>
              <label for="projectNum">Select Project:</label>
              <select name="projectNum" id="projectNum">
           	    <option>Select Project</option>
                  <option class="select-dash" disabled="disabled">----------</option>
                <option value="1">Project 1</option>
                <option value="2">Project 2</option> 
                <option value="3">Project 3</option>  
             
              </select>
            </p>
            <p>
              <label for="projectFilename">Upload File:</label>
              <input type="file" name="projectFilename" id="projectFilename">
            </p>
            <p>
              <label for="projectURL">Site URL:</label>
              <input name="projectURL" type="text" id="projectURL" size="80">
            </p>
            <p>
              <input name="button" type="button" id="button" onClick="dmxDatabaseActionControl('run','projectInsertEx',{},this)" value="Insert Project">
            </p>
            <p>
              <input type="reset" name="reset" id="reset" value="Reset">
            </p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>
<script type="text/javascript">
  /* dmxDatabaseAction name "projectInsertEx" */
       jQuery.dmxDatabaseAction(
         {"id": "projectInsertEx", "url": "../dmxDatabaseActions/insertProject.php", "data": {"projectNum": "{{$FORM.projectNum}}", "projectFilename": "{{$FORM.projectFilename}}", "projectURL": "{{$FORM.projectURL}}", "studentID": "{{$FORM.studentID}}"}, "success": "dmxDataBindingsAction('refresh','student_select',{});"}
       );
  /* END dmxDatabaseAction name "projectInsertEx" */
    </script>
</body>

</html>

