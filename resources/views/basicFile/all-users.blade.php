@extends('dashboard')
@section('main_content')
 <div class="row animated fadeInUp">
    <div class="col-sm-12 col-lg-12">
        <div class="row">
            <h1>All User</h1>
            <table class="table table-bordered" border="1pt solid ash" style="font-family: arial; color:black; border-collapse: collapse;">
              <thead>
                <th>name</th>
                <th>Possword</th>
                <th>name</th>
                <th>name</th>
                <th>name</th>  
              </thead>
              <tbody id="my-data">

              </tbody>
             </table>
        </div>
    </div>
</div>



<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

    $.ajax({
            url: '<?php echo URL::to('https://book-app-nodejs.herokuapp.com/users');?>',
            method: 'GET',
            data: {},
            cache: false,
            dataType: 'json',
            success: function(data){
             console.log(data);
             $.each(data, function(index, val) {
                $("#my-data").append('<tr><td>'+ val.name +'</td> <td>'+ val.email +'</td> </tr>');
             });
            
            }
          });  
</script>
@endsection