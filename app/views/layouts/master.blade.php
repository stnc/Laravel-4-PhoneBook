<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials/head')

</head>

<body class="skin-blue">

@include('partials/header')


<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    @include('partials/sidebar')
</aside>


<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>

              LaRaVeL 
                <small>PhoneBook Example </small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Widgets</li>
            </ol>
        </section>


        @yield('content_stnc')

    </aside>
    <!-- /.right-side -->


</div>
<!-- ./wrapper -->


@include('partials/scripts')


</body>
</html>