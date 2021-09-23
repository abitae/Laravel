<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->

        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
	    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;display=swap" rel="stylesheet">
	    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('assets/fonts/icofont/icofont.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('assets/plugins/apex/apexcharts.css') }}">
	    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	    <script src="{{ asset('assets/js/script.js') }}"></script>
	    <script src="{{ asset('assets/plugins/apex/apexcharts.min.js') }}"></script>
	    <script src="{{ asset('assets/plugins/apex/custom-apexcharts.js') }}"></script>
        

    </head>
    <body>       
    <div class="offcanvas-overlay"></div>
	<div class="wrapper">
		<header class="header fixed-top d-flex align-content-center flex-wrap">
			<div class="logo">
				<a href="index.html" class="default-logo"><img src="assets/img/logo.png" alt=""></a>
				<a href="index.html" class="mobile-logo"><img src="assets/img/mobile-logo.png" alt=""></a>
			</div>
			<div class="main-header">
				<div class="container-fluid">
					<div class="row justify-content-between">
						<div class="col-3 col-lg-1 col-xl-4">
							<div class="main-header-left h-100 d-flex align-items-center">
								<div class="main-header-user">
									<a href="#" class="d-flex align-items-center" data-toggle="dropdown">
										<div class="menu-icon"><span></span> <span></span> <span></span></div>
										<div class="user-profile d-xl-flex align-items-center d-none">
											<div class="user-avatar"><img src="assets/img/avatar/user.png" alt=""></div>
											<div class="user-info">
												<h4 class="user-name">Abrilay Khatun</h4>
												<p class="user-email">abrilakh@gmail.com</p>
											</div>
										</div>
									</a>
									<div class="dropdown-menu"><a href="#">My Profile</a> <a href="#">task</a> <a href="#">Settings</a> <a href="#">Log Out</a></div>
								</div>
								<div class="main-header-menu d-block d-lg-none">
									<div class="header-toogle-menu"><img src="assets/img/menu.png" alt=""></div>
								</div>
							</div>
						</div>
						<div class="col-9 col-lg-11 col-xl-8">
							<div class="main-header-right d-flex justify-content-end">
								<ul class="nav">
									<li class="ml-0">
										<div class="main-header-language">
											<a href="#" data-toggle="dropdown"><img src="assets/img/svg/globe-icon.svg" alt=""></a>
											<div class="dropdown-menu style--three"><a href="#"><span><img src="assets/img/usa.png" alt=""></span>USA </a><a href="#"><span><img src="assets/img/china.png" alt=""></span>China </a><a href="#"><span><img src="assets/img/russia.png" alt=""></span>Russia </a><a href="#"><span><img src="assets/img/spain.png" alt=""></span>Spain </a><a href="#"><span><img src="assets/img/brazil.png" alt=""></span>Brazil </a><a href="#"><span><img src="assets/img/france.png" alt=""></span>France </a><a href="#"><span><img src="assets/img/algeria.png" alt=""></span>Algeria</a></div>
										</div>
									</li>
									<li class="ml-0 d-none d-lg-flex">
										<div class="main-header-print">
											<a href="#"><img src="assets/img/svg/print-icon.svg" alt=""></a>
										</div>
									</li>
									<li class="d-none d-lg-flex">
										<div class="main-header-date-time text-right">
											<h3 class="time"><span id="hours">21</span> <span id="point">:</span> <span id="min">06</span></h3><span class="date"><span id="date">Tue, 12 October 2019</span></span>
										</div>
									</li>
									<li class="d-none d-lg-flex">
										<div class="main-header-btn ml-md-1"><a href="#" class="btn">Pending Tasks</a></div>
									</li>
									<li class="order-2 order-sm-0">
										<div class="main-header-search">
											<form action="#" class="search-form">
												<div class="theme-input-group header-search"><input type="text" class="theme-input-style" placeholder="Search Here"> <button type="submit"><img src="assets/img/svg/search-icon.svg" alt="" class="svg"></button></div>
											</form>
										</div>
									</li>
									<li>
										<div class="main-header-message">
											<a href="#" class="header-icon" data-toggle="dropdown"><img src="assets/img/svg/message-icon.svg" alt="" class="svg"></a>
											<div class="dropdown-menu dropdown-menu-right">
												<div class="dropdown-header d-flex align-items-center justify-content-between">
													<h5>3 Unread messages</h5><a href="#" class="text-mute d-inline-block">Clear all</a></div>
												<div class="dropdown-body">
													<a href="#" class="item-single d-flex media align-items-center">
														<div class="figure"><img src="assets/img/avatar/m1.png" alt=""> <span class="avatar-status bg-teal"></span></div>
														<div class="content media-body">
															<div class="d-flex align-items-center mb-2">
																<h6 class="name">Sender Name</h6>
																<p class="time">2 min ago</p>
															</div>
															<p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
														</div>
													</a>
													<a href="#" class="item-single d-flex media align-items-center">
														<div class="figure"><img src="assets/img/avatar/m2.png" alt=""> <span class="avatar-status bg-teal"></span></div>
														<div class="content media-body">
															<div class="d-flex align-items-center mb-2">
																<h6 class="name">Tonya Lee</h6>
																<p class="time">2 min ago</p>
															</div>
															<p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
														</div>
													</a>
													<a href="#" class="item-single d-flex media align-items-center">
														<div class="figure"><img src="assets/img/avatar/m3.png" alt=""> <span class="avatar-status bg-teal"></span></div>
														<div class="content media-body">
															<div class="d-flex align-items-center mb-2">
																<h6 class="name">Cathy Nichols</h6>
																<p class="time">2 min ago</p>
															</div>
															<p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
														</div>
													</a>
													<a href="#" class="item-single d-flex media align-items-center">
														<div class="figure"><img src="assets/img/avatar/m4.png" alt=""> <span class="avatar-status bg-teal"></span></div>
														<div class="content media-body">
															<div class="d-flex align-items-center mb-2">
																<h6 class="name">Hubert Griffith</h6>
																<p class="time">2 min ago</p>
															</div>
															<p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
														</div>
													</a>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="main-header-notification"><a href="#" class="header-icon notification-icon" data-toggle="dropdown"><span class="count" data-bg-img="assets/img/count-bg.png">22</span> <img src="assets/img/svg/notification-icon.svg" alt="" class="svg"></a>
											<div class="dropdown-menu style--two dropdown-menu-right">
												<div class="dropdown-header d-flex align-items-center justify-content-between">
													<h5>5 New notifications</h5><a href="#" class="text-mute d-inline-block">Clear all</a></div>
												<div class="dropdown-body">
													<a href="#" class="item-single d-flex align-items-center">
														<div class="content">
															<div class="mb-2">
																<p class="time">2 min ago</p>
															</div>
															<p class="main-text">Donec dapibus mauris id odio ornare tempus amet.</p>
														</div>
													</a>
													<a href="#" class="item-single d-flex align-items-center">
														<div class="content">
															<div class="mb-2">
																<p class="time">2 min ago</p>
															</div>
															<p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
														</div>
													</a>
													<a href="#" class="item-single d-flex align-items-center">
														<div class="content">
															<div class="mb-2">
																<p class="time">2 min ago</p>
															</div>
															<p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
														</div>
													</a>
													<a href="#" class="item-single d-flex align-items-center">
														<div class="content">
															<div class="mb-2">
																<p class="time">2 min ago</p>
															</div>
															<p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
														</div>
													</a>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="main-wrapper">
            <nav class="sidebar" data-trigger="scrollbar">
				<div class="sidebar-header d-none d-lg-block">
					<div class="sidebar-toogle-pin"><i class="icofont-tack-pin"></i></div>
				</div>
				<div class="sidebar-body">
					<ul class="nav">
						<li class="nav-category">Main</li>
						<li class="active"><a href="index.html"><i class="icofont-pie-chart"></i> <span class="link-title">Dashboard</span></a></li>
						<li><a href="#"><i class="icofont-shopping-cart"></i> <span class="link-title">Ecommerce</span></a>
							<ul class="nav sub-menu">
								<li><a href="pages/ecommerce/ecommerce.html">Dashboard 1</a></li>
								<li><a href="pages/ecommerce/ecommerce2.html">dashboard 2</a></li>
								<li><a href="pages/ecommerce/orders.html">orders</a></li>
								<li><a href="pages/ecommerce/product-catelog.html">Products Catalog</a></li>
								<li><a href="pages/ecommerce/product-details.html">Product Details</a></li>
								<li><a href="pages/ecommerce/cartlist.html">cart list</a></li>
							</ul>
						</li>
						<li><a href="pages/social-media.html"><i class="icofont-chart-histogram"></i> <span class="link-title">Social Media Analytics</span></a></li>
						<li class="nav-category">apps</li>
						<li><a href="#"><i class="icofont-mail-box"></i> <span class="link-title">Email</span></a>
							<ul class="nav sub-menu">
								<li><a href="pages/apps/email/inbox.html">Inbox</a></li>
								<li><a href="pages/apps/email/read.html">Read</a></li>
								<li><a href="pages/apps/email/compose.html">Compose</a></li>
							</ul>
						</li>
						<li><a href="pages/apps/chat.html"><i class="icofont-wechat"></i> <span class="link-title">Chat</span></a></li>
						<li><a href="#"><i class="icofont-listing-box"></i> <span class="link-title">To Do List</span></a>
							<ul class="nav sub-menu">
								<li><a href="pages/apps/todolist/todolist.html">Tasks</a></li>
								<li><a href="pages/apps/todolist/add-new.html">add new</a></li>
								<li><a href="pages/apps/todolist/task-details.html">details</a></li>
							</ul>
						</li>
						<li><a href="pages/apps/calendar.html"><i class="icofont-calendar"></i> <span class="link-title">Calendar</span></a></li>
						<li><a href="#"><i class="icofont-file-document"></i> <span class="link-title">invoice</span></a>
							<ul class="nav sub-menu">
								<li><a href="pages/apps/invoice/invoice-list.html">Invoice List</a></li>
								<li><a href="pages/apps/invoice/invoice-details.html">details</a></li>
								<li><a href="pages/apps/invoice/invoice-add-new.html">add new</a></li>
							</ul>
						</li>
						<li><a href="#"><i class="icofont-contact-add"></i> <span class="link-title">contact</span></a>
							<ul class="nav sub-menu">
								<li><a href="pages/apps/contact/contact-list.html">list view</a></li>
								<li><a href="pages/apps/contact/contact-grid.html">grid view</a></li>
							</ul>
						</li>
						<li><a href="#"><i class="icofont-calendar"></i> <span class="link-title">project manager</span></a>
							<ul class="nav sub-menu">
								<li><a href="pages/apps/project-manager/project.html">project status</a></li>
								<li><a href="pages/apps/project-manager/task-list.html">task list</a></li>
								<li><a href="pages/apps/project-manager/create-new.html">create new Board</a></li>
							</ul>
						</li>
						<li><a href="#"><i class="icofont-files-stack"></i> <span class="link-title">file manager</span></a>
							<ul class="nav sub-menu">
								<li><a href="pages/apps/file-manager/file-info.html">file info</a></li>
								<li><a href="pages/apps/file-manager/share.html">share</a></li>
								<li><a href="pages/apps/file-manager/upload.html">upload new file</a></li>
							</ul>
						</li>
						<li class="nav-category">UI Elements</li>
						<li><a href="pages/ui-elements/widget.html"><i class="icofont-magic-alt"></i> <span class="link-title">widgets</span></a></li>
						<li><a href="#"><i class="icofont-brand-icofont"></i> <span class="link-title">Icons (Aniloan)</span></a>
							<ul class="nav sub-menu">
								<li><a href="pages/ui-elements/icons/iconfont.html">ico font</a></li>
								<li><a href="pages/ui-elements/icons/materializeicon.html">Materialize Icons</a></li>
								<li><a href="pages/ui-elements/icons/et-lineicon.html">Et-Line Icons</a></li>
								<li><a href="pages/ui-elements/icons/eleganticon.html">Elegant Icons</a></li>
								<li><a href="pages/ui-elements/icons/pe-7strokeicon.html">Pe-7 Stroke Icons</a></li>
								<li><a href="pages/ui-elements/icons/themifyicon.html">Themify Icons</a></li>
							</ul>
						</li>
						<li><a href="pages/ui-elements/color.html"><i class="icofont-eye-dropper"></i> <span class="link-title">color</span></a></li>
						<li><a href="pages/ui-elements/extra-component.html"><i class="icofont-plus"></i> <span class="link-title">extra Component</span></a></li>
						<li class="nav-category">Form & Table</li>
						<li><a href="#"><i class="icofont-table"></i> <span class="link-title">Form Elements</span></a>
							<ul class="nav sub-menu">
								<li><a href="pages/form%26table/form-elements/base-input.html">Base Input</a></li>
								<li><a href="pages/form%26table/form-elements/input-group.html">Input Groups</a></li>
								<li><a href="pages/form%26table/form-elements/checkbox.html">Checkbox</a></li>
								<li><a href="pages/form%26table/form-elements/radio.html">radio</a></li>
								<li><a href="pages/form%26table/form-elements/switch.html">Switch</a></li>
								<li><a href="pages/form%26table/form-elements/number-input.html">Number Input</a></li>
								<li><a href="pages/form%26table/form-elements/textarea.html">Text Area</a></li>
								<li><a href="pages/form%26table/form-elements/text-editor.html">Text Editor (Quill Editor)</a></li>
								<li><a href="pages/form%26table/form-elements/file-uploader.html">File Uploader</a></li>
								<li><a href="pages/form%26table/form-elements/datetime-picker.html">Date & Time Picker</a></li>
							</ul>
						</li>
						<li><a href="pages/form%26table/form-layout.html"><i class="icofont-layout"></i> <span class="link-title">Form Layout</span></a></li>
						<li><a href="pages/form%26table/form-wizard.html"><i class="icofont-ui-file"></i> <span class="link-title">Form Wizard</span></a></li>
						<li><a href="pages/form%26table/form-validation.html"><i class="icofont-exclamation-circle"></i> <span class="link-title">Form Validation</span></a></li>
						<li><a href="pages/form%26table/form-repeater.html"><i class="icofont-meeting-add"></i> <span class="link-title">Form Repeater</span></a></li>
						<li><a href="pages/form%26table/table.html"><i class="icofont-table"></i> <span class="link-title">Table</span></a></li>
						<li><a href="pages/form%26table/table-extended.html"><i class="icofont-contact-add"></i> <span class="link-title">Table Extended</span></a></li>
						<li class="nav-category">pages</li>
						<li><a href="#"><i class="icofont-ui-user"></i> <span class="link-title">User Profile</span></a>
							<ul class="nav sub-menu">
								<li><a href="pages/pages/user-profile/news-feed.html">News Feed</a></li>
								<li><a href="pages/pages/user-profile/about.html">about</a></li>
								<li><a href="pages/pages/user-profile/gallery.html">gallery</a></li>
								<li><a href="pages/pages/user-profile/connection.html">Connections</a></li>
								<li><a href="pages/pages/user-profile/profile-chat.html">Chat</a></li>
								<li><a href="pages/pages/user-profile/edit-profile.html">Edit Profile</a></li>
								<li><a href="pages/pages/user-profile/user-dashboard.html">User Dashboard</a></li>
							</ul>
						</li>
						<li><a href="pages/pages/faq.html"><i class="icofont-support-faq"></i> <span class="link-title">FAQ</span></a></li>
						<li><a href="pages/pages/price.html"><i class="icofont-price"></i> <span class="link-title">Pricing</span></a></li>
						<li><a href="pages/pages/timeline.html"><i class="icofont-clock-time"></i> <span class="link-title">Timeline</span></a></li>
						<li><a href="pages/pages/account-setting.html"><i class="icofont-settings-alt"></i> <span class="link-title">Account Settings</span></a></li>
						<li><a href="#"><i class="icofont-check-circled"></i> <span class="link-title">Authentication</span></a>
							<ul class="nav sub-menu">
								<li><a href="pages/pages/authentication/login.html">Log In</a></li>
								<li><a href="pages/pages/authentication/register.html">Register</a></li>
								<li><a href="pages/pages/authentication/forget-pass.html">Forget Password</a></li>
								<li><a href="pages/pages/authentication/reset-pass.html">Reset Password</a></li>
							</ul>
						</li>
						<li><a href="#"><i class="icofont-exclamation-tringle"></i> <span class="link-title">Miscellaneous</span></a>
							<ul class="nav sub-menu">
								<li><a href="pages/pages/miscellaneous/comming-soon.html">Coming Soon</a></li>
								<li><a href="pages/pages/miscellaneous/404.html">404 Error</a></li>
								<li><a href="pages/pages/miscellaneous/500.html">500 Error</a></li>
								<li><a href="pages/pages/miscellaneous/page-not-authorized.html">Not Authorized</a></li>
								<li><a href="pages/pages/miscellaneous/maintenance.html">Maintenance</a></li>
								<li><a href="pages/pages/miscellaneous/session-timeout.html">Session Timeout</a></li>
							</ul>
						</li>
						<li class="nav-category">Chart & Maps</li>
						<li><a href="#"><i class="icofont-chart-pie-alt"></i> <span class="link-title">charts</span></a>
							<ul class="nav sub-menu">
								<li><a href="pages/charts/apex.html">Apex</a></li>
								<li><a href="pages/charts/chartjs.html">Chartjs</a></li>
								<li><a href="pages/charts/morrischart.html">Morris Chart</a></li>
								<li><a href="pages/charts/flotchart.html">Flot Chart</a></li>
								<li><a href="pages/charts/chartist.html">Chartist Chart</a></li>
								<li><a href="pages/charts/c3-chart.html">C3 Chart</a></li>
							</ul>
						</li>
						<li class="nav-category">Extensions</li>
						<li><a href="pages/extensions/sweet-alert.html"><i class="icofont-notification"></i> <span class="link-title">Sweet Alert</span></a></li>
						<li><a href="pages/extensions/toastr.html"><i class="icofont-dice"></i> <span class="link-title">Toastr</span></a></li>
						<li><a href="pages/extensions/noui-slider.html"><i class="icofont-filter"></i> <span class="link-title">NoUi Slider</span></a></li>
						<li><a href="pages/extensions/dragdrop.html"><i class="icofont-drag"></i> <span class="link-title">Drag & Drop</span></a></li>
						<li><a href="pages/extensions/tour.html"><i class="icofont-education"></i> <span class="link-title">Tour</span></a></li>
						<li><a href="pages/extensions/swiper.html"><i class="icofont-swoosh-right"></i> <span class="link-title">Swiper</span></a></li>
						<li><a href="pages/extensions/treeview.html"><i class="icofont-tree-alt"></i> <span class="link-title">Treeview</span></a></li>
						<li><a href="pages/extensions/block-ui.html"><i class="icofont-card"></i> <span class="link-title">Block-UI</span></a></li>
						<li><a href="pages/extensions/media-player.html"><i class="icofont-multimedia"></i> <span class="link-title">Media Player</span></a></li>
						<li><a href="pages/extensions/i18n.html"><i class="icofont-globe"></i> <span class="link-title">i18n</span></a></li>
						<li class="nav-category">others</li>
						<li><a href="#"><i class="icofont-navigation-menu"></i> <span class="link-title">Menu Levels</span></a>
							<ul class="nav sub-menu">
								<li><a href="#">Second Level 01</a>
									<ul class="nav sub-menu">
										<li><a href="#">Third Level 01</a></li>
										<li><a href="#">Third Level 02</a></li>
									</ul>
								</li>
								<li><a href="#">Second Level 02</a>
									<ul class="nav sub-menu">
										<li><a href="#">Third Level 01</a></li>
										<li><a href="#">Third Level 02</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#" class="disabled"><i class="icofont-not-allowed"></i> <span class="link-title">Disable Menu</span></a></li>
						<li class="nav-category">Support</li>
					</ul>
				</div>
			</nav>
			<div class="main-content">
				<div class="container-fluid">
                {{ $slot }}
				</div>
			</div>
		</div>
    </div>
		<footer class="footer">AA © 2021 created by - <a href="https://www.abelarana.com/"> Abel Arana</a></footer>
    </body>
</html>
