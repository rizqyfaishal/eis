@extends('layout/master')

@section('title')

    Login Page

@endsection

@section('content')
    <div class="login" ng-app="app">
        <div class="login-content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    @if(\Illuminate\Support\Facades\Session::has('login_message'))
                        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 2em;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <strong>Warning!</strong>{{ \Illuminate\Support\Facades\Session::get('login_message') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="login-section">
                        <div class="login-tabs">
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#login" class="orange" aria-controls="home" role="tab" data-toggle="tab">
                                        <i class="fa fa-sign-in">&nbsp;</i> Login
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#register" class="blue" aria-controls="profile" role="tab"
                                       data-toggle="tab">
                                        <i class="fa fa-user-plus">&nbsp;</i> Register
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane orange active" id="login">
                                    <div class="row">
                                        <div class="col-lg-8 col-lg-offset-2">
                                            <form class="auth-form"
                                                  action="{{ action('Auth\AuthController@postLogin') }}"
                                                  accept-charset="UTF-8" method="post">
                                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-envelope-o">&nbsp;</i>Email</span>
                                                        <input type="email" name="email" id="email"
                                                               class="form-control form-custom" placeholder="Email"/>
                                                    </div>
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-key">&nbsp;</i>Password</span>
                                                        <input type="password" name="password" id="password"
                                                               class="form-control form-custom" placeholder="Password"/>
                                                    </div>
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-lg-offset-3">
                                                            <input type="submit" name="commit" value="Masuk"
                                                                   class="btn btn-custom btn-block btn-lg"
                                                                   data-disable-with="Masuk"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane blue" id="register">
                                    <div class="row">
                                        <div class="col-lg-8 col-lg-offset-2">
                                            <div class="form-group select-category-area">
                                                <label for="register-category">Register Sebagai</label>
                                                <select name="register-category" id="register-category"
                                                        ng-init="registerCategory = 'Alumni'"
                                                        ng-model="registerCategory"
                                                        class="form-control">
                                                    <option value="Alumni" selected>Alumni</option>
                                                    <option value="Student">Current Student</option>
                                                    <option value="Future Student">Future Student</option>
                                                </select>
                                            </div>
                                            <form class="auth-form" ng-show="registerCategory == 'Alumni'"
                                                  action="{{ action('AlumniController@reg') }}"
                                                  name="alumniForm"
                                                  novalidate
                                                  accept-charset="UTF-8" method="post">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="form-group" ng-class="{
                                                                'has-error' : alumniForm.fname.$invalid && (alumniForm.fname.$touched || alumniForm.fname.$dirty ),
                                                                'has-success' : alumniForm.fname.$valid && (alumniForm.fname.$touched || alumniForm.fname.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-user">&nbsp;</i>First Name</span>
                                                        <input type="text" name="fname" id="fname"
                                                               ng-model="alumni.fname"
                                                               ng-minlength="3"
                                                               ng-maxlength="70"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="First Name"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.fname.$invalid && alumniForm.fname.$touched && alumniForm.fname.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.fname.$invalid && alumniForm.fname.$touched && alumniForm.fname.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.fname.$invalid && alumniForm.fname.$touched && alumniForm.fname.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : alumniForm.lname.$invalid && (alumniForm.lname.$touched || alumniForm.lname.$dirty ),
                                                                'has-success' : alumniForm.lname.$valid && (alumniForm.lname.$touched || alumniForm.lname.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-user-secret">&nbsp;</i>Last Name</span>
                                                        <input type="text" name="lname" id="lname"
                                                               ng-model="alumni.lname"
                                                               ng-minlength="3"
                                                               ng-maxlength="255"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="Last Name"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.lname.$invalid && alumniForm.lname.$touched && alumniForm.lname.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.lname.$invalid && alumniForm.lname.$touched && alumniForm.lname.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.lname.$invalid && alumniForm.lname.$touched && alumniForm.lname.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : alumniForm.email.$invalid && (alumniForm.email.$touched || alumniForm.email.$dirty ),
                                                                'has-success' : alumniForm.email.$valid && (alumniForm.email.$touched || alumniForm.email.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-envelope-o">&nbsp;</i>Email</span>
                                                        <input type="email" name="email" id="email"
                                                               ng-model="alumni.email"
                                                               ng-minlength="3"
                                                               ng-maxlength="255"
                                                               unique="true"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="Email"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.email.$invalid && alumniForm.email.$touched && alumniForm.email.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.email.$invalid && alumniForm.email.$touched && alumniForm.email.$error.unique">
                                                        <strong>Email Telah terpakai</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.email.$invalid && alumniForm.email.$touched && alumniForm.email.$error.email">
                                                        <strong>Format email tidak valid</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.email.$invalid && alumniForm.email.$touched && alumniForm.email.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.email.$invalid && alumniForm.email.$touched && alumniForm.email.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : alumniForm.phone.$invalid && (alumniForm.phone.$touched || alumniForm.phone.$dirty ),
                                                                'has-success' : alumniForm.phone.$valid && (alumniForm.phone.$touched || alumniForm.phone.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-phone">&nbsp;</i>Phone</span>
                                                        <input type="text" name="phone" id="phone"
                                                               ng-model="alumni.phone"
                                                               ng-minlength="7"
                                                               ng-maxlength="15"
                                                               ng-required="true"
                                                               ng-pattern="/^[0-9\-\+]{9,15}$/"
                                                               class="form-control form-custom" placeholder="Phone"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.phone.$invalid && alumniForm.phone.$touched && alumniForm.phone.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.phone.$invalid && alumniForm.phone.$touched && alumniForm.phone.$error.pattern">
                                                        <strong>Format Nomor Telepon tidak valid</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.phone.$invalid && alumniForm.phone.$touched && alumniForm.phone.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.phone.$invalid && alumniForm.phone.$touched && alumniForm.phone.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : alumniForm.major.$invalid && (alumniForm.major.$touched || alumniForm.major.$dirty ),
                                                                'has-success' : alumniForm.major.$valid && (alumniForm.major.$touched || alumniForm.major.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-apple">&nbsp;</i>Jurusan</span>
                                                        <input type="text" name="major" id="major"
                                                               ng-model="alumni.major"
                                                               ng-minlength="3"
                                                               ng-maxlength="255"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="Jurusan"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.major.$invalid && alumniForm.major.$touched && alumniForm.major.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.major.$invalid && alumniForm.major.$touched && alumniForm.major.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.major.$invalid && alumniForm.major.$touched && alumniForm.major.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : alumniForm.batch.$invalid && (alumniForm.batch.$touched || alumniForm.batch.$dirty ),
                                                                'has-success' : alumniForm.batch.$valid && (alumniForm.batch.$touched || alumniForm.batch.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-institution">&nbsp;</i>Batch</span>
                                                        <input type="text" name="batch" id="batch"
                                                               ng-model="alumni.batch"
                                                               ng-minlength="3"
                                                               ng-maxlength="255"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="Batch"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.batch.$invalid && alumniForm.batch.$touched && alumniForm.batch.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.batch.$invalid && alumniForm.batch.$touched && alumniForm.batch.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.batch.$invalid && alumniForm.batch.$touched && alumniForm.batch.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : alumniForm.password.$invalid && (alumniForm.password.$touched || alumniForm.password.$dirty ),
                                                                'has-success' : alumniForm.password.$valid && (alumniForm.password.$touched || alumniForm.password.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-key">&nbsp;</i>Password</span>
                                                        <input type="password" name="password" id="password"
                                                               ng-model="alumni.password"
                                                               ng-required="true"
                                                               ng-minlength="3"
                                                               ng-maxlength="70"
                                                               class="form-control form-custom" placeholder="Password"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.password.$invalid && alumniForm.password.$touched && alumniForm.password.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.password.$invalid && alumniForm.password.$touched && alumniForm.password.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.password.$invalid && alumniForm.password.$touched && alumniForm.password.$error.maxlength">
                                                        <strong>Too Long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : alumniForm.password_confirmation.$invalid && (alumniForm.password_confirmation.$touched || alumniForm.password_confirmation.$dirty ),
                                                                'has-success' : alumniForm.password_confirmation.$valid && (alumniForm.password_confirmation.$touched || alumniForm.password_confirmation.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-key">&nbsp;</i>Ulangi Password</span>
                                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                                               ng-model="alumni.password_confirmation"
                                                               compare-to="alumni.password"
                                                               ng-required="true"
                                                               ng-minlength="3"
                                                               ng-maxlength="70"
                                                               class="form-control form-custom" placeholder="Ulangi Password"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.password_confirmation.$invalid && alumniForm.password_confirmation.$touched && alumniForm.password_confirmation.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.password_confirmation.$invalid && alumniForm.password_confirmation.$touched && alumniForm.password_confirmation.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.password_confirmation.$invalid && alumniForm.password_confirmation.$touched && alumniForm.password_confirmation.$error.maxlength">
                                                        <strong>Too Long</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="alumniForm.password_confirmation.$invalid && alumniForm.password_confirmation.$touched && alumniForm.password_confirmation.$error.compareTo">
                                                        <strong>Password Tidak Match</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-lg-offset-3">
                                                            <input type="submit" name="commit" value="Daftar"
                                                                   ng-disabled="alumniForm.$invalid"
                                                                   class="btn btn-custom btn-block btn-lg"
                                                                   data-disable-with="Masuk"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <form class="auth-form" ng-show="registerCategory == 'Future Student'"
                                                  action="{{ action('FutureStudentController@reg') }}"
                                                  name="fStudentForm"
                                                  novalidate
                                                  accept-charset="UTF-8" method="post">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="form-group" ng-class="{
                                                                'has-error' : fStudentForm.fname.$invalid && (fStudentForm.fname.$touched || fStudentForm.fname.$dirty ),
                                                                'has-success' : fStudentForm.fname.$valid && (fStudentForm.fname.$touched || fStudentForm.fname.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-user">&nbsp;</i>First Name</span>
                                                        <input type="text" name="fname" id="fname"
                                                               ng-model="fStudent.fname"
                                                               ng-minlength="3"
                                                               ng-maxlength="70"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="First Name"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.fname.$invalid && fStudentForm.fname.$touched && fStudentForm.fname.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.fname.$invalid && fStudentForm.fname.$touched && fStudentForm.fname.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.fname.$invalid && fStudentForm.fname.$touched && fStudentForm.fname.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : fStudentForm.lname.$invalid && (fStudentForm.lname.$touched || fStudentForm.lname.$dirty ),
                                                                'has-success' : fStudentForm.lname.$valid && (fStudentForm.lname.$touched || fStudentForm.lname.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-user-secret">&nbsp;</i>Last Name</span>
                                                        <input type="text" name="lname" id="lname"
                                                               ng-model="fStudent.lname"
                                                               ng-minlength="3"
                                                               ng-maxlength="255"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="Last Name"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.lname.$invalid && fStudentForm.lname.$touched && fStudentForm.lname.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.lname.$invalid && fStudentForm.lname.$touched && fStudentForm.lname.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.lname.$invalid && fStudentForm.lname.$touched && fStudentForm.lname.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : fStudentForm.email.$invalid && (fStudentForm.email.$touched || fStudentForm.email.$dirty ),
                                                                'has-success' : fStudentForm.email.$valid && (fStudentForm.email.$touched || fStudentForm.email.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-envelope-o">&nbsp;</i>Email</span>
                                                        <input type="email" name="email" id="email"
                                                               ng-model="fStudent.email"
                                                               ng-minlength="3"
                                                               ng-maxlength="255"
                                                               unique="true"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="Email"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.email.$invalid && fStudentForm.email.$touched && fStudentForm.email.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.email.$invalid && fStudentForm.email.$touched && fStudentForm.email.$error.unique">
                                                        <strong>Email Telah terpakai</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.email.$invalid && fStudentForm.email.$touched && fStudentForm.email.$error.email">
                                                        <strong>Format email tidak valid</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.email.$invalid && fStudentForm.email.$touched && fStudentForm.email.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.email.$invalid && fStudentForm.email.$touched && fStudentForm.email.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : fStudentForm.phone.$invalid && (fStudentForm.phone.$touched || fStudentForm.phone.$dirty ),
                                                                'has-success' : fStudentForm.phone.$valid && (fStudentForm.phone.$touched || fStudentForm.phone.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-phone">&nbsp;</i>Phone</span>
                                                        <input type="text" name="phone" id="phone"
                                                               ng-model="fStudent.phone"
                                                               ng-minlength="7"
                                                               ng-maxlength="15"
                                                               ng-required="true"
                                                               ng-pattern="/^[0-9\-\+]{9,15}$/"
                                                               class="form-control form-custom" placeholder="Phone"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.phone.$invalid && fStudentForm.phone.$touched && fStudentForm.phone.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.phone.$invalid && fStudentForm.phone.$touched && fStudentForm.phone.$error.pattern">
                                                        <strong>Format Nomor Telepon tidak valid</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.phone.$invalid && fStudentForm.phone.$touched && fStudentForm.phone.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.phone.$invalid && fStudentForm.phone.$touched && fStudentForm.phone.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : fStudentForm.school.$invalid && (fStudentForm.school.$touched || fStudentForm.school.$dirty ),
                                                                'has-success' : fStudentForm.school.$valid && (fStudentForm.school.$touched || fStudentForm.school.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-book">&nbsp;</i>School</span>
                                                        <input type="text" name="school" id="school"
                                                               ng-model="fStudent.major"
                                                               ng-minlength="7"
                                                               ng-maxlength="255"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="School"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.school.$invalid && fStudentForm.school.$touched && fStudentForm.school.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.school.$invalid && fStudentForm.school.$touched && fStudentForm.school.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.school.$invalid && fStudentForm.school.$touched && fStudentForm.school.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : fStudentForm.student_number.$invalid && (fStudentForm.student_number.$touched || fStudentForm.student_number.$dirty ),
                                                                'has-success' : fStudentForm.student_number.$valid && (fStudentForm.student_number.$touched || fStudentForm.student_number.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-institution">&nbsp;</i>NISN</span>
                                                        <input type="text" name="student_number" id="student_number"
                                                               ng-model="fStudent.student_number"
                                                               ng-minlength="3"
                                                               ng-maxlength="255"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="NISN"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.student_number.$invalid && fStudentForm.student_number.$touched && fStudentForm.student_number.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.student_number.$invalid && fStudentForm.student_number.$touched && fStudentForm.student_number.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.student_number.$invalid && fStudentForm.student_number.$touched && fStudentForm.student_number.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : fStudentForm.password.$invalid && (fStudentForm.password.$touched || fStudentForm.password.$dirty ),
                                                                'has-success' : fStudentForm.password.$valid && (fStudentForm.password.$touched || fStudentForm.password.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-key">&nbsp;</i>Password</span>
                                                        <input type="password" name="password" id="password"
                                                               ng-model="fStudent.password"
                                                               ng-required="true"
                                                               ng-minlength="3"
                                                               ng-maxlength="70"
                                                               class="form-control form-custom" placeholder="Password"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.password.$invalid && fStudentForm.password.$touched && fStudentForm.password.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.password.$invalid && fStudentForm.password.$touched && fStudentForm.password.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.password.$invalid && fStudentForm.password.$touched && fStudentForm.password.$error.maxlength">
                                                        <strong>Too Long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : fStudentForm.password_confirmation.$invalid && (fStudentForm.password_confirmation.$touched || fStudentForm.password_confirmation.$dirty ),
                                                                'has-success' : fStudentForm.password_confirmation.$valid && (fStudentForm.password_confirmation.$touched || fStudentForm.password_confirmation.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-key">&nbsp;</i>Ulangi Password</span>
                                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                                               ng-model="fStudent.password_confirmation"
                                                               compare-to="fStudent.password"
                                                               ng-required="true"
                                                               ng-minlength="3"
                                                               ng-maxlength="70"
                                                               class="form-control form-custom" placeholder="Ulangi Password"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.password_confirmation.$invalid && fStudentForm.password_confirmation.$touched && fStudentForm.password_confirmation.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.password_confirmation.$invalid && fStudentForm.password_confirmation.$touched && fStudentForm.password_confirmation.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.password_confirmation.$invalid && fStudentForm.password_confirmation.$touched && fStudentForm.password_confirmation.$error.maxlength">
                                                        <strong>Too Long</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="fStudentForm.password_confirmation.$invalid && fStudentForm.password_confirmation.$touched && fStudentForm.password_confirmation.$error.compareTo">
                                                        <strong>Password Tidak Match</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-lg-offset-3">
                                                            <input type="submit" name="commit" value="Daftar"
                                                                   ng-disabled="fStudentForm.$invalid"
                                                                   class="btn btn-custom btn-block btn-lg"
                                                                   data-disable-with="Masuk"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <form class="auth-form" ng-show="registerCategory == 'Student'"
                                                  action="{{ action('StudentController@reg') }}"
                                                  name="studentForm"
                                                  novalidate
                                                  accept-charset="UTF-8" method="post">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="form-group" ng-class="{
                                                                'has-error' : studentForm.fname.$invalid && (studentForm.fname.$touched || studentForm.fname.$dirty ),
                                                                'has-success' : studentForm.fname.$valid && (studentForm.fname.$touched || studentForm.fname.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-user">&nbsp;</i>First Name</span>
                                                        <input type="text" name="fname" id="fname"
                                                               ng-model="student.fname"
                                                               ng-minlength="3"
                                                               ng-maxlength="70"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="First Name"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="studentForm.fname.$invalid && studentForm.fname.$touched && studentForm.fname.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.fname.$invalid && studentForm.fname.$touched && studentForm.fname.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.fname.$invalid && studentForm.fname.$touched && studentForm.fname.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : studentForm.lname.$invalid && (studentForm.lname.$touched || studentForm.lname.$dirty ),
                                                                'has-success' : studentForm.lname.$valid && (studentForm.lname.$touched || studentForm.lname.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-user-secret">&nbsp;</i>Last Name</span>
                                                        <input type="text" name="lname" id="lname"
                                                               ng-model="student.lname"
                                                               ng-minlength="3"
                                                               ng-maxlength="255"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="Last Name"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="studentForm.lname.$invalid && studentForm.lname.$touched && studentForm.lname.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.lname.$invalid && studentForm.lname.$touched && studentForm.lname.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.lname.$invalid && studentForm.lname.$touched && studentForm.lname.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : studentForm.email.$invalid && (studentForm.email.$touched || studentForm.email.$dirty ),
                                                                'has-success' : studentForm.email.$valid && (studentForm.email.$touched || studentForm.email.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-envelope-o">&nbsp;</i>Email</span>
                                                        <input type="email" name="email" id="email"
                                                               ng-model="student.email"
                                                               ng-minlength="3"
                                                               ng-maxlength="255"
                                                               unique="true"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="Email"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="studentForm.email.$invalid && studentForm.email.$touched && studentForm.email.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.email.$invalid && studentForm.email.$touched && studentForm.email.$error.unique">
                                                        <strong>Email Telah terpakai</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.email.$invalid && studentForm.email.$touched && studentForm.email.$error.email">
                                                        <strong>Format email tidak valid</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.email.$invalid && studentForm.email.$touched && studentForm.email.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.email.$invalid && studentForm.email.$touched && studentForm.email.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : studentForm.phone.$invalid && (studentForm.phone.$touched || studentForm.phone.$dirty ),
                                                                'has-success' : studentForm.phone.$valid && (studentForm.phone.$touched || studentForm.phone.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-phone">&nbsp;</i>Phone</span>
                                                        <input type="text" name="phone" id="phone"
                                                               ng-model="student.phone"
                                                               ng-minlength="7"
                                                               ng-maxlength="15"
                                                               ng-required="true"
                                                               ng-pattern="/^[0-9\-\+]{9,15}$/"
                                                               class="form-control form-custom" placeholder="Phone"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="studentForm.phone.$invalid && studentForm.phone.$touched && studentForm.phone.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.phone.$invalid && studentForm.phone.$touched && studentForm.phone.$error.pattern">
                                                        <strong>Format Nomor Telepon tidak valid</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.phone.$invalid && studentForm.phone.$touched && studentForm.phone.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.phone.$invalid && studentForm.phone.$touched && studentForm.phone.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : studentForm.major.$invalid && (studentForm.major.$touched || studentForm.major.$dirty ),
                                                                'has-success' : studentForm.major.$valid && (studentForm.major.$touched || studentForm.major.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-apple">&nbsp;</i>Jurusan</span>
                                                        <input type="text" name="major" id="major"
                                                               ng-model="student.major"
                                                               ng-minlength="3"
                                                               ng-maxlength="255"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="Jurusan"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="studentForm.major.$invalid && studentForm.major.$touched && studentForm.major.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.major.$invalid && studentForm.major.$touched && studentForm.major.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.major.$invalid && studentForm.major.$touched && studentForm.major.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : studentForm.batch.$invalid && (studentForm.batch.$touched || studentForm.batch.$dirty ),
                                                                'has-success' : studentForm.batch.$valid && (studentForm.batch.$touched || studentForm.batch.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-institution">&nbsp;</i>Batch</span>
                                                        <input type="text" name="batch" id="batch"
                                                               ng-model="student.batch"
                                                               ng-minlength="3"
                                                               ng-maxlength="255"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="Batch"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="studentForm.batch.$invalid && studentForm.batch.$touched && studentForm.batch.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.batch.$invalid && studentForm.batch.$touched && studentForm.batch.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.batch.$invalid && studentForm.batch.$touched && studentForm.batch.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : studentForm.student_number.$invalid && (studentForm.student_number.$touched || studentForm.student_number.$dirty ),
                                                                'has-success' : studentForm.student_number.$valid && (studentForm.student_number.$touched || studentForm.student_number.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-institution">&nbsp;</i>NISN</span>
                                                        <input type="text" name="student_number" id="student_number"
                                                               ng-model="student.student_number"
                                                               ng-minlength="3"
                                                               ng-maxlength="255"
                                                               ng-required="true"
                                                               class="form-control form-custom" placeholder="NISN"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="studentForm.student_number.$invalid && studentForm.student_number.$touched && studentForm.student_number.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.student_number.$invalid && studentForm.student_number.$touched && studentForm.student_number.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.student_number.$invalid && studentForm.student_number.$touched && studentForm.student_number.$error.maxlength">
                                                        <strong>Too long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : studentForm.password.$invalid && (studentForm.password.$touched || studentForm.password.$dirty ),
                                                                'has-success' : studentForm.password.$valid && (studentForm.password.$touched || studentForm.password.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-key">&nbsp;</i>Password</span>
                                                        <input type="password" name="password" id="password"
                                                               ng-model="student.password"
                                                               ng-required="true"
                                                               ng-minlength="3"
                                                               ng-maxlength="70"
                                                               class="form-control form-custom" placeholder="Password"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="studentForm.password.$invalid && studentForm.password.$touched && studentForm.password.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.password.$invalid && studentForm.password.$touched && studentForm.password.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.password.$invalid && studentForm.password.$touched && studentForm.password.$error.maxlength">
                                                        <strong>Too Long</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group" ng-class="{
                                                                'has-error' : studentForm.password_confirmation.$invalid && (studentForm.password_confirmation.$touched || studentForm.password_confirmation.$dirty ),
                                                                'has-success' : studentForm.password_confirmation.$valid && (studentForm.password_confirmation.$touched || studentForm.password_confirmation.$dirty )
                                                            }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-key">&nbsp;</i>Ulangi Password</span>
                                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                                               ng-model="student.password_confirmation"
                                                               compare-to="student.password"
                                                               ng-required="true"
                                                               ng-minlength="3"
                                                               ng-maxlength="70"
                                                               class="form-control form-custom" placeholder="Ulangi Password"/>
                                                    </div>
                                                    <span class="help-block"
                                                          ng-show="studentForm.password_confirmation.$invalid && studentForm.password_confirmation.$touched && studentForm.password_confirmation.$error.required">
                                                        <strong>* required</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.password_confirmation.$invalid && studentForm.password_confirmation.$touched && studentForm.password_confirmation.$error.minlength">
                                                        <strong>Too short</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.password_confirmation.$invalid && studentForm.password_confirmation.$touched && studentForm.password_confirmation.$error.maxlength">
                                                        <strong>Too Long</strong>
                                                    </span>
                                                    <span class="help-block"
                                                          ng-show="studentForm.password_confirmation.$invalid && studentForm.password_confirmation.$touched && studentForm.password_confirmation.$error.compareTo">
                                                        <strong>Password Tidak Match</strong>
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-lg-offset-3">
                                                            <input type="submit" name="commit" value="Daftar"
                                                                   ng-disabled="studentForm.$invalid"
                                                                   class="btn btn-custom btn-block btn-lg"
                                                                   data-disable-with="Masuk"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('codingan-angular')
    <script src="{{ URL::asset('js/angular.min.js') }}"></script>
    <script src="{{ URL::asset('js/angular-script.js') }}"></script>
@endsection