<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets2/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets2/img/favicon.png">
    <title>
        Update Info
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets2/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets2/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets2/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->

</head>

<body class="g-sidenav-show  bg-gray-200">

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-0 px-1">
                <a class="btn btn-outline-primary btn-sm mb-0 mt-5" href="/update-info?kode=zhafira">Kembali</a>
            </div>

        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">

                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">yang berbahagia</h6>
                            </div>
                        </div>

                        <div class="card-body px-5 pb-2">
                            <div class="table-responsive p-0">
                                <form action="/simpan-update-more" method="post">
                                    @csrf
                                    <table class="table align-items-center mb-0">

                                        <tbody>
                                            @foreach ($more as $item)
                                                <tr>
                                                    <td>
                                                        Nama
                                                    </td>
                                                    <td>
                                                        <input name="yang_berbahagia" type="text"
                                                            class="form-control border p-2" value="{{ $item->yang_berbahagia }}">
                                                    </td>

                                                </tr>
                                                
                                                

                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary btn-sm mb-0 mt-5">Simpan</button>
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="../assets2/js/core/popper.min.js"></script>
    <script src="../assets2/js/core/bootstrap.min.js"></script>
    <script src="../assets2/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets2/js/plugins/smooth-scrollbar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets2/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>
