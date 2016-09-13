<div class="col-md-3 visible-lg visible-md" id="menu-workspace">
    <div class="well">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="{{ action('DashboardUserController@home') }}">Home</a></li>
            <li class="nav-divider mt-5 mb-5"></li>
            <li><a href="{{ action('DashboardUserController@gantiAvatar') }}">Ganti Avatar</a></li>
            <li class="nav-divider mt-5 mb-5"></li>
            <li><a href="{{ action('DashboardUserController@gantiPassword') }}">Ganti Password</a></li>
        </ul>
    </div>
</div>
<div class="visible-xs visible-sm mb-10" id="menu-workspace">
    <div class="container">
        <div class="row" style="border:none;">
            <div class="col-sm-12 mb-20">
                <button aria-controls="freelancer-menu" aria-expanded="false" class="btn btn-lg btn-block btn-info font2 collapsed" data-target="#freelancer-menu" data-toggle="collapse" type="button">Dashboard Menu</button>
                <div style="height: 0px;" aria-expanded="false" class="collapse" id="freelancer-menu">
                    <div class="well mt-10">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="{{ action('DashboardUserController@home') }}">Home</a></li>
                            <li class="nav-divider mt-5 mb-5"></li>
                            <li><a href="{{ action('DashboardUserController@gantiAvatar') }}">Ganti Avatar</a></li>
                            <li class="nav-divider mt-5 mb-5"></li>
                            <li><a href="{{ action('DashboardUserController@gantiPassword') }}">Ganti Password</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>