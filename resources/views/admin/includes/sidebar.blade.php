<div id="kt_aside" class="aside w-175px"  data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"  data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo p-0" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="/admin" class="d-flex align-items-center fs-2" >
{{--            <img alt="Logo" src="/assets/media/logos/logo-demo6.svg" class="h-45px logo" />--}}
            Gazelle Finance
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="1px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                {{-- <div class="menu-item py-2">
                    <a class="menu-link menu-center" href="../../demo6/dist/index.html" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-house fs-2"></i>
                        </span>
                        <span class="menu-title">Home</span>
                    </a>
                </div> --}}

                <a href="{{ route('admin.home') }}"  class="menu-item py-2 {{ Request::route()->getName() === 'admin.home' ? 'here' : '' }}">
                    <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-file-text fs-2"></i>
                        </span>
                        <span class="menu-title">Articles</span>
                    </span>
                </a>
                <a href="{{ route('admin.categories.home') }}" class="menu-item py-2 {{ Request::route()->getName() === 'categories.home' ? 'here' : '' }}">
                    <span class="menu-link menu-center" style="width: fit-content; padding: 0;" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-file-text fs-2"></i>
                        </span>
                        <span class="menu-title" >Articles - Categories</span>
                    </span>
                </a>
                <a href="{{ route('admin.products.home') }}" class="menu-item py-2 {{ Request::route()->getName() === 'products.home' ? 'here' : '' }}">
                    <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-file-text fs-2"></i>
                        </span>
                        <span class="menu-title">Products</span>
                    </span>
                </a>
                <a  class="menu-item py-2 {{ Request::route()->getName() === 'admin.messages' ? 'here' : '' }}">
                    <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-file-text fs-2"></i>
                        </span>
                        <span class="menu-title">About</span>
                    </span>
                </a>
                <a href="{{ route('admin.portfolio.home') }}" class="menu-item py-2 {{ Request::route()->getName() === 'portfolio.home' ? 'here' : '' }}">
                    <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-file-text fs-2"></i>
                        </span>
                        <span class="menu-title">Portfolio</span>
                    </span>
                </a>
                <a href="{{ route('admin.ukraine_bridge_facility.home') }}" class="menu-item py-2 {{ Request::route()->getName() === 'ukraine_bridge_facility.home' ? 'here' : '' }}">
                    <span class="menu-link menu-center" style="width: fit-content; padding: 0;" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-file-text fs-2"></i>
                        </span>
                        <span class="menu-title">Ukraine bridge facility</span>
                    </span>
                </a>
                <a  class="menu-item py-2 {{ Request::route()->getName() === 'categories' ? 'here' : '' }}">
                    <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-file-text fs-2"></i>
                        </span>
                        <span class="menu-title">Employees</span>
                    </span>
                </a>
                <a href="{{ route('admin.impacts.home') }}" class="menu-item py-2 {{ Request::route()->getName() === 'impacts.home' ? 'here' : '' }}">
                    <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-file-text fs-2"></i>
                        </span>
                        <span class="menu-title">Impacts</span>
                    </span>
                </a>
                <a  class="menu-item py-2 {{ Request::route()->getName() === 'categories' ? 'here' : '' }}">
                    <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-file-text fs-2"></i>
                        </span>
                        <span class="menu-title">Contact</span>
                    </span>
                </a>
                <a href="{{ route('admin.news.home') }}" class="menu-item py-2 {{ Request::route()->getName() === 'news.home' ? 'here' : '' }}">
                    <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-file-text fs-2"></i>
                        </span>
                        <span class="menu-title">News</span>
                    </span>
                </a>
                <a  class="menu-item py-2 {{ Request::route()->getName() === 'categories' ? 'here' : '' }}">
                    <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-file-text fs-2"></i>
                        </span>
                        <span class="menu-title">Office</span>
                    </span>
                </a>
                <a  class="menu-item py-2 {{ Request::route()->getName() === 'categories' ? 'here' : '' }}">
                    <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-file-text fs-2"></i>
                        </span>
                        <span class="menu-title">Vacancies</span>
                    </span>
                </a>
                <a  class="menu-item py-2 {{ Request::route()->getName() === 'categories' ? 'here' : '' }}">
                    <span class="menu-link menu-center" style="width: fit-content; padding: 0;" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-file-text fs-2"></i>
                        </span>
                        <span class="menu-title" >Vacancy Response</span>
                    </span>
                </a>
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->


    <!--end::Footer-->
</div>
<style>
    #kt_aside_menu_wrapper::-webkit-scrollbar {
        display: none; /* Hide scrollbar for Chrome, Safari, and Opera */
    }

    #kt_aside_menu_wrapper {
        -ms-overflow-style: none; /* Hide scrollbar for Internet Explorer and Edge */
        scrollbar-width: none; /* Hide scrollbar for Firefox */
    }
    .menu-title{
        font-size: 13px;
    }
    #kt_aside {
        height: calc(100vh); /* Set the height of the sidebar to 100% of the viewport height minus the height of the top bar */
        overflow-y: scroll; /* Enable vertical scrolling */
        scrollbar-width: none; /* Hide the scrollbar in Firefox */
        -ms-overflow-style: none; /* Hide the scrollbar in Internet Explorer and Edge */
    }

    #kt_aside::-webkit-scrollbar {
        display: none; /* Hide the scrollbar in WebKit browsers */
    }
</style>
