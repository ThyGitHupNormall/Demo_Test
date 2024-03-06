<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{asset('backend')}}/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
            <img
                src="{{asset('backend')}}/vendors/images/deskapp-logo-white.svg"
                alt=""
                class="light-logo"
            />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{route('admin.home')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span
                        ><span class="mtext">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.explore')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-textarea-resize"></span
                        ><span class="mtext">Form</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-table"></span
                        ><span class="mtext">Tables</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="home-heading">Top Heading Tables</a></li>
                        <li><a href="categories">Categories</a></li>
                        <li><a href="collection">Collection</a></li>
                        <li><a href="nft">NFT</a></li>
                        <li><a href="explore">Item</a></li>
                        <li><a href="user">User</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
