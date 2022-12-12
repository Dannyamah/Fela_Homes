<x-app-layout>

    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
                        <!-- row -->
			<div class="container-fluid">
                <div class="form-head page-titles d-flex  align-items-center">
					<div class="mr-auto  d-lg-block">
						<h2 class="text-black font-w600">Customer</h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Customers</a></li>
							<li class="breadcrumb-item"><a href="javascript:void(0)">Customer List</a></li>
						</ol>
					</div>
					<a href="javascript:void(0);" class="btn btn-primary rounded light mr-3">Refresh</a>
					<a href="javascript:void(0);" class="btn btn-primary rounded"><i class="flaticon-381-settings-2 mr-0"></i></a>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body p-0">

                                @foreach ($users as $user)
                                <div class="row border-bottom mx-0 pt-4 px-2 align-items-center ">
									<div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-12 mb-sm-4 mb-3 align-items-center  media">
										<img class="mr-sm-4 mr-3 img-fluid rounded" width="90"  src="public/images/customers/4.jpg" alt="DexignZone">
										<div class="media-body">
											<span class="text-primary d-block">#U0{{$user->id}}</span>
											<h3 class="fs-20 text-black font-w600 mb-1">{{ $user->name }}</h3>
											<span class="d-block mb-lg-0 mb-0">Joined on {{ $user->created_at }}</span>
										</div>
									</div>

									<div class="col-xl-2 col-xxl-3 col-lg-6 col-sm-4 mb-sm-4 mb-3">
										<small class="mb-2 d-block">Email Address</small>
										<span class="text-black font-w600">{{ $user->email }}</span>
									</div>
								</div>
                                @endforeach

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
