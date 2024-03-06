<div class="card-box mb-30">
    <div class="bg-success d-flex justify-content-between align-items-center pd-5">
        <h3 class="text-light">Manage user</h3>
        <a href="{{url('admin/user/create')}}" class="btn btn-primary">Add User</a>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Name</th>
                    <th>Image</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>
                        <img src="{{asset('uploads/user/image/'.$user->avatar)}}" width="50px" style="border-radius:50px" alt="">
                    </td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->type}}</td>
                    <td>
                        <div class="dropdown">
                            <a
                                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                            >
                                <i class="dw dw-more"></i>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                            >
                                <a class="dropdown-item" href="{{route("admin.user.view",$user->id)}}"
                                    ><i class="dw dw-eye"></i> View</a
                                >
                                <a class="dropdown-item" href="{{route('admin.user.edit',$user->id)}}"
                                    ><i class="dw dw-edit2"></i> Edit</a
                                >
                                <a class="dropdown-item" href="{{route("admin.user.delete",$user->id)}}" onclick="return confirm('Are Sure You Want To Delete?')" class="btn btn-danger"
                                    ><i class="dw dw-delete-3"></i> Delete</a
                                >

                                {{--  <a class="dropdown-item" href="{{route("admin.user.delete",$user->id)}}"
                                    onclick="confirmation(event)" class="btn btn-danger">
                                    <i class="dw dw-delete-3"></i>Delete</a>  --}}
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


{{--  <script type="text/javascript">
    function confirmation(ev){
        ev.preventDefault();

        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);

        swal({

            title:"Are you sure to delete this!",
            text:"You won't be able to revert this delete!",
            icon:"warning",

            buttons:true,
            dangerMode:true,
        })

        then((willCancell)=>{

            if(willCancell){
                window.location.href(urlToRedirect);
            }

        });


    }
</script>  --}}
