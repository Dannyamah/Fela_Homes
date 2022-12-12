<x-app-layout>

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->

        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
                </ol>
            </div>
            <div class="row">
                @foreach ($listings as $listing)
                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="/storage/images/{{ $listing->image }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="">{{ $listing->name }}</a></h4>
                                            <div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-empty"></i></li>
                                                    <li><i class="fa fa-star-half-empty"></i></li>
                                                </ul>
                                                <span class="review-text">(34 reviews) / </span><a
                                                    class="product-review" href="" data-toggle="modal"
                                                    data-target="#reviewModal">Write a review?</a>
                                                <p class="price">${{ $listing->price }}</p>
                                            </div>
                                            <p>Status: <span class="item"> {{ $listing->status }} <i
                                                        class="fa fa-check-circle text-success"></i></span></p>
                                            <p>Location: <span class="item">{{ $listing->location }}</span></p>
                                            <p class="text-content">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum.</p>

                                            <a href="{{ route('edit-listing', $listing) }}" type="button"
                                                class="btn btn-rounded btn-outline-info text-right">Edit House</a>

                                                <a href="" type="button"
                                                class="btn btn-rounded btn-outline-danger">Delete House</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <!--**********************************
            Content body end
        ***********************************-->


</x-app-layout>
