@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">

        <div class="well">
            <form>
                <h3>Send Email</h3>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="to-who">To :</label>
                            <input class="form-control" placeholder="to who" name="to-who" type="text" id="to-who">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="subject">Subject :</label>
                            <input class="form-control" placeholder="subject" name="subject" type="text" value="" id="subject">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="content">Content :</label>
                            <textarea class="form-control" placeholder="content" name="content" type="text" value="" id="content"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i> Send
                            </button>
                        </div>
                    </div>
                </div>

            </form>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#myTabs a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            });
        });
    </script>
@endsection