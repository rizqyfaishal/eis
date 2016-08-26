@extends('layout/master')

@section('title')

    Login Page

@endsection

@section('content')
    <div class="row whole-content">
        <div class="col-lg-offset-1 col-lg-4">
            <form>
                <h3 class="text-center">Login</h3>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="to-who">Email</label>
                            <input class="form-control" placeholder="Email" name="to-who" type="text" id="to-who">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="subject">Password</label>
                            <input class="form-control" placeholder="subject" name="subject" type="password" value="" id="subject">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i> login
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="col-lg-offset-1 col-lg-4">
            <form>
                <h3 class="text-center">Register</h3>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="fname">First Name</label>
                            <input class="form-control" placeholder="First Name" name="fname" type="text" id="fname">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="lname">Last Name</label>
                            <input class="form-control" placeholder="Last Name" name="lname" type="text" value="" id="lname">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="content">Role :</label>
                            <select class="form-control">
                                <option>Current Student</option>
                                <option>Future Student</option>
                                <option>Alumni</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="lname">Student ID Number</label>
                            <input class="form-control" placeholder="Last Name" name="lname" type="text" value="" id="lname">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="lname">Major</label>
                            <input class="form-control" placeholder="Last Name" name="lname" type="text" value="" id="lname">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="lname">Batch</label>
                            <input class="form-control" placeholder="Last Name" name="lname" type="text" value="" id="lname">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="lname">Email</label>
                            <input class="form-control" placeholder="Last Name" name="lname" type="text" value="" id="lname">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="lname">Phone Number</label>
                            <input class="form-control" placeholder="Last Name" name="lname" type="text" value="" id="lname">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> I agree to the terms and condition
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i> register
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection