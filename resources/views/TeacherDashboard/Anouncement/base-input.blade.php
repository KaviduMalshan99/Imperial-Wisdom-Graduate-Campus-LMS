@extends('TeacherDashboard.layout.sidebar')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

{{-- @section('breadcrumb-title')
    <h3>Base Inputs</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Form Controls</li>
    <li class="breadcrumb-item active">Base Inputs</li>
@endsection --}}

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Create Announcment</h5>
                    </div>
                    <form action="{{ route('announcement.store') }}" method="POST" class="form theme-form">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Announcment</label>
                                        <input class="form-control" id="exampleFormControlInput1" type="text" name="announcement"
                                            placeholder="Enter the Announcment">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect9">Select Name of the Cource</label>
                                        <select class="form-select digits" id="exampleFormControlSelect9" name="course_id">
                                            <option>--Select Name of the Cource--</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect9">Select Name of the Lecture</label>
                                        <select class="form-select digits" id="exampleFormControlSelect9" name="lecture_id">
                                            <option>--Select Name of the Lecture--</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect9">Select Announcement target audience</label>
                                        <select class="form-select digits" id="exampleFormControlSelect9" name="target_audience">
                                            <option>-- Select method you want--</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div>
                                        <label class="form-label" for="exampleFormControlTextarea4">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea4" name="message" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <input class="btn btn-light" type="reset" value="Cancel">
                        </div>
                    </form>
                    <div class="card-header">
                        <h5>Create Announcment</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr class="border-bottom-primary">
                              <th scope="col">Id</th>
                              <th scope="col">Announcment</th>
                              <th scope="col">Cource</th>
                              <th scope="col">Message</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($announcements as $announcement)
                            <tr class="border-bottom-secondary">
                              <td>{{ $loop->iteration }}</td>
                              <td> {{ $announcements->announcement }}</td>
                              <td> {{ $announcements->course_id }}</td>
                              <td> {{ $announcements->message }}</td>
                              <td>Wolfe</td>
                              <td>RamJacob@twitter</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
