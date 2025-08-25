<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
        <title>CrystalCorp | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CrystalCorp Brasil Admin & Dashboard"/>
        <meta name="author" content="NHOJunior Design"/>
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon"/>
        <link href="{{ asset('css/admin/skote/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/admin/skote/icons.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/admin/skote/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/admin/skote/user.min.css') }}" id="app-style" rel="stylesheet" type="text/css"/>
    </head>
    <body data-sidebar="dark" data-layout-mode="dark">
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <div class="navbar-brand-box">
                            <a href="{{ route('dashboard') }}" class="logo logo-dark">
                                <span class="logo-sm"><img src="{{ asset('images/crystalcorp.png') }}" alt="CrystalCorp" height="30"></span>
                                <span class="logo-lg"><img src="{{ asset('images/crystalcorp.png') }}" alt="CrystalCorp" height="65"></span>
                            </a>
                            <a href="{{ route('dashboard') }}" class="logo logo-light">
                                <span class="logo-sm"><img src="{{ asset('images/crystalcorp.png') }}" alt="CrystalCorp" height="30"></span>
                                <span class="logo-lg"><img src="{{ asset('images/crystalcorp.png') }}" alt="CrystalCorp" height="65"></span>
                            </a>
                        </div>
                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn"><i class="fa fa-fw fa-bars"></i></button>
                        @include('admin.layouts.megamenu')
                    </div>
                    @include('admin.layouts.topmenu')
                </div>
            </header>
            @include('admin.layouts.menuleft')
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
@yield('content')
                    </div>
                </div>
                @include('admin.home.sections.footer')
            </div>
            @include('admin.layouts.menuright')
        </div>
        <div class="modal fade transaction-detailModal" tabindex="-1" role="dialog" aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                        <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><div><img src="assets/images/product/img-7.png" alt="" class="avatar-sm"></div></th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                                <p class="text-muted mb-0">$ 225 x 1</p>
                                            </div>
                                        </td>
                                        <td>$ 255</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><div><img src="assets/images/product/img-4.png" alt="" class="avatar-sm"></div></th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                                <p class="text-muted mb-0">$ 145 x 1</p>
                                            </div>
                                        </td>
                                        <td>$ 145</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><h6 class="m-0 text-right">Sub Total:</h6></td>
                                        <td>$ 400</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><h6 class="m-0 text-right">Shipping:</h6></td>
                                        <td>Free</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><h6 class="m-0 text-right">Total:</h6></td>
                                        <td>$ 400</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></div>
                </div>
            </div>
        </div>
        <div class="rightbar-overlay"></div>
        <script src="{{ asset('js/admin/skote/jquery.min.js') }}"></script>
        <script src="{{ asset('js/admin/skote/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/admin/skote/metisMenu.min.js') }}"></script>
        <script src="{{ asset('js/admin/skote/simplebar.min.js') }}"></script>
        <script src="{{ asset('js/admin/skote/waves.min.js') }}"></script>
        <script src="{{ asset('js/admin/skote/apexcharts.min.js') }}"></script>
        <script src="{{ asset('js/admin/skote/dashboard.init.js') }}"></script>
        <script src="{{ asset('js/admin/skote/app.js') }}"></script>
    </body>
</html>
