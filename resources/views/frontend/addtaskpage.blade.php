@extends('dashboard.master')
@section('custom_style')
<style>

</style>
@endsection
@section('body_section')

<!-- Wrapper -->
<div id="wrapper">
<!-- Dashboard Container -->
<div class="dashboard-container">
	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">
				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">
						<ul data-submenu-title="Start">
							<li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="dashboard-messages.html"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
							<li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
							<li><a href="dashboard-reviews.html"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
						</ul>
						<ul data-submenu-title="Organize and Manage">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>
								<ul>
									<li><a href="dashboard-manage-jobs.html">Manage Jobs <span class="nav-tag">3</span></a></li>
									<li><a href="dashboard-manage-candidates.html">Manage Candidates</a></li>
									<li><a href="{{route("job-post.create")}}">Post a Job</a></li>
								</ul>
							</li>
							<li class="active-submenu"><a href="#"><i class="icon-material-outline-assignment"></i> Tasks</a>
								<ul>
									<li><a href="dashboard-manage-tasks.html">Manage Tasks <span class="nav-tag">2</span></a></li>
									<li><a href="dashboard-manage-bidders.html">Manage Bidders</a></li>
									<li><a href="dashboard-my-active-bids.html">My Active Bids <span class="nav-tag">4</span></a></li>
									<li><a href="dashboard-post-a-task.html">Post a Task</a></li>
								</ul>
							</li>
						</ul>
						<ul data-submenu-title="Account">
							<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
					</div>
				</div>
				<!-- Navigation / End -->
			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->

	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Post a Task</h3>
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Post a Task</li>
					</ul>
				</nav>
			</div>
			<!-- Row -->
			<div class="row">
        {!! Form::open(['url' => route('task-post.store'),'files'=> true]) !!}
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">
						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> Task Submission Form</h3>
						</div>
						<div class="content with-padding padding-bottom-10">
							<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Project Name</h5>
										{{-- <input type="text" class="with-border" placeholder="e.g. build me a website"> --}}
                    {!!Form::text("project_name", "", [ "class" => "with-border"],["placeholder" => 'e.g. build me a website']);!!}
									</div>
								</div>
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Category</h5>
										<select class="selectpicker with-border" data-size="7" title="Select Category">
											<option>Admin Support</option>
											<option>Customer Service</option>
											<option>Data Analytics</option>
											<option>Design & Creative</option>
											<option>Legal</option>
											<option>Software Developing</option>
											<option>IT & Networking</option>
											<option>Writing</option>
											<option>Translation</option>
											<option>Sales & Marketing</option>
										</select>
									</div>
								</div>
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Location  <i class="help-icon" data-tippy-placement="right" title="Leave blank if it's an online job"></i></h5>
										<div class="input-with-icon">
											<div id="autocomplete-container">
												{{-- <input id="autocomplete-input" class="with-border" type="text" placeholder="Anywhere"> --}}
                        {!!Form::text("location", "", ['class' => 'with-border'], ['id' => 'autocomplete-input'], ["placeholder" => 'Type Address']);!!}
											</div>
											<i class="icon-material-outline-location-on"></i>
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>What is your estimated budget?</h5>
										<div class="row">
											<div class="col-xl-6">
												<div class="input-with-icon">
                          {!!Form::number('min_budget', "", ['class' => 'with-border'], ["placeholder" => 'Min']);!!}
													{{-- <input class="with-border" type="text" placeholder="Minimum"> --}}
													<i class="currency">USD</i>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="input-with-icon">
                          {!!Form::number('max_budget', "", ['class' => 'with-border'], ["placeholder" => 'Max']);!!}
													{{-- <input class="with-border" type="text" placeholder="Maximum"> --}}
													<i class="currency">USD</i>
												</div>
											</div>
										</div>
										<div class="feedback-yes-no margin-top-0">
											<div class="radio">
												<input id="radio-1" name="radio" type="radio" checked>
												<label for="radio-1"><span class="radio-label"></span> Fixed Price Project</label>
											</div>
											<div class="radio">
												<input id="radio-2" name="radio" type="radio">
												<label for="radio-2"><span class="radio-label"></span> Hourly Project</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>What skills are required? <i class="help-icon" data-tippy-placement="right" title="Up to 5 skills that best describe your project"></i></h5>
										<div class="keywords-container">
											<div class="keyword-input-container">
                        {!!Form::text('skills', "", ['class' => 'keyword-input with-border'], ["placeholder" => 'Add Skills']);!!}
												{{-- <input type="text" class="keyword-input with-border" placeholder="Add Skills"/> --}}
												<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
											</div>
											<div class="keywords-list"><!-- keywords go here --></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Describe Your Project</h5>
										{{-- <textarea cols="30" rows="5" class="with-border"></textarea> --}}
                    {!!Form::textarea("project_description", "", [ "class" => "with-border", 'cols'=>"30", 'rows'=>"5"]);!!}
										{{-- <div class="uploadButton margin-top-30">
											<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
											<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
											<span class="uploadButton-file-name">Images or documents that might be helpful in describing your project</span>
										</div> --}}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
          {!!Form::submit('Post a Task', ["class" => "button ripple-effect big margin-top-30"]);!!}
					{{-- <a href="#" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Post a Task</a> --}}
				</div>
			</div>
      {!! Form::close() !!}
			<!-- Row / End -->
		</div>
	</div>
	<!-- Dashboard Content / End -->
</div>
<!-- Dashboard Container / End -->
</div>
<!-- Wrapper / End -->
@endsection
@section('custom_script')
<script>

</script>
@endsection
