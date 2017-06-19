<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simple Serverside jQuery Datatable</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>custom/css/style.css">
  <link href="<?php echo base_url('assets/datatables/media/css/jquery.dataTables.min.css')?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/bootstrap.min.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head> 
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url()?>">Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
          <div class="nav navbar-nav">
            <li><a href="<?php echo base_url()?>statistics">Statistics</a></li>
          </div>
          <ul class="nav navbar-nav navbar-right">        
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('username') ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url()?>users/logout">Logout</a></li>            
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->

      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
      <h1 style="font-size:20pt">Simple Statistic</h1>

      <h3>URL</h3>
      <br />

      <table id="table" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Link ID</th>
            <th>Code</th>
            <th>Link</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        </tbody>

        <tfoot>
          <tr>
            <th>Link ID</th>
            <th>Code</th>
            <th>Link</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <script src="<?php echo base_url('assets/jquery/jquery-3.2.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/media/js/jquery.dataTables.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript">

      var table;


      $(document).ready(function() {

  //datatables
  table = $('#table').DataTable({ 

      "processing": true, //Feature control the processing indicator.
      "serverSide": true, //Feature control DataTables' server-side processing mode.
      "order": [], //Initial no order.

      // Load data for the table's content from an Ajax source
      "ajax": {
        "url": "<?php echo base_url()?>index.php/statistics/ajax_list",
        "type": "POST"
      },

      //Set column definition initialisation properties.
      "columnDefs": [
      { 
          "targets": [ 3 ], //first column / numbering column
          "orderable": true, //set not orderable
        },
        ],

      });

});
</script>

</body>
</html>