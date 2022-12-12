<x-app-layout>

     <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->

			<div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Email</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Inbox</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-box ml-0 ml-sm-4 ml-sm-0">
                                    <div role="toolbar" class="toolbar ml-1 ml-sm-0">
                                    </div>
                                    <div class="email-list mt-3">
                                        <div class="message">
                                            <div>
                                                <a href="{{ route('read_message') }}" class="col-mail col-mail-7">
                                                    <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- panel -->
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
