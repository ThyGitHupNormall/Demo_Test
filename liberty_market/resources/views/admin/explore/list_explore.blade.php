<div class="card-box mb-30">
    <div class="bg-info d-flex justify-content-between align-items-center pd-5">
        <h3 class="text-light">Manage Item</h3>
        <a href="{{url('/admin/explore/create')}}" class="btn btn-primary">Add Item</a>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Title</th>
                    <th>Name</th>
                    <th>Item</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>bid</th>
                    <th>End</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($explores as $explore)
                <tr>
                    <td class="table-plus">{{$explore->title}}</td>
                    {{-- <td>
                        <img src="{{asset('front/assets/images/'.$explore->img_profile)}}" width="50px" style="border-radius:50px" alt="">
                    </td> --}}
                    <td>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <img src="{{asset('uploads/explore/'.$explore->img_profile)}}" width="50px" style="border-radius:50px" alt="">
                            </div>
                            <div>
                                {{$explore->username}}
                            </div>
                        </div>
                    <td>
                        <img src="{{asset('uploads/explore/'.$explore->img)}}" width="50px" style="border-radius:50px" alt="">
                    </td>
                    <td>{{$explore->description}}</td>
                    <td>{{$explore->price}}</td>
                    <td>{{$explore->date}}</td>
                    <td>{{$explore->current_bid}}</td>
                    <td>{{$explore->end_in}}</td>
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
                                <a class="dropdown-item" href="#"
                                    ><i class="dw dw-eye"></i> View</a
                                >
                                <a class="dropdown-item" href="{{route('admin.explore.edit',$explore->id)}}"
                                    ><i class="dw dw-edit2"></i> Edit</a
                                >
                                <a class="dropdown-item" href="{{route("admin.explore.delete",$explore->id)}}" onclick="return confirm('Are Sure You Want To Delete?')" class="btn btn-danger"
                                    ><i class="dw dw-delete-3"></i> Delete</a
                                >
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
