<x-guest-layout>
    <div class="content-wrapper">

        <div class="breadcrumb-wrap bg-f br-2">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Listing</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('welcome')}}">Home </a></li>
                        <li>Listing</li>
                    </ul>
                </div>
            </div>
        </div>


        <section class="listing-wrap ptb-100">
            <div class="container">
                <div class="row align-items-center mb-25">
                    <div class="col-xl-9 col-lg-8 col-md-8">
                        <div class="profuct-result">
                            <p>{{$listings->count()}} Results Found</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4">
                        <div class="filter-item-cat">
                            <select>
                                <option value="1">Sort By Most Popular</option>
                                <option value="2">Sort By High To Low</option>
                                <option value="3">Sort By Low To High</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($listings as $listing)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="property-card style4">
                            <div class="property-img">
                                <img src="/storage/images/{{ $listing->image }}" alt="Image">
                                <span class="property-status">{{$listing->status}}</span>
                            </div>
                            <div class="property-info">
                                <h3><a href="{{ route('listing-details', $listing->id) }}">{{$listing->name}}</a></h3>
                                <p><i class="flaticon-location"></i>{{$listing->location}}t</p>
                                <ul class="property-metainfo list-style">
                                    <li><i class="flaticon-double-bed"></i>{{$listing->rooms}}</li>
                                    <li><i class="flaticon-bath-tub"></i>{{$listing->rooms}}</li>
                                    <li><i class="flaticon-square"></i>1300 sqft</li>
                                </ul>
                                <p class="property-price">${{$listing->price}}/<span>year</span></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
</x-guest-layout>
