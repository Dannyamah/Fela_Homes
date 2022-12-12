<x-guest-layout>


    <div class="content-wrapper">

        <div class="breadcrumb-wrap bg-f br-1">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Listing Details</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{ route('welcome') }}">Home </a></li>
                        <li><a href="{{ route('listings') }}">Property</a></li>
                        <li>Listing Details</li>
                    </ul>
                </div>
            </div>
        </div>


        <section class="property-details-wrap pt-100 pb-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="property-details">
                            <div class="row align-items-start">
                                <div class="col-md-8">
                                    <div class="property-title">
                                        <h2>{{ $listing->name }}</h2>
                                        <ul class="property-metainfo list-style">
                                            <li><i class="flaticon-location"></i>{{ $listing->location }}</li>
                                            <li><i class="flaticon-square"></i>1310 Sqft</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <p class="property-price">${{ $listing->price }} <span>/ year</span></p>
                                </div>
                            </div>
                            <div class="property-img">
                                <img src="/storage/images/{{ $listing->image }}" alt="Image">
                                <span class="property-status">{{ $listing->status }}</span>
                            </div>
                            <div class="property-desc">
                                <h4>Description</h4>
                                <p>Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada
                                    feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit
                                    nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor
                                    sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Curabitur
                                    arcu erat accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat accumsan
                                    id imperdiet et porttitor.</p>
                                <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin
                                    molestie malesuada. Nulla porttitor accumsan tincidunt. Praesent sapien massa,
                                    convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id
                                    imperdiet et, porttitor at sem. Curabitur non nulla sit amet nisl tempus convallis
                                    quis ac lectus. Proin eget tortor risus. Donec rutrum congue leo eget malesuada.
                                    Pellentesque in ipsum id orci porta dapibus.</p>
                            </div>
                            <div class="property-desc">
                                <h4>Property Details</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="property-features list-style">
                                            <li>Property ID : <span>{{ $listing->id }}</span></li>
                                            <li>Property Price : <span>${{ $listing->price }}</span></li>
                                            <li>Bath : <span>{{ $listing->rooms }}</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="property-features list-style">
                                            <li>Property Type : <span>{{ $listing->type }}</span></li>
                                            <li>Rooms : <span>{{ $listing->rooms }}</span></li>
                                            <li>Garages : <span>{{ $listing->rooms }}</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="property-features list-style">
                                            <li>Property Status : <span>For Rent</span></li>
                                            <li>Bedrooms ID : <span>10</span></li>
                                            <li>Year Built : <span>14/02/22</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="property-desc">
                                <h4>Floor Plans</h4>
                                <div class="floor-plan">
                                    <img src="/assets/img/property/floor-plan.png" alt="Image">
                                </div>
                            </div>
                            <div class="property-desc">
                                <h4>Property Features</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="property-annuties list-style">
                                            <li><i class="ri-checkbox-multiple-line"></i>Air Conditioned</li>
                                            <li><i class="ri-checkbox-multiple-line"></i>Swimming Pool</li>
                                            <li><i class="ri-checkbox-multiple-line"></i>Fitness Gym </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="property-annuties list-style">
                                            <li><i class="ri-checkbox-multiple-line"></i>Security Garage </li>
                                            <li><i class="ri-checkbox-multiple-line"></i>Window Coverings </li>
                                            <li><i class="ri-checkbox-multiple-line"></i>Laundry</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="property-annuties list-style">
                                            <li><i class="ri-checkbox-multiple-line"></i>Parking</li>
                                            <li><i class="ri-checkbox-multiple-line"></i>Fireplace</li>
                                            <li><i class="ri-checkbox-multiple-line"></i>Refrigerator</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="property-desc">
                                <h4>Property Video</h4>
                                <div class="property-video">
                                    <img src="/assets/img/property/single-property-2.jpg" alt="Image">
                                    <a class="play-video" data-fancybox=""
                                        href="https://www.youtube.com/watch?v=Qj59_LGUBvE">
                                        <span class="play-now icon"><i class="flaticon-play-1"></i>
                                            <span class="ripple"></span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="property-desc">
                                <h4>3 Reviews</h4>
                                <div class="property-review comment-item-wrap">
                                    <div class="comment-item">
                                        <div class="comment-author-img">
                                            <img src="/assets/img/clients/client-1.jpg" alt="mage">
                                        </div>
                                        <div class="comment-author-wrap">
                                            <div class="comment-author-info">
                                                <div class="row align-items-start">
                                                    <div
                                                        class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                                        <div class="comment-author-name">
                                                            <h5>Olivic Dsuza</h5>
                                                            <span class="comment-date">22/04/2022</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-2">
                                                        <ul class="ratings list-style">
                                                            <li><i class="ri-star-s-fill"></i></li>
                                                            <li><i class="ri-star-s-fill"></i></li>
                                                            <li><i class="ri-star-s-fill"></i></li>
                                                            <li><i class="ri-star-s-fill"></i></li>
                                                            <li><i class="ri-star-half-s-fill"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-3">
                                                        <div class="comment-text">
                                                            <p>Nulla porttitor accumsan tincidunt. Praesent sapien
                                                                massa, convallis a pellentesque nec, egestas non nisi.
                                                                Cras ultricies ligula sed magna dictum porta. Vestibulum
                                                                ante ipsum primis in faucibus orci luctus et ultrices
                                                                posuere cubilia Curae; Donec velit neque, auctor sit
                                                                amet aliquam vel.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item">
                                        <div class="comment-author-img">
                                            <img src="/assets/img/clients/client-2.jpg" alt="mage">
                                        </div>
                                        <div class="comment-author-wrap">
                                            <div class="comment-author-info">
                                                <div class="row align-items-start">
                                                    <div
                                                        class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                                        <div class="comment-author-name">
                                                            <h5>Josef Haris</h5>
                                                            <span class="comment-date">15/04/2022</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-2">
                                                        <ul class="ratings list-style">
                                                            <li><i class="ri-star-s-fill"></i></li>
                                                            <li><i class="ri-star-s-fill"></i></li>
                                                            <li><i class="ri-star-s-fill"></i></li>
                                                            <li><i class="ri-star-s-fill"></i></li>
                                                            <li><i class="ri-star-half-s-fill"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-3">
                                                        <div class="comment-text">
                                                            <p>Nulla porttitor accumsan tincidunt. Praesent sapien
                                                                massa, convallis a pellentesque nec, egestas non nisi.
                                                                Cras ultricies ligula sed magna dictum porta. Vestibulum
                                                                ante ipsum primis in faucibus orci luctus et ultrices
                                                                posuere cubilia Curae; Donec velit neque, auctor sit
                                                                amet aliquam vel.
                                                            </p>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="property-img mb-0 mt-25">
                                                                        <img src="/assets/img/property/property-1.jpg"
                                                                            alt="Image">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="property-img mb-0 mt-25">
                                                                        <img src="/assets/img/property/property-2.jpg"
                                                                            alt="Image">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item">
                                        <div class="comment-author-img">
                                            <img src="/assets/img/clients/client-3.jpg" alt="mage">
                                        </div>
                                        <div class="comment-author-wrap">
                                            <div class="comment-author-info">
                                                <div class="row align-items-start">
                                                    <div
                                                        class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                                        <div class="comment-author-name">
                                                            <h5>Boris jhonson</h5>
                                                            <span class="comment-date">27/03/2022</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-2">
                                                        <ul class="ratings list-style">
                                                            <li><i class="ri-star-s-fill"></i></li>
                                                            <li><i class="ri-star-s-fill"></i></li>
                                                            <li><i class="ri-star-s-fill"></i></li>
                                                            <li><i class="ri-star-s-fill"></i></li>
                                                            <li><i class="ri-star-half-s-fill"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-3">
                                                        <div class="comment-text">
                                                            <p>Nulla porttitor accumsan tincidunt. Praesent sapien
                                                                massa, convallis a pellentesque nec, egestas non nisi.
                                                                Cras ultricies ligula sed magna dictum porta. Vestibulum
                                                                ante ipsum primis in faucibus orci luctus et ultrices
                                                                posuere cubilia Curae; Donec velit neque, auctor sit
                                                                amet aliquam vel.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-desc">
                                <h4>Add Your Review</h4>
                                <form class="review-form" action="{{ route('add-review') }}" method="post"> @csrf
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <p>Your ratings for this property</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="display: none">
                                            <div class="form-group">
                                                <input type="text" name="user_id" value="{{ Auth::user()->id }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea id="msg" cols="30" rows="6" name="review" placeholder="Write A Review"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn style2">
                                                Submit Review
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="property-desc">
                                <h4>Similar Property</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="property-card style2">
                                            <div class="property-img-slider owl-carousel">
                                                <img src="/assets/img/property/property-10.jpg" alt="Image">
                                                <img src="/assets/img/property/property-1.jpg" alt="Image">
                                                <img src="/assets/img/property/property-11.jpg" alt="Image">
                                            </div>
                                            <div class="property-info">
                                                <div class="property-status-wrap">
                                                    <span class="property-status">For Rent</span>
                                                    <p class="property-price">$34,900/<span>month</span></p>
                                                </div>
                                                <h3><a href="listing-details.html">Villa In Luis Park</a></h3>
                                                <p><i class="flaticon-location"></i>64, 1st Aveneu, High Steet, USA</p>
                                                <ul class="property-metainfo list-style">
                                                    <li><i class="flaticon-double-bed"></i>06</li>
                                                    <li><i class="flaticon-bath-tub"></i>04</li>
                                                    <li><i class="flaticon-square"></i>3100 sqft</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="property-card style2">
                                            <div class="property-img-slider owl-carousel">
                                                <img src="/assets/img/property/property-2.jpg" alt="Image">
                                                <img src="/assets/img/property/property-7.jpg" alt="Image">
                                                <img src="/assets/img/property/property-8.jpg" alt="Image">
                                            </div>
                                            <div class="property-info">
                                                <div class="property-status-wrap">
                                                    <span class="property-status">For Sale</span>
                                                    <p class="property-price">$21,400</p>
                                                </div>
                                                <h3><a href="listing-details.html">Modern Apartment</a></h3>
                                                <p><i class="flaticon-location"></i>123/A, Miles Ave, North Steet, USA
                                                </p>
                                                <ul class="property-metainfo list-style">
                                                    <li><i class="flaticon-double-bed"></i>05</li>
                                                    <li><i class="flaticon-bath-tub"></i>03</li>
                                                    <li><i class="flaticon-square"></i>2500 sqft</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h4>Book This Apartment</h4>
                                <form action="#" class="filter-widget">
                                    <div class="form-group">
                                        <input type="text" placeholder="Full Name" style="visibility: hidden" value="{{ Auth::user()->id }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">House Name</label>
                                        <input type="text" placeholder="House" value="{{ $listing->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Your phone Number</label>
                                        <input type="number" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <select name="category" id="category">
                                            <option data-show="Family Members" value="0">Family Members</option>
                                            <option value="1">1</option>
                                            <option value="2">4</option>
                                            <option value="3">6</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="region" id="region">
                                            <option data-show="Children" value="0">Children</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="booking_msg" id="booking_msg" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn style2">Request Booking</button>
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar-widget">
                                <h4>Recent Properties</h4>
                                <div class="property-thumb-item">
                                    <div class="property-thumb-img">
                                        <img src="/assets/img/blog/post-thumb-1.jpg" alt="Image">
                                    </div>
                                    <div class="property-thumb-info">
                                        <h6><a href="listing-details.html">Luxury Villa In Rigo Park</a></h6>
                                        <p>$34,000 <span>/month</span></p>
                                    </div>
                                </div>
                                <div class="property-thumb-item">
                                    <div class="property-thumb-img">
                                        <img src="/assets/img/blog/post-thumb-2.jpg" alt="Image">
                                    </div>
                                    <div class="property-thumb-info">
                                        <h6><a href="listing-details.html">Apartment With 3 BHK</a></h6>
                                        <p>$21,000 <span>/month</span></p>
                                    </div>
                                </div>
                                <div class="property-thumb-item">
                                    <div class="property-thumb-img">
                                        <img src="/assets/img/blog/post-thumb-3.jpg" alt="Image">
                                    </div>
                                    <div class="property-thumb-info">
                                        <h6><a href="listing-details.html">Ready Flat For Rent</a></h6>
                                        <p>$14,000 <span>/month</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4>Agent Information</h4>
                                <div class="agent-info-box">
                                    <div class="agent-name-wrap">
                                        <div class="agent-img">
                                            <img src="/assets/img/clients/client-1.jpg" alt="Image">
                                        </div>
                                        <div class="agent-name">
                                            <h6><a href="agent-details.html">Jayden Gabrien</a></h6>
                                            <span>Senior Sales Manager</span>
                                        </div>
                                    </div>
                                    <ul class="agent-address list-style">
                                        <li><i class="ri-map-pin-line"></i>302 Ave PArk, New York</li>
                                        <li><i class="ri-phone-line"></i>+222 023 4563 123</li>
                                        <li><i class="ri-mail-send-line"></i><a
                                                href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="acc5c2cac3ecc6cdc5c8c9c282cfc3c1">[email&#160;protected]</a>
                                        </li>
                                    </ul>
                                    <form action="#" class="agent-contact">
                                        <div class="form-group">
                                            <input type="text" placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Your Message"></textarea>
                                        </div>
                                        <button class="btn style2">Submit Request</button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4>Popular Tags</h4>
                                <ul class="tag-list list-style">
                                    <li><a href="listings.html">Houses</a></li>
                                    <li><a href="listings.html">Rooms</a></li>
                                    <li><a href="listings.html">Garages</a></li>
                                    <li><a href="listings.html">Flat</a></li>
                                    <li><a href="listings.html">Modern</a></li>
                                    <li><a href="listings.html">Luxury</a></li>
                                    <li><a href="listings.html">Property</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

</x-guest-layout>
