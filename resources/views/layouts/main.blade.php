<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gleek - Bootstrap Admin Dashboard HTML Template</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="../../../node_modules/innoto-switchery/dist/switchery.min.css">
    <link href="../css/style.css" rel="stylesheet">

</head>
<body>
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/>
        </svg>
    </div>
</div>
<div id="main-wrapper">

    <div class="nav-header">
        <div class="brand-logo"><a href="index.html"><b><img src="../../assets/images/logo.png" alt=""> </b><span
                    class="brand-title"><img src="../../assets/images/logo-text.png" alt=""></span></a>
        </div>
        <div class="nav-control">
            <div class="hamburger"><span class="line"></span> <span class="line"></span> <span class="line"></span>
            </div>
        </div>
    </div>
    <!-- header -->
    @yield('header')
    <!-- #/ header -->
    <!-- sidebar -->
    @yield('sidebar');

    <!-- Common JS -->
    <script src="../../assets/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>
    <script src="../../../node_modules/innoto-switchery/dist/switchery.min.js"></script>
    <script src="../../main/js/plugins-init/switchery-init.js"></script>

</body>
</html>
