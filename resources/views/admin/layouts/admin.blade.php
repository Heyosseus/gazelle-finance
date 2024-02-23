<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Gazelle Finance &mdash; Administration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed">


        <div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					@include('admin/includes/header')
					@include('admin/includes/sidebar')
                    @yield('content')
				</div>
			</div>
		</div>

        <script>var hostUrl = "assets/";</script>
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
{{--		<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>--}}
{{--		<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>--}}
{{--		<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>--}}
{{--		<script src="{{ asset('assets/js/custom/modals/create-app.js') }}"></script>--}}
{{--		<script src="{{ asset('assets/js/custom/modals/upgrade-plan.js') }}"></script>--}}
    </body>
</html>
