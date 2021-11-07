<!doctype html>

<html class="no-js" lang=""> 
<head>
 @include('backend.layout.top')
</head>
<body>
        <!-- Left Panel -->

    @include('backend.layout.nav')

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
    @include('backend.layout.header')
        <!-- Header-->

    @yield('mainContent')
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

   @include('backend.layout.bottom')

</body>
</html>
