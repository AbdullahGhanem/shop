<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
<meta charset="utf-8"/>
<title>Metronic | Page Layouts - Blank Page</title>
	<link rel="stylesheet" href="{{ elixir('back/css/admin.css') }}">
	<link rel="shortcut icon" href="favicon.ico"/>
	<script src="{{ elixir('back/js/admin.js') }}" type="text/javascript"></script>
</head>

<body class="page-md page-header-fixed page-quick-sidebar-over-content">
	@include('back.layouts.header')
<!-- BEGIN CONTAINER -->
<div class="page-container">
	@include('back.layouts.sidebar')
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			@include('flash::message')
			@yield('content')
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
@include('back.layouts.footer')

<script>
    jQuery(document).ready(function() {    
        Metronic.init();
		Layout.init();
    });
</script>

</body>
</html>