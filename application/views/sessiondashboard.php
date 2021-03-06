<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Str8bat Dashboard | Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  </head>
     <script>
         $(document).ready(function(e){
            var base_url = "<?php echo base_url();?>"; // You can use full url here but I prefer like this
            $('#datatable').DataTable({
                "pageLength" : 10,
                "serverSide": true,
                "order": [[0, "asc" ]],
                "ajax":{
                        url :  base_url+'yourcontroller/yourMethod',
                        type : 'POST'
                        },
            }); // End of DataTable
            }); // End Document Ready Function
     </script>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-12">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>S. No.</th>
                            <th>UserId</th>
                            <th>Name</th>
                            <th>Number Of Shots</th>
                            <th>Sensor</th>
                            <th>Created Date</th>
                            <th>Updated Date</th> 
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                  </table>                
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
      </body>
    </html>