<div class="card-box mb-30">
    <div class="bg-warning d-flex justify-content-between align-items-center pd-5">
        <h3 class="text-light">Home Heading</h3>

    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Title</th>
                    <th>Description</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($home_heading as $home_heading)
                <tr>
                    <td class="table-plus">{{$home_heading->title}}</td>
                    <td>{{$home_heading->description}}</td>


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

                                <a class="dropdown-item" href="{{route('admin.home-heading.edit',$home_heading->id)}}"
                                    ><i class="dw dw-edit2"></i> Edit</a
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
