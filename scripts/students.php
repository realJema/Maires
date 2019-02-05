<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Informations Generales sur les Communes</title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">

  <link href="js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

  <script src="js/jquery.min.js"></script>

  <!-- ammaps dependencies -->
  <script src="js/ammap.js" type="text/javascript"></script>
  <script src="js/cameroonLow.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/ammap.css" type="text/css" media="all" />

  <!-- personal js and css files -->
  <script src="js/ctrl.js"></script>

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">



          <!-- page content -->
          <div class="right_col" role="main">

            <!-- filter table -->


            <div class="clearfix"></div>

              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="display: flex;">
                  <!-- Div to hold map -->
                  <div id="mapdiv" style="width: 145em;height: 82em;overflow: hidden;text-align: left;"></div>
                  <!-- end of div holding map -->
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Responsive example <small>Users</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Settings 1</a>
                                  </li>
                                  <li><a href="#">Settings 2</a>
                                  </li>
                                </ul>
                              </li>
                              <li><a href="#"><i class="fa fa-close"></i></a>
                              </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div id="filter_table" class="dashboard_graph">

                                    <div class="row x_title">
                                      <div class="col-md-6">
                                        <h3>Filters <small>Order the table according to specific criterias</small></h3>
                                      </div>
                                    </div>

                                    <!-- department -->
                                    <div class="col-md-4">
                                      <label for="exampleSelect1">Department</label>
                                      <select class="form-control" id="dept" onchange="filter()" name="level">
                                        <option selected>All</option>
                                        <option>Computer Engineering</option>
                                        <option>Electrical Engineering</option>
                                      </select>
                                    </div>
                                    <!-- level -->
                                    <div class="col-md-4">
                                      <label for="exampleSelect1">Level</label>
                                      <select class="form-control" id="lvl" onchange="filter()" name="level">
                                        <option selected>All</option>
                                        <option>100</option>
                                        <option>200</option>
                                        <option>300</option>
                                        <option>400</option>
                                        <option>500</option>
                                      </select>
                                    </div>
                                    <!-- course -->
                                    <div class="col-md-4">
                                      <label for="exampleSelect1">Course</label>
                                      <select class="form-control" id="cour" onchange="filter()" name="level">
                                        <option selected>All</option>
                                        <option>CEF401</option>
                                        <option>EEF211</option>
                                        <option>CEF305</option>
                                        <option>CEF521</option>
                                        <option>CEF100</option>
                                      </select>
                                    </div>
                                    <div class="clearfix"></div>
                                  </div>
                                </div>

                            </div>
                          <div class="x_content">
                            <p class="text-muted font-13 m-b-30">
                            </p>
                            <!-- table containing the data from database -->
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            </table>

                          </div>
                        </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /page content -->
        </div>

      </div>
        <script src="js/bootstrap.min.js"></script>

        <!-- bootstrap progress js -->
        <script src="js/custom.js"></script>
        <script src="js/jquery.form.js"></script>


        <!-- Datatables -->
        <!-- <script src="js/datatables/js/jquery.dataTables.js"></script>
  <script src="js/datatables/tools/js/dataTables.tableTools.js"></script> -->

        <!-- Datatables-->
        <script src="js/datatables/jquery.dataTables.min.js"></script>
        <script src="js/datatables/dataTables.bootstrap.js"></script>
        <script src="js/datatables/dataTables.buttons.min.js"></script>
        <script src="js/datatables/buttons.bootstrap.min.js"></script>
        <script src="js/datatables/jszip.min.js"></script>
        <script src="js/datatables/pdfmake.min.js"></script>
        <script src="js/datatables/vfs_fonts.js"></script>
        <script src="js/datatables/buttons.html5.min.js"></script>
        <script src="js/datatables/buttons.print.min.js"></script>
        <script src="js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="js/datatables/dataTables.keyTable.min.js"></script>
        <script src="js/datatables/dataTables.responsive.min.js"></script>
        <script src="js/datatables/responsive.bootstrap.min.js"></script>
        <script src="js/datatables/dataTables.scroller.min.js"></script>


        <!-- pace -->
        <script>
          var table = $("#datatable-responsive").DataTable({
                "bProcessing": true,
                "sAjaxSource": "scripts/getRecord.php",
                "aoColumns": [
                  { "title": "First Name", mData: 'first_name' } ,
                  { "title": "Last Name", mData: 'last_name' } ,
                  { "title": "Matricule", mData: 'matricule' } ,
                  { "title": "Gender", mData: 'gender' } ,
                  { "title": "Level", mData: 'level' } ,
                  { "title": "CA Result", mData: 'ca_result' } ,
                  { "title": "EXAM Result", mData: 'exam_result' } ,
                  { "title": "Cummulative", mData: 'exam_result' }
                ],
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });

            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>

        <script src="js/custom.js"></script>
</body>

</html>
