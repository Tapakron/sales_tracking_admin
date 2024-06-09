@include('inc.function')
<!DOCTYPE html>
<html lang="en">

<head>
	<base href="" />
	<title>{{ getPageName($pageDetails) }}</title>
	<meta charset="utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="assets/media/logos/logosmall.png" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="{{ asset("assets/plugins/custom/fullcalendar/fullcalendar.bundle.css") }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("assets/plugins/custom/datatables/datatables.bundle.css") }}" rel="stylesheet" type="text/css" />
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="{{ asset("assets/plugins/global/plugins.bundle.css") }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("assets/css/style.bundle.css") }}" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<script>
		// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
	</script>
	@yield('css-content')
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">

			<!--begin::Aside เมนูด้านข้าง-->
			@include('inc.sidebar')
			<!--end::Aside-->

			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header tablet and mobile-->
				<div class="header-mobile py-3">
					<!--begin::Container-->
					<div class="container d-flex flex-stack">
						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="{{ url("/dashboard") }}">
								<img alt="Logo" src="{{ asset("assets/media/logos/demo9.svg") }}" class="h-35px" />
							</a>
						</div>
						<!--end::Mobile logo-->
						<!--begin::Aside toggle-->
						<button class="btn btn-icon btn-active-color-primary me-n4" id="kt_aside_toggle">
							<i class="ki-duotone ki-abstract-14 fs-2x">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</button>
						<!--end::Aside toggle-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header tablet and mobile-->

				<!--begin::Header-->
				@include('inc.header')
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Container-->
					<div class="container-xxl" id="kt_content_container">
						@yield('content')
					</div>
					<!--end::Container-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				@include('inc.footer')
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	@yield('modal-content')
	<!--end::Main-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<i class="ki-duotone ki-arrow-up">
			<span class="path1"></span>
			<span class="path2"></span>
		</i>
	</div>
	<!--end::Scrolltop-->
	@include('modal.original.kt_modal_upgrade_plan')
	@include('modal.original.kt_modal_create_app')
	@include('modal.original.kt_modal_users_search')
	@include('modal.original.kt_modal_invite_friends')
	<!--begin::Javascript-->
	<script>
		var hostUrl = "assets/";
	</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="{{ asset("assets/plugins/global/plugins.bundle.js") }}"></script>
	<script src="{{ asset("assets/js/scripts.bundle.js") }}"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Vendors Javascript(used for this page only)-->

	<script src="{{ url("https://cdn.amcharts.com/lib/5/index.js") }}"></script>
	<script src="{{ url("https://cdn.amcharts.com/lib/5/xy.js") }}"></script>
	<script src="{{ url("https://cdn.amcharts.com/lib/5/percent.js") }}"></script>
	<script src="{{ url("https://cdn.amcharts.com/lib/5/radar.js") }}"></script>
	<script src="{{ url("https://cdn.amcharts.com/lib/5/themes/Animated.js") }}"></script>
	<script src="{{ url("https://cdn.amcharts.com/lib/5/map.js") }}"></script>
	<script src="{{ url("https://cdn.amcharts.com/lib/5/geodata/worldLow.js") }}"></script>
	<script src="{{ url("https://cdn.amcharts.com/lib/5/geodata/continentsLow.js") }}"></script>
	<script src="{{ url("https://cdn.amcharts.com/lib/5/geodata/usaLow.js") }}"></script>
	<script src="{{ url("https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js") }}"></script>
	<script src="{{ url("https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js") }}"></script>
	<script src="{{ asset("assets/plugins/custom/fullcalendar/fullcalendar.bundle.js") }}"></script>
	<script src="{{ asset("assets/plugins/custom/datatables/datatables.bundle.js") }}"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used for this page only)-->
	@yield('js-content')
	<script src="{{ asset("assets/js/widgets.bundle.js") }}"></script>
	<script src="{{ asset("assets/js/custom/widgets.js") }}"></script>
	<script src="{{ asset("assets/js/custom/apps/chat/chat.js") }}"></script>
	<script src="{{ asset("assets/js/custom/utilities/modals/upgrade-plan.js") }}"></script>
	<script src="{{ asset("assets/js/custom/utilities/modals/create-app.js") }}"></script>
	<script src="{{ asset("assets/js/custom/utilities/modals/users-search.js") }}"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
	<script type="text/javascript">
		const key_logout = 'sales_tracking_admin_logout';

		function handlelogout(e) {
			let url = '/backend/logout';
			$.ajax({
				url: url,
				method: "POST",
			}).always(function(response) {
				window.localStorage.setItem(key_logout, Date.now().toString());
				setTimeout(function() {
					window.location = '/login'
				}, 100);
			});
		}
		$(document).ready(function() {
			if (window) {
				window.localStorage.removeItem(key_logout);
			}

			function sysSignout(e) {
				if (e.key === key_logout) {
					window.location = '/';
				}
			}
			window.addEventListener('storage', sysSignout);
		});
	</script>
</body>
<!--end::Body-->

</html>