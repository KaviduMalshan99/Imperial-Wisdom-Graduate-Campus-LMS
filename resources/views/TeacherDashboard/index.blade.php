
@include('TeacherDashboard.layout.sidebar')

@extends('TeacherDashboard.layout.sidebar')
@section('title', 'Ecommerce')

@section('css')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css') }}">
@endsection

@section('breadcrumb-title')
<h3>Online course</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Online course</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-xxl-5 col-ed-6 col-xl-8 box-col-7">
        <div class="row">
          <div class="col-sm-12">
            <div class="card o-hidden welcome-card">
              <div class="card-body">
                <h4 class="mb-3 mt-1 f-w-500 mb-0 f-22">Hello Jashmin<span> <img src="{{ asset('assets/images/dashboard-3/hand.svg') }}" alt="hand vector"></span></h4>
                <p>Learn something new every day with world's best courses.Free online courses available.</p>
              </div><img class="welcome-img" src="{{ asset('assets/images/dashboard-3/widget.svg') }}" alt="search image">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card course-box">
              <div class="card-body">
                <div class="course-widget">
                  <div class="course-icon">
                    <svg class="fill-icon">
                      <use href="{{ asset('assets/svg/icon-sprite.svg#course-1') }}"></use>
                    </svg>
                  </div>
                  <div>
                    <h4 class="mb-0">100+</h4><span class="f-light">Completed Courses</span><a class="btn btn-light f-light" href="{{ route('learning-list-view')}}">View course<span class="ms-2">
                        <svg class="fill-icon f-light">
                          <use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}"></use>
                        </svg></span></a>
                  </div>
                </div>
              </div>
              <ul class="square-group">
                <li class="square-1 warning"></li>
                <li class="square-1 primary"></li>
                <li class="square-2 warning1"></li>
                <li class="square-3 danger"></li>
                <li class="square-4 light"></li>
                <li class="square-5 warning"></li>
                <li class="square-6 success"></li>
                <li class="square-7 success"></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card course-box">
              <div class="card-body">
                <div class="course-widget">
                  <div class="course-icon warning">
                    <svg class="fill-icon">
                      <use href="{{ asset('assets/svg/icon-sprite.svg#course-2') }}"></use>
                    </svg>
                  </div>
                  <div>
                    <h4 class="mb-0">50+</h4><span class="f-light">In Progress Courses</span><a class="btn btn-light f-light" href="{{ route('learning-list-view')}}">View course<span class="ms-2">
                        <svg class="fill-icon f-light">
                          <use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}"></use>
                        </svg></span></a>
                  </div>
                </div>
              </div>
              <ul class="square-group">
                <li class="square-1 warning"></li>
                <li class="square-1 primary"></li>
                <li class="square-2 warning1"></li>
                <li class="square-3 danger"></li>
                <li class="square-4 light"></li>
                <li class="square-5 warning"></li>
                <li class="square-6 success"></li>
                <li class="square-7 success"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-2 col-ed-3 col-xl-4 col-sm-6 box-col-5">
        <div class="card get-card">
          <div class="card-header card-no-border">
            <h5>Today Progress</h5><span class="f-14 f-w-500 f-light">Your Daily Goal Almost Done!</span>
          </div>
          <div class="card-body pt-0">
            <div class="progress-chart-wrap">
              <div id="progresschart"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-ed-3 d-xxl-block d-sm-none box-col-none">
        <div class="card get-card overflow-hidden">
          <div class="card-header card-no-border">
            <h5>Do You Want to Get</h5><span class="f-14 f-w-500 f-light">Better Results?</span><a class="btn btn-primary btn-hover-effect" href="#">More details<span class="ms-1">
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}"></use>
                </svg></span></a>
          </div>
          <div class="card-body pt-0">
            <div class="get-image text-center"> <img class="img-fluid" src="{{ asset('assets/images/dashboard-3/better.png') }}" alt="leptop with men vector"></div>
          </div>
          <ul class="square-group">
            <li class="square-1 warning"></li>
            <li class="square-1 primary"></li>
            <li class="square-2 warning1"></li>
            <li class="square-3 danger"></li>
            <li class="square-4 light"></li>
            <li class="square-5 warning"></li>
            <li class="square-6 success"></li>
            <li class="square-7 success"></li>
          </ul>
        </div>
      </div>
      <div class="col-xxl-3 col-ed-5 col-xl-5 col-sm-6 box-col-5">
        <div class="card">
          <div class="card-body">
            <div class="default-datepicker">
              <div class="datepicker-here" data-language="en"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-5 col-ed-7 col-xl-7 box-col-7">
        <div class="card">
          <div class="card-header card-no-border">
            <div class="header-top">
              <h5 class="m-0">Learning Overview<span class="f-14 f-w-500 ms-1 f-light">(75% activity growth)</span></h5>
              <div class="card-header-right-icon">
                <div class="dropdown icon-dropdown">
                  <button class="btn dropdown-toggle" id="learningButton" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="learningButton"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="learning-wrap">
              <div id="learning-chart"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-ed-7 col-xl-7 col-md-6 box-col-7">
        <div class="card">
          <div class="card-header card-no-border">
            <div class="header-top">
              <h5>Activity Hours</h5>
              <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="activitydropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="activitydropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday </a></div>
              </div>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="row m-0 overall-card">
              <div class="col-xl-8">
                <div class="chart-right">
                  <div class="row">
                    <div class="col-xl-12">
                      <div class="card-body p-0">
                        <div class="activity-wrap">
                          <div id="activity-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 p-0">
                <div class="row g-sm-3 g-2 mt-0">
                  <div class="col-xl-12 col-md-6 col-sm-4">
                    <div class="light-card balance-card">
                      <div> <span class="f-light">Time Spent</span>
                        <h6 class="mt-1 mb-0">30<span class="badge badge-light-success rounded-pill ms-1">140%</span></h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 col-sm-4">
                    <div class="light-card balance-card">
                      <div> <span class="f-light">Lessons taken</span>
                        <h6 class="mt-1 mb-0">45<span class="badge badge-light-success rounded-pill ms-1">86%</span></h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 col-sm-4">
                    <div class="light-card balance-card">
                      <div> <span class="f-light">Exams passed</span>
                        <h6 class="mt-1 mb-0">12<span class="badge badge-light-success rounded-pill ms-1">120%</span></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-ed-5 col-xl-5 col-md-6 box-col-5">
        <div class="card">
          <div class="card-header card-no-border">
            <div class="header-top">
              <h5>Upcoming Events</h5>
              <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="upcomingdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="upcomingdropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday </a></div>
              </div>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="upcoming-event-wrap">
              <div id="upcomingchart"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-5 col-ed-12 box-col-12">
        <div class="card course-card">
          <div class="card-header card-no-border">
            <div class="header-top">
              <h5 class="m-0">My Course</h5>
              <div class="card-header-right-icon">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" id="popularButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">Most Popular</button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularButton"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="course-main-card">
              <div class="course-wrapper">
                <div class="course-icon-box">
                  <div class="icon-wrap"><img src="{{ asset('assets/images/dashboard-3/course/1.svg') }}" alt="clock vector"></div><img class="arrow-bg" src="{{ asset('assets/images/dashboard-3/course/back-arrow/1.png') }}" alt="sqaure border arrow">
                </div>
                <h6 class="f-14">Management</h6>
              </div>
              <div class="course-wrapper">
                <div class="course-icon-box">
                  <div class="icon-wrap"><img src="{{ asset('assets/images/dashboard-3/course/2.svg') }}" alt="web development vector"></div><img class="arrow-bg" src="{{ asset('assets/images/dashboard-3/course/back-arrow/2.png') }}" alt="sqaure border arrow">
                </div>
                <h6 class="f-14">Web Devlopment</h6>
              </div>
              <div class="course-wrapper">
                <div class="course-icon-box">
                  <div class="icon-wrap"><img src="{{ asset('assets/images/dashboard-3/course/3.svg') }}" alt="business vector"></div><img class="arrow-bg" src="{{ asset('assets/images/dashboard-3/course/back-arrow/1.png') }}" alt="sqaure border arrow">
                </div>
                <h6 class="f-14">Business Analytics</h6>
              </div>
              <div class="course-wrapper">
                <div class="course-icon-box">
                  <div class="icon-wrap"><img src="{{ asset('assets/images/dashboard-3/course/4.svg') }}" alt="marketing vector"></div><img class="arrow-bg" src="{{ asset('assets/images/dashboard-3/course/back-arrow/3.png') }}" alt="sqaure border arrow">
                </div>
                <h6 class="f-14">Marketing</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-ed-6 col-md-7 box-col-7">
        <div class="card schedule-card">
          <div class="card-header card-no-border">
            <div class="header-top">
              <h5 class="m-0">Upcoming Schedule</h5>
              <div class="card-header-right-icon"><a class="btn badge-light-primary" href="#">+ Create</a></div>
            </div>
          </div>
          <div class="card-body pt-0">
            <ul class="schedule-list">
              <li class="primary"><img src="{{ asset('assets/images/dashboard/user/4.jpg') }}" alt="profile">
                <div>
                  <h6 class="mb-1">Web Design</h6>
                  <ul>
                    <li class="f-light">
                      <svg class="fill-icon f-light">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#bag') }}"></use>
                      </svg><span>January 3, 2022</span>
                    </li>
                    <li class="f-light">
                      <svg class="fill-icon f-success">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}"></use>
                      </svg><span> 09.00 - 12.00 AM</span>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="warning"><img src="{{ asset('assets/images/dashboard/user/2.jpg') }}" alt="profile">
                <div>
                  <h6 class="mb-1">UI/UX Design</h6>
                  <ul>
                    <li class="f-light">
                      <svg class="fill-icon f-light">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#bag') }}"></use>
                      </svg><span>Febuary 10, 2022</span>
                    </li>
                    <li class="f-light">
                      <svg class="fill-icon f-success">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}"></use>
                      </svg><span> 11.00 - 1.00 PM</span>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-ed-6 col-md-5 col-sm-6 box-col-5">
        <div class="card">
          <div class="card-header card-no-border">
            <div class="header-top">
              <h5 class="m-0">Active Lessons</h5>
              <div class="card-header-right-icon"><a class="link-only" href="#">View <i data-feather="arrow-right"></i></a></div>
            </div>
          </div>
          <div class="card-body pt-0">
            <ul class="lessons-lists">
              <li> <img src="{{ asset('assets/images/dashboard-3/lessons/1.png') }}" alt="ux icon">
                <div>
                  <h6 class="f-14 f-w-400 mb-0">UI/UX </h6><span class="f-light">Web design</span>
                </div>
                <div class="lesson-wrap ms-auto">
                  <div id="lessonChart1"> </div>
                </div>
              </li>
              <li> <img src="{{ asset('assets/images/dashboard-3/lessons/2.png') }}" alt="vue icon">
                <div>
                  <h6 class="f-14 f-w-400 mb-0">Vue 3</h6><span class="f-light">JS Framework</span>
                </div>
                <div class="lesson-wrap ms-auto">
                  <div id="lessonChart2"></div>
                </div>
              </li>
              <li> <img src="{{ asset('assets/images/dashboard-3/lessons/3.png') }}" alt="bootstrap icon">
                <div>
                  <h6 class="f-14 f-w-400 mb-0">Bootstrap 5</h6><span class="f-light">Framework</span>
                </div>
                <div class="lesson-wrap ms-auto">
                  <div id="lessonChart3"></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_3.js') }}"></script>
@endsection

