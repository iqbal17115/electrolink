<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{url('/admin')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">01</span>
                        <span>Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span>Products</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('product.product')}}">Add Product</a></li>
                        <li><a href="{{route('product.product-list')}}">All Product List</a></li>
                        <li><a href="{{route('product.category')}}">Category</a></li>
                    </ul>
                </li>
              
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span>Setting</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('setting.slider')}}">Slider</a></li>
                        <li><a href="{{route('setting.breaking-news')}}">News</a></li>
                        <li><a href="{{route('setting.testimonial')}}">Testimonial</a></li>
                        <li><a href="{{route('setting.why')}}">Why</a></li>
                        <li><a href="{{route('setting.companyinfo')}}">Company Info</a></li>
                    </ul>
                </li>
     
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span>Contact Us</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('message')}}">Messages</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
