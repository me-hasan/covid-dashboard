				<!--aside open-->
				<aside class="app-sidebar">
					<div class="app-sidebar__logo">
						<a class="header-brand" href="index.html">
							<img src="{{ asset('assets/images/brand/corona-logo.webp') }}" class="header-brand-img desktop-lgo" alt="Admin logo">
							<img src="{{ asset('assets/images/brand/logo1.png') }}" class="header-brand-img dark-logo" alt="Admintro logo">
							<img src="{{ asset('assets/images/brand/favicon.png') }}" class="header-brand-img mobile-logo" alt="Admintro logo">
							<img src="{{ asset('assets/images/brand/favicon1.png') }}" class="header-brand-img darkmobile-logo" alt="Admintro logo">
						</a>
					</div>
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="user-pic">
								<img src="{{ asset('assets/images/users/2.jpg') }}" alt="user-img" class="avatar-xl rounded-circle mb-1">
							</div>
							<div class="user-info">
								<h5 class=" mb-1">{{Auth::user()->name}} <i class="ion-checkmark-circled  text-success fs-12"></i></h5>
								<span class="text-muted app-sidebar__user-name text-sm">{{Auth::user()->email}}</span>
							</div>
						</div>
						<!-- <div class="sidebar-navs">
							<ul class="nav nav-pills-circle">
								<li class="nav-item" data-placement="top" data-toggle="tooltip" title="Support">
									<a class="icon" href="#" >
										<i class="las la-life-ring header-icons"></i>
									</a>
								</li>
								<li class="nav-item" data-placement="top" data-toggle="tooltip" title="Documentation">
									<a class="icon" href="#">
										<i class="las  la-file-alt header-icons"></i>
									</a>
								</li>
								<li class="nav-item" data-placement="top" data-toggle="tooltip" title="Projects">
									<a href="#" class="icon">
										<i class="las la-project-diagram header-icons"></i>
									</a>
								</li>
								<li class="nav-item" data-placement="top" data-toggle="tooltip" title="Settins">
									<a class="icon" href="#">
										<i class="las la-cog header-icons"></i>
									</a>
								</li>
							</ul>
						</div> -->
					</div>
					<ul class="side-menu app-sidebar3">
						<li class="side-item side-item-category mt-4">Main</li>
						<li class="slide">
							<a class="side-menu__item"  href="{{route('admin-dashboard')}}">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
							<span class="side-menu__label">Dashboard</span>
							<!-- <span class="badge badge-danger side-badge">Hot</span> -->
						</a>
						</li>
						<li class="side-item side-item-category">User Management</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/></svg>
							<span class="side-menu__label">User</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu ">
								<li><a href="{{route('all-user')}}" class="slide-item">User List</a></li>
								<li><a href="{{route('create-user')}}" class="slide-item">Create User</a></li>
							</ul>
						</li>
						<!-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
							<span class="side-menu__label">Map</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="maps2.html" class="slide-item">Leaflet Maps</a></li>
								<li><a href="maps3.html" class="slide-item">Mapel Maps</a></li>
								<li><a href="maps.html" class="slide-item">Vector Maps</a></li>
							</ul>
						</li> -->
						<!-- <li class="side-item side-item-category">Components</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/></svg>
							<span class="side-menu__label">Apps</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu ">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Chat</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="chat.html">Chat 01</a></li>
										<li><a class="sub-slide-item" href="chat2.html">Chat 02</a></li>
										<li><a class="sub-slide-item" href="chat3.html">Chat 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Contact</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="contact-list.html">Contact list 01</a></li>
										<li><a class="sub-slide-item" href="contact-list2.html">Contact list 02</a></li>
									</ul>
								</li>
								<li><a href="calendar.html" class="slide-item"> Calendar</a></li>
								<li><a href="cookies.html" class="slide-item"> Cookies</a></li>
								<li><a href="counters.html" class="slide-item"> Counters</a></li>
								<li><a href="dragula.html" class="slide-item"> Dragula Card</a></li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">File Manager</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="file-manager.html">File Manager 01</a></li>
										<li><a class="sub-slide-item" href="file-manager-list.html">File Manager 02</a></li>
									</ul>
								</li>
								<li><a href="image-comparison.html" class="slide-item"> Image Comparison</a></li>
								<li><a href="img-crop.html" class="slide-item"> Image Crop</a></li>
								<li><a href="loaders.html" class="slide-item"> Loaders</a></li>
								<li><a href="notify.html" class="slide-item"> Notifications</a></li>
								<li><a href="page-sessiontimeout.html" class="slide-item"> Page-sessiontimeout</a></li>
								<li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
								<li><a href="rating.html" class="slide-item"> Rating</a></li>
								<li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Todo List</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="todo-list.html">Todo List 01</a></li>
										<li><a class="sub-slide-item" href="todo-list2.html">Todo List 02</a></li>
										<li><a class="sub-slide-item" href="todo-list3.html">Todo List 03</a></li>
									</ul>
								</li>
								<li><a href="time-line.html" class="slide-item"> Time Line</a></li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">User List</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="users-list-1.html">User List 01</a></li>
										<li><a class="sub-slide-item" href="users-list-2.html">User List 02</a></li>
										<li><a class="sub-slide-item" href="users-list-3.html">User List 03</a></li>
										<li><a class="sub-slide-item" href="users-list-4.html">User List 04</a></li>
									</ul>
								</li>
							</ul>
						</li> -->
						<!-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"/></svg>
							<span class="side-menu__label">Elements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="accordion.html" class="slide-item"> Accordion</a></li>
								<li><a href="alerts.html" class="slide-item"> Alerts</a></li>
								<li><a href="avatars.html" class="slide-item"> Avatars</a></li>
								<li><a href="badge.html" class="slide-item"> Badges</a></li>
								<li><a href="breadcrumbs.html" class="slide-item"> Breadcrumb</a></li>
								<li><a href="buttons.html" class="slide-item"> Buttons</a></li>
								<li><a href="cards.html" class="slide-item"> Cards</a></li>
								<li><a href="cards-image.html" class="slide-item"> Card Images</a></li>
								<li><a href="carousel.html" class="slide-item"> Carousel</a></li>
								<li><a href="dropdown.html" class="slide-item"> Dropdown</a></li>
								<li><a href="footers.html" class="slide-item"> Footers</a></li>
								<li><a href="headers.html" class="slide-item"> Headers</a></li>
								<li><a href="jumbotron.html" class="slide-item"> Jumbotron</a></li>
								<li><a href="list.html" class="slide-item"> List Group</a></li>
								<li><a href="media-object.html" class="slide-item"> Media Obejct</a></li>
								<li><a href="modal.html" class="slide-item"> Modal</a></li>
								<li><a href="navigation.html" class="slide-item"> Navigation</a></li>
								<li><a href="pagination.html" class="slide-item"> Pagination</a></li>
								<li><a href="panels.html" class="slide-item"> Panel</a></li>
								<li><a href="popover.html" class="slide-item"> Popover</a></li>
								<li><a href="progress.html" class="slide-item"> Progress</a></li>
								<li><a href="tabs.html" class="slide-item"> Tabs</a></li>
								<li><a href="tags.html" class="slide-item"> Tags</a></li>
								<li><a href="tooltip.html" class="slide-item"> Tooltips</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17.73 12.02l3.98-3.98c.39-.39.39-1.02 0-1.41l-4.34-4.34c-.39-.39-1.02-.39-1.41 0l-3.98 3.98L8 2.29C7.8 2.1 7.55 2 7.29 2c-.25 0-.51.1-.7.29L2.25 6.63c-.39.39-.39 1.02 0 1.41l3.98 3.98L2.25 16c-.39.39-.39 1.02 0 1.41l4.34 4.34c.39.39 1.02.39 1.41 0l3.98-3.98 3.98 3.98c.2.2.45.29.71.29.26 0 .51-.1.71-.29l4.34-4.34c.39-.39.39-1.02 0-1.41l-3.99-3.98zM12 9c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-4.71 1.96L3.66 7.34l3.63-3.63 3.62 3.62-3.62 3.63zM10 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm2 2c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm2-4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2.66 9.34l-3.63-3.62 3.63-3.63 3.62 3.62-3.62 3.63z"/></svg>
							<span class="side-menu__label">Utilities</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="elements-border.html" class="slide-item"> Border</a></li>
								<li><a href="element-colors.html" class="slide-item"> Colors</a></li>
								<li><a href="elements-display.html" class="slide-item"> Display</a></li>
								<li><a href="element-flex.html" class="slide-item"> Flex Items</a></li>
								<li><a href="element-height.html" class="slide-item"> Height</a></li>
								<li><a href="elements-margin.html" class="slide-item"> Margin</a></li>
								<li><a href="elements-paddning.html" class="slide-item"> Padding</a></li>
								<li><a href="element-typography.html" class="slide-item"> Typhography</a></li>
								<li><a href="element-width.html" class="slide-item"> Width</a></li>
							</ul>
						</li>
						<li class="side-item side-item-category">Forms & Charts </li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>
							<span class="side-menu__label">Forms</span><span class="badge badge-success side-badge">6</span></a>
							<ul class="slide-menu">
								<li><a href="form-elements.html" class="slide-item"> Form Elements</a></li>
								<li><a href="advanced-forms.html" class="slide-item"> Advanced Forms</a></li>
								<li><a href="form-wizard.html" class="slide-item"> Form Wizard</a></li>
								<li><a href="form-editor.html" class="slide-item"> Form Editor</a></li>
								<li><a href="form-sizes.html" class="slide-item"> Form Element Sizes</a></li>
								<li><a href="form-treeview.html" class="slide-item"> Form Treeview</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg>
							<span class="side-menu__label">Charts</span><span class="badge badge-info side-badge">7</span></a>
							<ul class="slide-menu">
								<li><a href="chart-apex.html" class="slide-item"> Apex Charts</a></li>
								<li><a href="chart-chartist.html" class="slide-item">Chartjs Charts</a></li>
								<li><a href="chart-echart.html" class="slide-item"> Echart Charts</a></li>
								<li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
								<li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
								<li><a href="chart-peity.html" class="slide-item"> Pie Charts</a></li>
								<li><a href="chart-c3.html" class="slide-item">C3 Charts</a></li>
							</ul>
						</li>
						<li class="side-item side-item-category">Tables & Icons </li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H5V5h15zm-5 14h-5v-9h5v9zM5 10h3v9H5v-9zm12 9v-9h3v9h-3z"/></svg>
							<span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="tables.html" class="slide-item">Default table</a></li>
								<li><a href="datatable.html" class="slide-item">Data Table</a></li>
							</ul>
						</li>
						<li class="slide">
						    <a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 22C6.49 22 2 17.51 2 12S6.49 2 12 2s10 4.04 10 9c0 3.31-2.69 6-6 6h-1.77c-.28 0-.5.22-.5.5 0 .12.05.23.13.33.41.47.64 1.06.64 1.67 0 1.38-1.12 2.5-2.5 2.5zm0-18c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg>
							<span class="side-menu__label">Icons</span><span class="badge badge-warning side-badge">11</span></a>
							<ul class="slide-menu">
								<li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
								<li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
								<li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
								<li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
								<li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
								<li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
								<li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
								<li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
								<li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
								<li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
								<li><a href="icons11.html" class="slide-item">Material Svgs</a></li>
							</ul>
						</li>
						<li class="side-item side-item-category">Pages & E-Commerce</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z"/></svg>
							<span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Profile</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="profile-1.html">Profile 01</a></li>
										<li><a class="sub-slide-item" href="profile-2.html">Profile 02</a></li>
										<li><a class="sub-slide-item" href="profile-3.html">Profile 03</a></li>
									</ul>
								</li>
								<li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Email</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="email-compose.html">Email Compose</a></li>
										<li><a class="sub-slide-item" href="email-inbox.html">Email Inbox</a></li>
										<li><a class="sub-slide-item" href="email-read.html">Email Read</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Pricing</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="pricing.html">Pricing 01</a></li>
										<li><a class="sub-slide-item" href="pricing-2.html">Pricing 02</a></li>
										<li><a class="sub-slide-item" href="pricing-3.html">Pricing 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Invoice</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="invoice-list.html">Invoice list</a></li>
										<li><a class="sub-slide-item" href="invoice-1.html">Invoice 01</a></li>
										<li><a class="sub-slide-item" href="invoice-2.html">Invoice 02</a></li>
										<li><a class="sub-slide-item" href="invoice-3.html">Invoice 03</a></li>
										<li><a class="sub-slide-item" href="invoice-add.html">Add Invoice</a></li>
										<li><a class="sub-slide-item" href="invoice-edit.html">Edit Invoice</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Blog</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="blog.html">Blog 01</a></li>
										<li><a class="sub-slide-item" href="blog-2.html">Blog 02</a></li>
										<li><a class="sub-slide-item" href="blog-3.html">Blog 03</a></li>
										<li><a class="sub-slide-item" href="blog-styles.html">Blog Styles</a></li>
									</ul>
								</li>
								<li><a href="gallery.html" class="slide-item"> Gallery</a></li>
								<li><a href="faq.html" class="slide-item"> FAQS</a></li>
								<li><a href="terms.html" class="slide-item"> Terms</a></li>
								<li><a href="search.html" class="slide-item"> Search</a></li>
								<li><a href="empty.html" class="slide-item"> Empty Page</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
							<span class="side-menu__label">E-Commerce</span><span class="badge badge-secondary side-badge">3</span></a>
							<ul class="slide-menu">
								<li><a href="shop.html" class="slide-item"> Products</a></li>
								<li><a href="shop-des.html" class="slide-item">Product Details</a></li>
								<li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
							</ul>
						</li>
						<li class="side-item side-item-category">Custom  & Error Pages</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14.25 2.26l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10c0-4.75-3.31-8.72-7.75-9.74zM19.41 9h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM13.1 4.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4c.37 0 .74.03 1.1.08zM5.7 7.09L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12c0-1.85.64-3.55 1.7-4.91zM4.59 15h7.98l-2.71 4.7c-2.4-.67-4.34-2.42-5.27-4.7zm6.31 4.91L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20c-.38 0-.74-.04-1.1-.09zm7.4-3l-4-6.91h5.43c.17.64.27 1.31.27 2 0 1.85-.64 3.55-1.7 4.91z"/></svg>
							<span class="side-menu__label">Custom Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Register</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="register-1.html">Register 01</a></li>
										<li><a class="sub-slide-item" href="register-2.html">Register 02</a></li>
										<li><a class="sub-slide-item" href="register-3.html">Register 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Login</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="login-1.html">Login 01</a></li>
										<li><a class="sub-slide-item" href="login-2.html">Login 02</a></li>
										<li><a class="sub-slide-item" href="login-3.html">Login 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Forget Password</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="forgot-password-1.html">Forget Password 01</a></li>
										<li><a class="sub-slide-item" href="forgot-password-2.html">Forget Password 02</a></li>
										<li><a class="sub-slide-item" href="forgot-password-3.html">Forget Password 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Reset Password</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="reset-password-1.html">Reset Password 01</a></li>
										<li><a class="sub-slide-item" href="reset-password-2.html">Reset Password 02</a></li>
										<li><a class="sub-slide-item" href="reset-password-3.html">Reset Password 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Lock Screen</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="lockscreen-1.html">Lock Screen 01</a></li>
										<li><a class="sub-slide-item" href="lockscreen-2.html">Lock Screen 02</a></li>
										<li><a class="sub-slide-item" href="lockscreen-3.html">Lock Screen 03</a></li>
									</ul>
								</li>
								<li><a href="construction.html" class="slide-item"> Under Construction</a></li>
								<li><a href="coming.html" class="slide-item"> Coming Soon</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg  class="side-menu__icon"  xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.99L19.53 19H4.47L12 5.99M12 2L1 21h22L12 2zm1 14h-2v2h2v-2zm0-6h-2v4h2v-4z"/></svg>
							<span class="side-menu__label">Error Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="400.html" class="slide-item"> 400</a></li>
								<li><a href="401.html" class="slide-item"> 401</a></li>
								<li><a href="403.html" class="slide-item"> 403</a></li>
								<li><a href="404.html" class="slide-item"> 404</a></li>
								<li><a href="500.html" class="slide-item"> 500</a></li>
								<li><a href="503.html" class="slide-item"> 503</a></li>
							</ul>
						</li> -->
					</ul>
				</aside>
				<!--aside closed-->