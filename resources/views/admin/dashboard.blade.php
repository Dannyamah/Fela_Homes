{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<x-app-layout>
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
                        <!-- row -->
			<div class="container-fluid">
                <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
					<div class="mr-auto  d-lg-block">
						<h2 class="text-black font-w600">Dashboard</h2>
						<p class="mb-0">Welcome to Fela Property </p>
					</div>
					<a href="javascript:void(0);" class="btn btn-primary rounded light mr-3">Refresh</a>
					<a href="javascript:void(0);" class="btn btn-primary rounded"><i class="flaticon-381-settings-2 mr-0"></i></a>
				</div>
				<div class="row">
					<div class="col-xl-6 col-xxl-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="card bg-danger property-bx text-white">
									<div class="card-body">
										<div class="media d-sm-flex d-block align-items-center">
											<span class="mr-4 d-block mb-sm-0 mb-3">
												<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M31.8333 79.1667H4.16659C2.33325 79.1667 0.833252 77.6667 0.833252 75.8333V29.8333C0.833252 29 1.16659 28 1.83325 27.5L29.4999 1.66667C30.4999 0.833332 31.8333 0.499999 32.9999 0.999999C34.3333 1.66667 34.9999 2.83333 34.9999 4.16667V76C34.9999 77.6667 33.4999 79.1667 31.8333 79.1667ZM7.33325 72.6667H28.4999V11.6667L7.33325 31.3333V72.6667Z" fill="white"/>
													<path d="M75.8333 79.1667H31.6666C29.8333 79.1667 28.3333 77.6667 28.3333 75.8334V36.6667C28.3333 34.8334 29.8333 33.3334 31.6666 33.3334H75.8333C77.6666 33.3334 79.1666 34.8334 79.1666 36.6667V76C79.1666 77.6667 77.6666 79.1667 75.8333 79.1667ZM34.9999 72.6667H72.6666V39.8334H34.9999V72.6667Z" fill="white"/>
													<path d="M60.1665 79.1667H47.3332C45.4999 79.1667 43.9999 77.6667 43.9999 75.8334V55.5C43.9999 53.6667 45.4999 52.1667 47.3332 52.1667H60.1665C61.9999 52.1667 63.4999 53.6667 63.4999 55.5V75.8334C63.4999 77.6667 61.9999 79.1667 60.1665 79.1667ZM50.6665 72.6667H56.9999V58.8334H50.6665V72.6667Z" fill="white"/>
												</svg>
											</span>
											<div class="media-body mb-sm-0 mb-3 mr-5">
												<h4 class="fs-22 text-white">Total Properties</h4>
												<div class="progress mt-3 mb-2" style="height:8px;">
													<div class="progress-bar bg-white progress-animated" style="width: 86%; height:8px;" role="progressbar">
														<span class="sr-only">86% Complete</span>
													</div>
												</div>
												<span class="fs-14">431 more to break last month record</span>
											</div>
											<span class="fs-46 font-w500">{{$listings->count()}}</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body mr-3">
												<h2 class="fs-36 text-black font-w600">{{$sales->count()}}</h2>
												<p class="fs-18 mb-0 text-black font-w500">Properties for Sale</p>
												<span class="fs-13">Target 20/month</span>
											</div>
											<div class="d-inline-block position-relative donut-chart-sale">
												<span class="donut1" data-peity='{ "fill": ["rgb(60, 76, 184)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'>5/8</span>
												<small class="text-primary">71%</small>
												<span class="circle bgl-primary"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body mr-3">
												<h2 class="fs-36 text-black font-w600">{{$rents->count()}}</h2>
												<p class="fs-18 mb-0 text-black font-w500">Properties for Rent</p>
												<span class="fs-13">Target 20/month</span>
											</div>
											<div class="d-inline-block position-relative donut-chart-sale">
												<span class="donut1" data-peity='{ "fill": ["rgb(55, 209, 90)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'>7/8</span>
												<small class="text-success">90%</small>
												<span class="circle bgl-success"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-12">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h3 class="fs-20 text-black">Total Revenue</h3>
								<div class="dropdown ml-auto">
									<div class="btn-link" data-toggle="dropdown" >
										<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
									</div>
									<div class="dropdown-menu dropdown-menu-right" >
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body pt-2 pb-0">
								<div class="d-flex flex-wrap align-items-center">
									<span class="fs-36 text-black font-w600 mr-3">$678,345</span>
									<p class="mr-sm-auto mr-3 mb-sm-0 mb-3">last month $563,443</p>
									<div class="d-flex align-items-center">
										<svg class="mr-3" width="87" height="47" viewBox="0 0 87 47" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M29.8043 20.9254C15.2735 14.3873 5.88029 27.282 3 34.5466V46.2406H85V4.58005C70.8925 -0.868404 70.5398 8.66639 60.8409 19.5633C51.1419 30.4602 47.9677 29.0981 29.8043 20.9254Z" fill="url(#paint0_linear)"/>
											<path d="M3 35.2468C5.88029 27.9822 15.2735 15.0875 29.8043 21.6257C47.9677 29.7984 51.1419 31.1605 60.8409 20.2636C70.5398 9.36665 70.8925 -0.168147 85 5.28031" stroke="#37D159" stroke-width="6"/>
											<defs>
											<linearGradient id="paint0_linear" x1="44" y1="-36.4332" x2="44" y2="45.9686" gradientUnits="userSpaceOnUse">
											<stop stop-color="#37D159" offset=""/>
											<stop offset="1" stop-color="#37D159" stop-opacity="0"/>
											</linearGradient>
											</defs>
										</svg>
										<span class="fs-22 text-success mr-2">7%</span>
										<svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0 6L6 2.62268e-07L12 6" fill="#37D159"/>
										</svg>
									</div>
								</div>
								<div id="chartTimeline"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8">
						<div class="row">
							<div class="col-xl-8 col-xxl-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black">Overview</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link" data-toggle="dropdown" >
												<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right" >
												<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="d-sm-flex flex-wrap  justify-content-around">
											<div class="d-flex mb-4 align-items-center">
												<span class="rounded mr-3 bg-primary p-3">
													<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M10.3458 25.7292H1.35412C0.758283 25.7292 0.270782 25.2417 0.270782 24.6458V9.69583C0.270782 9.42499 0.379116 9.09999 0.595783 8.93749L9.58745 0.541659C9.91245 0.270825 10.3458 0.162492 10.725 0.324992C11.1583 0.541659 11.375 0.920825 11.375 1.35416V24.7C11.375 25.2417 10.8875 25.7292 10.3458 25.7292ZM2.38328 23.6167H9.26245V3.79166L2.38328 10.1833V23.6167Z" fill="white"/>
														<path d="M24.6458 25.7292H10.2916C9.69578 25.7292 9.20828 25.2417 9.20828 24.6458V11.9167C9.20828 11.3208 9.69578 10.8333 10.2916 10.8333H24.6458C25.2416 10.8333 25.7291 11.3208 25.7291 11.9167V24.7C25.7291 25.2417 25.2416 25.7292 24.6458 25.7292ZM11.375 23.6167H23.6166V12.9458H11.375V23.6167Z" fill="white"/>
														<path d="M19.5541 25.7292H15.3833C14.7874 25.7292 14.2999 25.2417 14.2999 24.6458V18.0375C14.2999 17.4417 14.7874 16.9542 15.3833 16.9542H19.5541C20.1499 16.9542 20.6374 17.4417 20.6374 18.0375V24.6458C20.6374 25.2417 20.1499 25.7292 19.5541 25.7292ZM16.4666 23.6167H18.5249V19.1208H16.4666V23.6167Z" fill="white"/>
													</svg>
												</span>
												<div>
													<p class="fs-14 mb-1">Total Sale</p>
													<span class="fs-18 text-black font-w700">2,346 Unit</span>
												</div>
											</div>
											<div class="d-flex mb-4 align-items-center">
												<span class="rounded mr-3 bg-success p-3">
													<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M10.3458 25.7292H1.35412C0.758283 25.7292 0.270782 25.2417 0.270782 24.6458V9.69583C0.270782 9.42499 0.379116 9.09999 0.595783 8.93749L9.58745 0.541659C9.91245 0.270825 10.3458 0.162492 10.725 0.324992C11.1583 0.541659 11.375 0.920825 11.375 1.35416V24.7C11.375 25.2417 10.8875 25.7292 10.3458 25.7292ZM2.38328 23.6167H9.26245V3.79166L2.38328 10.1833V23.6167Z" fill="white"/>
														<path d="M24.6458 25.7292H10.2916C9.69578 25.7292 9.20828 25.2417 9.20828 24.6458V11.9167C9.20828 11.3208 9.69578 10.8333 10.2916 10.8333H24.6458C25.2416 10.8333 25.7291 11.3208 25.7291 11.9167V24.7C25.7291 25.2417 25.2416 25.7292 24.6458 25.7292ZM11.375 23.6167H23.6166V12.9458H11.375V23.6167Z" fill="white"/>
														<path d="M19.5541 25.7292H15.3833C14.7874 25.7292 14.2999 25.2417 14.2999 24.6458V18.0375C14.2999 17.4417 14.7874 16.9542 15.3833 16.9542H19.5541C20.1499 16.9542 20.6374 17.4417 20.6374 18.0375V24.6458C20.6374 25.2417 20.1499 25.7292 19.5541 25.7292ZM16.4666 23.6167H18.5249V19.1208H16.4666V23.6167Z" fill="white"/>
													</svg>
												</span>
												<div>
													<p class="fs-14 mb-1">Total Rent</p>
													<span class="fs-18 text-black font-w700">1,252 Unit</span>
												</div>
											</div>
										</div>
										<div id="chartBar"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-12">
								<div class="row">
									<div class="col-xl-12 col-xxl-6 col-md-6">
										<div class="card">
											<div class="card-body">
												<div id="monocromeChart"></div>
												<div class="d-flex flex-wrap mt-3">
													<span class="text-black font-w600 mr-5 mb-2">
													<svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="20" height="20" rx="8" fill="#FFB067"/>
													</svg>Agent</span>
													<span class="text-black font-w600 mb-2">
													<svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="20" height="20" rx="8" fill="#B655E4"/>
													</svg>Customers</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-xxl-6 col-md-6">
										<div class="card">
											<div class="card-body">
												<p class="mb-2 d-flex  fs-16 text-black font-w500">Product Viewed
													<span class="pull-right ml-auto text-dark fs-14">561/days</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:75%; height:10px;" role="progressbar">
														<span class="sr-only">75% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex  fs-16 text-black font-w500">Product Listed
													<span class="pull-right ml-auto text-dark fs-14">3,456 Unit</span>
												</p>
												<div class="progress mb-3" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:90%; height:10px;" role="progressbar">
														<span class="sr-only">90% Complete</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black">Properties Map Location</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link" data-toggle="dropdown" >
												<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right" >
												<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-3">
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Europe
													<span class="pull-right text-dark fs-14 ml-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:75%; height:10px;" role="progressbar">
														<span class="sr-only">75% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Asia
													<span class="pull-right text-dark fs-14 ml-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:100%; height:10px;" role="progressbar">
														<span class="sr-only">100% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Africa
													<span class="pull-right text-dark fs-14 ml-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:75%; height:10px;" role="progressbar">
														<span class="sr-only">75% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Australia
													<span class="pull-right text-dark fs-14 ml-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:50%; height:10px;" role="progressbar">
														<span class="sr-only">50% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">America
													<span class="pull-right text-dark fs-14 ml-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:70%; height:10px;" role="progressbar">
														<span class="sr-only">70% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">USA
													<span class="pull-right text-dark fs-14 ml-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div>
											</div>
											<div class="col-lg-9">
												<div id="world-map"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12 col-lg-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black">Customer Review</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link" data-toggle="dropdown" >
												<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right" >
												<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</div>
									<div class="card-body pb-0">
										<div class="pb-3 border-bottom mb-3">
											<div class="d-flex mb-3 flex-wrap align-items-end">
												<img class="rounded mr-3"  src="public/images/customers/1.jpg" width="58" alt="">
												<div>
													<h6 class="fs-16 text-black font-w600">John Doe</h6>
													<div class="star-icons">
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
													</div>
												</div>
												<span class="fs-14 ml-auto">5m ago</span>
											</div>
											<p class="fs-14 mb-0">Friendly service
											Josh, Lunar and everyone at Just Property in Hastings deserved a big Thank You from us for moving us from Jakarta to Medan during the lockdown.
											</p>
										</div>
										<div class="pb-3 border-bottom mb-3">
											<div class="d-flex mb-3 flex-wrap align-items-end">
												<img class="rounded mr-3"  src="public/images/customers/2.jpg" width="58" alt="">
												<div>
													<h6 class="fs-16 text-black font-w600">Amelia Tuner</h6>
													<div class="star-icons">
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
													</div>
												</div>
												<span class="fs-14 ml-auto">10h ago</span>
											</div>
											<p class="fs-14 mb-0">I viewed a number of properties with Just Property and found them to be professional, efficient, patient, courteous and helpful every time.
											</p>
										</div>
										<div class="pb-3">
											<div class="d-flex mb-3 flex-wrap align-items-end">
												<img class="rounded mr-3"  src="public/images/customers/3.jpg" width="58" alt="">
												<div>
													<h6 class="fs-16 text-black font-w600">Jessica Humb</h6>
													<div class="star-icons">
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
													</div>
												</div>
												<span class="fs-14 ml-auto">2d ago</span>
											</div>
											<p class="fs-14 mb-0">Dealing with Syamsudin and Bakri was a joy. I got in touch with Just Property after seeing a couple of properties that caught my eye. Both Syamsudin and Bakri strive to deliver a professional service and surpassed my expectations - they were not only helpful but extremely approachable and not at all bumptious...
											</p>
										</div>
									</div>
									<div class="card-footer border-0 p-0">
										<a href="review.html" class="btn d-block btn-primary rounded">See More Reviews</a>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black">Recent Property</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link" data-toggle="dropdown" >
												<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right" >
												<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="testimonial-one owl-carousel">
											<div class="items">
												<a href="property-details.html"><img  src="public/images/testimonial/1.png" alt="#" class="w-100 mw-100 mb-3 rounded"></a>
												<h5 class="fs-16 font-w600 mb-0"><a href="property-details.html" class="text-black">98AB Alexander Court, London</a></h5>
												<span class="fs-14 d-block mb-4">45 Connor St. London, 44523</span>
												<a href="javascript:void(0);" class="bgl-primary text-black p-1 pl-2 pr-2 mr-3 font-w600 rounded">
												<svg class="mr-2" width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.8125 5.54171C17.6264 5.54171 19.1667 7.01538 19.1667 8.89588V11.7709H17.7292V12.7292H16.7708V11.7709H2.39583V12.7292H1.4375V11.7709H0V8.89588C0 7.08201 1.48814 5.54171 3.35417 5.54171H15.8125ZM14.8542 0.270874C16.1425 0.270874 17.2504 1.30663 17.25 2.66671L17.2504 4.95601C16.8146 4.71707 16.3271 4.58337 15.8125 4.58337L14.8542 4.58289C14.8542 3.76226 14.1822 3.14587 13.4167 3.14587H10.5417C10.1735 3.14587 9.8377 3.28427 9.58338 3.51186C9.32939 3.28444 8.99338 3.14587 8.625 3.14587H5.75C4.95625 3.14587 4.31276 3.78921 4.3125 4.58289L3.35417 4.58337C2.83975 4.58337 2.35239 4.71699 1.91667 4.95579V2.66671C1.91667 1.37835 2.95002 0.270874 4.3125 0.270874H14.8542ZM8.625 4.10397C8.88503 4.10397 9.10417 4.34355 9.10417 4.58337L5.27083 4.58289C5.27083 4.28973 5.50427 4.10421 5.75 4.10421L8.625 4.10397ZM13.4167 4.10743C13.6878 4.10397 13.8956 4.33738 13.8958 4.58289H10.0625C10.0625 4.28554 10.2959 4.10421 10.5417 4.10421L13.4167 4.10743Z" fill="#3B4CB8"/>
												</svg>
												4</a>
												<a href="javascript:void(0);" class="bgl-primary text-black p-1 pl-3 pr-3 font-w600 rounded">
												<svg class="mr-2" width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.92 7.00064L12.6744 8.22859C12.2819 10.1913 10.4996 11.6677 8.55634 11.6677H7.95079L9.11756 14.7791H1.5557V7.00064H12.92ZM3.50032 0C4.54604 0 5.44495 0.871336 5.44495 1.94462V5.05602H12.8345V5.83387H5.44495V6.22279H0.777849L0.777769 7.38965C0.327309 7.05126 0 6.47802 0 5.83387V1.94462C0 0.8989 0.851593 0 1.94462 0H3.50032Z" fill="#3B4CB8"/>
												</svg>
												2
												</a>
												<p class="fs-14 mt-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
											</div>
											<div class="items">
												<a href="property-details.html"><img  src="public/images/testimonial/1.png" alt="#" class="w-100 mw-100 mb-3 rounded"></a>
												<h5 class="fs-16 font-w600 mb-0"><a href="property-details.html" class="text-black">98AB Alexander Court, London</a></h5>
												<span class="fs-14 d-block mb-4">45 Connor St. London, 44523</span>
												<a href="javascript:void(0);" class="bgl-primary text-black p-1 pl-2 pr-2 mr-3 font-w600 rounded">
												<svg class="mr-2" width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.8125 5.54171C17.6264 5.54171 19.1667 7.01538 19.1667 8.89588V11.7709H17.7292V12.7292H16.7708V11.7709H2.39583V12.7292H1.4375V11.7709H0V8.89588C0 7.08201 1.48814 5.54171 3.35417 5.54171H15.8125ZM14.8542 0.270874C16.1425 0.270874 17.2504 1.30663 17.25 2.66671L17.2504 4.95601C16.8146 4.71707 16.3271 4.58337 15.8125 4.58337L14.8542 4.58289C14.8542 3.76226 14.1822 3.14587 13.4167 3.14587H10.5417C10.1735 3.14587 9.8377 3.28427 9.58338 3.51186C9.32939 3.28444 8.99338 3.14587 8.625 3.14587H5.75C4.95625 3.14587 4.31276 3.78921 4.3125 4.58289L3.35417 4.58337C2.83975 4.58337 2.35239 4.71699 1.91667 4.95579V2.66671C1.91667 1.37835 2.95002 0.270874 4.3125 0.270874H14.8542ZM8.625 4.10397C8.88503 4.10397 9.10417 4.34355 9.10417 4.58337L5.27083 4.58289C5.27083 4.28973 5.50427 4.10421 5.75 4.10421L8.625 4.10397ZM13.4167 4.10743C13.6878 4.10397 13.8956 4.33738 13.8958 4.58289H10.0625C10.0625 4.28554 10.2959 4.10421 10.5417 4.10421L13.4167 4.10743Z" fill="#3B4CB8"/>
												</svg>
												4</a>
												<a href="javascript:void(0);" class="bgl-primary text-black p-1 pl-3 pr-3 font-w600 rounded">
												<svg class="mr-2" width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.92 7.00064L12.6744 8.22859C12.2819 10.1913 10.4996 11.6677 8.55634 11.6677H7.95079L9.11756 14.7791H1.5557V7.00064H12.92ZM3.50032 0C4.54604 0 5.44495 0.871336 5.44495 1.94462V5.05602H12.8345V5.83387H5.44495V6.22279H0.777849L0.777769 7.38965C0.327309 7.05126 0 6.47802 0 5.83387V1.94462C0 0.8989 0.851593 0 1.94462 0H3.50032Z" fill="#3B4CB8"/>
												</svg>
												2
												</a>
												<p class="fs-14 mt-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>

        </div>
        <!--**********************************
            Content body end
        ***********************************-->
    </x-app-layout>
