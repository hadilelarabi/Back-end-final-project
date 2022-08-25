
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{url('admin/dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                {{-- Category Section --}}
                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Categories
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/category')}}" >View Category</a>
                        <a class="nav-link" href="{{url('admin/add-category')}}">Add Category</a>
                    </nav>
                </div>
                {{--About Us Section  --}}

                <a class="nav-link collapsed" href="{{url('admin/about')}}" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    About Us
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('admin/about')}}" >View About Us</a>
                            <a class="nav-link" href="{{url('admin/add-about')}}">Add About Us</a>
                        </nav>
                </div>

                {{--Brands Section  --}}

                <a class="nav-link collapsed" href="{{url('admin/brand')}}" data-bs-toggle="collapse" data-bs-target="#collapseBrands" aria-expanded="false" aria-controls="collapseBrands">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Brands
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseBrands" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionBrands">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('admin/brand')}}" >View Brands</a>
                            <a class="nav-link" href="{{url('admin/add-brand')}}">Add Brand</a>
                        </nav>
                </div>

                {{--Our Services Section  --}}

                <a class="nav-link collapsed" href="{{url('admin/service')}}" data-bs-toggle="collapse" data-bs-target="#collapseServ" aria-expanded="false" aria-controls="collapseServ">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Our Services
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseServ" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionServ">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('admin/service')}}" >View Services</a>
                            <a class="nav-link" href="{{url('admin/add-service')}}">Add Service</a>
                        </nav>
                </div>
            
                {{--Testimonials Section  --}}

                <a class="nav-link collapsed" href="{{url('admin/testimonial')}}" data-bs-toggle="collapse" data-bs-target="#collapsetestio" aria-expanded="false" aria-controls="collapsetestio">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Testimonials
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsetestio" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordiontestio">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('admin/testimonial')}}" >View Testimonials</a>
                            <a class="nav-link" href="{{url('admin/add-testimonial')}}">Add Testimonials</a>
                        </nav>
                </div>

                {{--Portfolio Section  --}}

                <a class="nav-link collapsed" href="{{url('admin/portfolio')}}" data-bs-toggle="collapse" data-bs-target="#collapsePortfo" aria-expanded="false" aria-controls="collapsePortfo">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Portfolio
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePortfo" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPortfo">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('admin/portfolio')}}" >View Portfolio</a>
                            <a class="nav-link" href="{{url('admin/add-portfolio')}}">Add Portfolio</a>
                        </nav>
                </div>

                {{--Team Section  --}}

                <a class="nav-link collapsed" href="{{url('admin/team')}}" data-bs-toggle="collapse" data-bs-target="#collapseTeam" aria-expanded="false" aria-controls="collapseTeam">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Team
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTeam" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionTeam">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('admin/team')}}" >View Team</a>
                            <a class="nav-link" href="{{url('admin/add-team')}}">Add Team</a>
                        </nav>
                </div>

                {{--FQA Section  --}}

                <a class="nav-link collapsed" href="{{url('admin/fqa')}}" data-bs-toggle="collapse" data-bs-target="#collapseFQA" aria-expanded="false" aria-controls="collapseFQA">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    FQA
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseFQA" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionFQA">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('admin/faq')}}" >View FQA</a>
                            <a class="nav-link" href="{{url('admin/add-faq')}}">Add FAQ</a>
                        </nav>
                </div>

                {{--Blogs Section  --}}

                <a class="nav-link collapsed" href="{{url('admin/blog')}}" data-bs-toggle="collapse" data-bs-target="#collapseBlogs" aria-expanded="false" aria-controls="collapseBlogs">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Blogs
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseBlogs" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionBlogs">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('admin/blog')}}" >View Blogs</a>
                            <a class="nav-link" href="{{url('admin/add-blog')}}">Add Blogs</a>
                        </nav>
                </div>

                {{--Contact Section  --}}

                <a class="nav-link collapsed" href="{{url('admin/contact')}}" data-bs-toggle="collapse" data-bs-target="#collapseContacts" aria-expanded="false" aria-controls="collapseContacts">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Contacts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseContacts" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionContacts">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('admin/contact-us')}}" >View Contacts</a>
                            <a class="nav-link" href="{{url('admin/add-contact')}}">Add Contacts</a>
                        </nav>
                </div>

        </div>
    </nav>
</div>