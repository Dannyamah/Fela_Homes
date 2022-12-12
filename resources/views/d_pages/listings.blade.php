<x-app-layout>

    <div class="content-body">
        <!-- row -->

        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Components</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">List Homes</h4>
                        </div>

                        <x-auth-session-status class="mb-4" :status="session('status')"/>

                        @foreach ($errors->all as $err)
                        <p class="text-danger">{{ $err }}</p>
                        @endforeach

                    <form action="{{route('list-house')}}" method="POST" enctype="multipart/form-data"> @csrf
                        <div class="card-body">
                            <div class="form-wizard order-create">
                                <div class="tab-content">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">House Name*</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Parsley" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label class="text-label">Upload an Image of The House</label>
                                                    <input type="file" name="image" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Commercial or Residential*</label>
                                                    <input type="text" name="type" class="form-control"  placeholder="Commercial or Residential" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Status of House</label>
                                                    <input type="text" name="status" class="form-control" placeholder="For Sale or Rent" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label class="text-label">Price of House</label>
                                                    <input type="text" name="price" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label class="text-label">Location of House</label>
                                                    <input type="text" name="location" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label class="text-label">How Many Rooms does the House Have?</label>
                                                    <input type="text" name="rooms" class="form-control" required>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary rounded mr-3">Submit Listing</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
             </div>



</x-app-layout>
