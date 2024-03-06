<div class="card-box mb-30">
    <div class="bg-warning d-flex justify-content-between align-items-center pd-5">
        <h3 class="text-light">Manage Nft</h3>
        <a href="{{url('/admin/explore/create')}}" class="btn btn-primary">Add Item</a>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nfts as $nft)
                <tr>
                    <td class="table-plus">{{$nft->title}}</td>
                    <td>{{$nft->description}}</td>
                    <td>
                        <img src="{{asset('uploads/nft/'.$nft->img)}}" width="50px" style="border-radius:50px" alt="">
                    </td>

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
                                <a class="dropdown-item" href="#"
                                    ><i class="dw dw-edit2"></i> Edit</a
                                >
                                <a class="dropdown-item" href="#"
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
