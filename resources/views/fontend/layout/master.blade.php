<!DOCTYPE html>
<html lang="en">
<head>
    @include('fontend.layout.top')
</head>
<body>
<!--Moble Bottom Button-->
@include('fontend.layout.mobile_nav')

@include('fontend.layout.animation_circle')

<!-- main body section -->

<div class="container main_body">
	<div class="row" style="height:100%; margin:0px" >
		<div class="col-md-5" style="padding:0px; height:100%">

			@include('fontend.layout.nav')
            @include('fontend.layout.left_site')
		</div>
        @yield('mainContent')
	</div>
</div>
</body>
@include('fontend.layout.bottom')
</html>

</html>
