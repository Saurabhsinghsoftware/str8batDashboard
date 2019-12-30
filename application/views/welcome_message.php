<html>
  <title>QuTrust Admin Panel</title>
   <head>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <link rel="stylesheet" href="http://localhost/Multihub/Qutrust.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
   </head>
         <style>
    .ui-widget-header
    {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #fff;
    color: #333333;
    }
    .ui-widget-content
    {
    border: 1px solid #c5c5c5;
    background: #ffffff;
    }
   .ui-widget.ui-widget-content {
    border: 1px solid #fff;
    }
    #client-form{
      margin-top: 4% !important;
    }
    input{
      margin-bottom: 2% !important;
    }
    select{
      margin-bottom: 2% !important;
    }
    .my-error-class{
      color:red;
    }
    #heading{
      margin-left: 2%;
    }
    #tabs{
      margin-right: 20px;
    }
</style>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "ajax": "data/arrays.txt"
    } );
} );
</script>
<body>
       <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
     <!-- end container -->
     </body>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 </html>
