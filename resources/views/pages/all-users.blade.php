@extends('dashboard')
@section('main_content')
 <div class="row animated fadeInUp">
    <div class="col-sm-12 col-lg-12">
         <h4 class="section-subtitle"><b>All Users</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($all_user as $val)
                                        <tr>
                                            <td>{{$val->_id}}</td>
                                            <td>{{$val->name}}</td>
                                            <td>{{$val->email}}</td>
                                            <td>{{$val->phoneNumber}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    </div>
</div>



@endsection