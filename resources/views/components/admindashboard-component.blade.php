<div>
     <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="{{route('dashboard')}}" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-television"></i>
                            <span class="nav-text">Houses</span>
                        </a>
                        <ul aria-expanded="false">
							<li><a href="{{route('d_houses')}}">view Listed Houses</a></li>
							<li><a href="{{ route('add_houses') }}">List New Houses</a></li>
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{route('customers')}}" aria-expanded="false">
                        <i class="flaticon-381-internet"></i>
                        <span class="nav-text">Customers</span>
                    </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{route('reviews')}}" aria-expanded="false">
                        <i class="flaticon-381-controls-3"></i>
                        <span class="nav-text">Review</span>
                    </a>
                    </li>
                </ul>

                <div class="copyright">
                    <p><strong>Fela_Homes Dashboard</strong> ©All Rights Reserved</p>
                    <p>by DexignZone</p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
</div>
