<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="{{ asset('admin/img/profil')}}e_small.jpg"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">David Williams</span>
                        <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                        <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Categories</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="{{ route('categories.index') }}">Categories_list</a></li>
                    <li><a href="">Category v.2</a></li>
                    <li><a href="">Category v.3</a></li>
                    <li><a href="">Category v.4</a></li>
                    <li><a href="">Category v.5 </a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.user.list') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Users_List</span></a>
            </li>
{{--            <li>--}}
{{--                <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Miscellaneous</span><span class="label label-info float-right">NEW</span></a>--}}
{{--                <ul class="nav nav-second-level collapse">--}}
{{--                    <li><a href="toastr_notifications.html">Notification</a></li>--}}
{{--                    <li><a href="nestable_list.html">Nestable list</a></li>--}}
{{--                    <li><a href="agile_board.html">Agile board</a></li>--}}
{{--                    <li><a href="timeline_2.html">Timeline v.2</a></li>--}}
{{--                    <li><a href="diff.html">Diff</a></li>--}}
{{--                    <li><a href="pdf_viewer.html">PDF viewer</a></li>--}}
{{--                    <li><a href="i18support.html">i18 support</a></li>--}}
{{--                    <li><a href="sweetalert.html">Sweet alert</a></li>--}}
{{--                    <li><a href="idle_timer.html">Idle timer</a></li>--}}
{{--                    <li><a href="truncate.html">Truncate</a></li>--}}
{{--                    <li><a href="password_meter.html">Password meter</a></li>--}}
{{--                    <li><a href="spinners.html">Spinners</a></li>--}}
{{--                    <li><a href="spinners_usage.html">Spinners usage</a></li>--}}
{{--                    <li><a href="tinycon.html">Live favicon</a></li>--}}
{{--                    <li><a href="google_maps.html">Google maps</a></li>--}}
{{--                    <li><a href="datamaps.html">Datamaps</a></li>--}}
{{--                    <li><a href="social_buttons.html">Social buttons</a></li>--}}
{{--                    <li><a href="code_editor.html">Code editor</a></li>--}}
{{--                    <li><a href="modal_window.html">Modal window</a></li>--}}
{{--                    <li><a href="clipboard.html">Clipboard</a></li>--}}
{{--                    <li><a href="text_spinners.html">Text spinners</a></li>--}}
{{--                    <li><a href="forum_main.html">Forum view</a></li>--}}
{{--                    <li><a href="validation.html">Validation</a></li>--}}
{{--                    <li><a href="tree_view.html">Tree view</a></li>--}}
{{--                    <li><a href="loading_buttons.html">Loading buttons</a></li>--}}
{{--                    <li><a href="chat_view.html">Chat view</a></li>--}}
{{--                    <li><a href="masonry.html">Masonry</a></li>--}}
{{--                    <li><a href="tour.html">Tour</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>--}}
{{--                <ul class="nav nav-second-level collapse">--}}
{{--                    <li><a href="typography.html">Typography</a></li>--}}
{{--                    <li><a href="icons.html">Icons</a></li>--}}
{{--                    <li><a href="draggable_panels.html">Draggable Panels</a></li> <li><a href="resizeable_panels.html">Resizeable Panels</a></li>--}}
{{--                    <li><a href="buttons.html">Buttons</a></li>--}}
{{--                    <li><a href="video.html">Video</a></li>--}}
{{--                    <li><a href="tabs_panels.html">Panels</a></li>--}}
{{--                    <li><a href="tabs.html">Tabs</a></li>--}}
{{--                    <li><a href="notifications.html">Notifications & Tooltips</a></li>--}}
{{--                    <li><a href="helper_classes.html">Helper css classes</a></li>--}}
{{--                    <li><a href="badges_labels.html">Badges, Labels, Progress</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li>--}}
{{--                <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>--}}
{{--            </li>--}}
            <li>
                <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Orders</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
{{--                    <li><a href="{{route('orders')}}">All_Orders_</a></li>--}}
{{--                    <li><a href="{{route('orders.by.users')}}">Orders_By_Users_</a></li>--}}
{{--                    <li><a href="{{route('show.orders.standby.mode')}}">Orders_Standby_</a></li>--}}
                    <li><a href="jq_grid.html">jqGrid</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Products__</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('products.create') }}">Create Product</a></li>
                    <li><a href="{{ route('products.index') }}">Products_list</a></li>
                    <li><a href="">Product edit</a></li>
                    <li><a href="ecommerce_product_detail.html">Product detail</a></li>
                    <li><a href="ecommerce-cart.html">Cart</a></li>
{{--                    <li><a href="{{route('orders')}}">Orders</a></li>--}}
                    <li><a href="ecommerce_payments.html">Credit Card form</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Contact Info</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('contactUs.index')}}">Contact Us</a></li>
                    <li><a href="slick_carousel.html">Information</a></li>
                    <li><a href="carousel.html">Style Advisor</a></li>
                    <li><a href="carousel.html">Shopping Guide</a></li>
                    <li><a href="{{route('socialSites.index')}}">Online Platform:</a></li>
                    <li><a href="carousel.html">Payment Methods</a></li>
                    <li><a href="{{route('headerInfo.index')}}">Header Info</a></li>

                </ul>
            </li>
{{--            <li>--}}
{{--                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>--}}
{{--                <ul class="nav nav-second-level collapse">--}}
{{--                    <li>--}}
{{--                        <a href="#" id="damian">Third Level <span class="fa arrow"></span></a>--}}
{{--                        <ul class="nav nav-third-level">--}}
{{--                            <li>--}}
{{--                                <a href="#">Third Level Item</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">Third Level Item</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">Third Level Item</a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li><a href="#">Second Level Item</a></li>--}}
{{--                    <li>--}}
{{--                        <a href="#">Second Level Item</a></li>--}}
{{--                    <li>--}}
{{--                        <a href="#">Second Level Item</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info float-right">62</span></a>--}}
{{--            </li>--}}
{{--            <li class="landing_link">--}}
{{--                <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning float-right">NEW</span></a>--}}
{{--            </li>--}}
{{--            <li class="special_link">--}}
{{--                <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>--}}
{{--            </li>--}}
        </ul>

    </div>
</nav>
