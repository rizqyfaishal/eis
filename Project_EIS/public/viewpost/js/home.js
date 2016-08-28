$(function() {
    var postLikeCountArr = JSON.parse(localStorage.postLikeCount);
    var newPostsArr = JSON.parse(localStorage.newPosts);
    var numPost = postLikeCountArr.length + newPostsArr.length;
    var deletedPosts = JSON.parse(localStorage.deletedPosts);

    $.ajax({
        type: 'GET',
        url: 'resources/post.json',
        dataType: 'json',
        success: function(result) {
            var posts = result;
            var count = 0;
            posts.forEach(function(post) {
                var users = JSON.parse(sessionStorage.orionNetworkUsers);
                var photoPath = 'resources/image/' + users[post.username];
                var postNumLike;

                if (isNaN(postLikeCountArr[count])) {
                    postNumLike = Number(post.like);
                    postLikeCountArr[count] = Number(post.like);
                }
                else {
                    postNumLike = postLikeCountArr[count];
                }
                $('.posts').prepend('<div class="well" id="post-id-' + count + '"> <div class="row row-table"> <div class="col-md-1 col-sm-2 col-xs-3 col-table-cell"> <img src="' + photoPath + '" class="img-circle"> </div> <div class="col-md-11 col-sm-10 col-xs-9 col-table-cell"> <div class="row"> <div class="col-sm-6"> <h3 class="post-username">' + post.username + '</h3> </div> <div class="col-sm-6"> <p class="right-on-sm-and-up post-date">' + post.date + ' <a href="#" class="btn-delete" data-id="' + count + '"><i class="mdi mdi-delete"></i></a></p> </div> </div> <p class="post-content">' + post.post + '</p> <p> <a href="#" class="post-like" data-id="' + count + '"><i class="mdi mdi-heart"></i></a> <span class="post-like-count" id="post-' + count + '">' + postNumLike + '</span> like(s) </p> </div> </div> </div>');
                count++;
            });
            displayNewPosts();
            updatePostLike();
            numPost = postLikeCountArr.length + newPostsArr.length;
        },
        error: function() {
            alert('Please refresh this page.');
        }
    });

    $('#btn-post').click(function(e) {
        e.preventDefault();
        var newPostContent = $('#new-post-content').val();
        if (newPostContent.length > 0 && newPostContent.length <= 150) {
            var users = JSON.parse(sessionStorage.orionNetworkUsers);
            var username = sessionStorage.orionNetworkUsername;
            var photoPath = 'resources/image/' + users[username];
            var date = new Date();
            var dateText =  date.getDate() + ' ' + getMonthText(date.getMonth()) + ' ' + date.getFullYear() + ', ' + getTwoDigit(date.getHours()) + ':' + getTwoDigit(date.getMinutes());
            
            $('.posts').prepend('<div class="well" id="post-id-' + numPost + '"> <div class="row row-table"> <div class="col-md-1 col-sm-2 col-xs-3 col-table-cell"> <img src="' + photoPath + '" class="img-circle"> </div> <div class="col-md-11 col-sm-10 col-xs-9 col-table-cell"> <div class="row"> <div class="col-sm-6"> <h3 class="post-username">' + username + '</h3> </div> <div class="col-sm-6"> <p class="right-on-sm-and-up post-date">' + dateText + ' <a href="#" class="btn-delete" data-id="' + numPost + '"><i class="mdi mdi-delete"></i></a></p> </div> </div> <p class="post-content">' + newPostContent + '</p> <p> <a href="#" class="post-like" data-id="' + numPost + '"><i class="mdi mdi-heart"></i></a> <span class="post-like-count" id="post-' + numPost + '">0</span> like(s) </p> </div> </div> </div>');    
            postLikeCountArr[numPost] = 0;

            newPostsArr.push({
                postID: numPost,
                username: username,
                photoPath: photoPath,
                date: dateText,
                content: newPostContent
            });

            localStorage.newPosts = JSON.stringify(newPostsArr);
            numPost++;
        } 
        else if (newPostContent.length === 0) {
            alert('Your post is empty :(');
        }
        else if (newPostContent.length > 150) {
            alert('Your post is too long.');
        }
    
        $('#new-post-content').val('');
    });

    $('.posts').on('click', '.post-like', function(e) {
        e.preventDefault();
        var postID = Number($(this).data('id'));
        var newNumLike = Number($('#post-' + postID).text()) + 1;
        $('#post-' + postID).text(newNumLike);

        postLikeCountArr[postID] = newNumLike;
        localStorage.postLikeCount = JSON.stringify(postLikeCountArr);
    });

    $('.posts').on('click', '.btn-delete', function(e) {
        e.preventDefault();
        var postID = Number($(this).data('id'));

        var confirmation = confirm('Are you sure want to delete this post?');

        if (confirmation) {
            deletedPosts.push(postID);
            localStorage.deletedPosts = JSON.stringify(deletedPosts);
            displayNewPosts();

            $('#post-id-' + postID).remove();
        }
    });

    function updatePostLike() {
        for(var i = 0; i < numPost; i++) {
            var newNumLike = postLikeCountArr[i];
            if (newNumLike === null || isNaN(newNumLike)) {
                newNumLike = 0;
            }
            $('#post-' + i).text(newNumLike);
        }
    }

    function displayNewPosts() {
        newPostsArr.forEach(function(newPost) {
            var deleted = false;
            for (var i = 0; i < deletedPosts.length; i++) {
                if (deletedPosts[i] === newPost.postID) {
                    deleted = true;
                }
            }
            if (!deleted) {
                $('.posts').prepend('<div class="well" id="post-id-' + newPost.postID + '"> <div class="row row-table"> <div class="col-md-1 col-sm-2 col-xs-3 col-table-cell"> <img src="' + newPost.photoPath + '" class="img-circle"> </div> <div class="col-md-11 col-sm-10 col-xs-9 col-table-cell"> <div class="row"> <div class="col-sm-6"> <h3 class="post-username">' + newPost.username + '</h3> </div> <div class="col-sm-6"> <p class="right-on-sm-and-up post-date">' + newPost.date + ' <a href="#" class="btn-delete" data-id="' + newPost.postID + '"><i class="mdi mdi-delete"></i></a></p> </div> </div> <p class="post-content">' + newPost.content + '</p> <p> <a href="#" class="post-like" data-id="' + newPost.postID + '"><i class="mdi mdi-heart"></i></a> <span class="post-like-count" id="post-' + newPost.postID + '">0</span> like(s) </p> </div> </div> </div>');
            }
        });
    }

    function getMonthText(number) {
        if (number === 0) {
            return 'January';
        } else if (number === 1) {
            return 'February';
        } else if (number === 2) {
            return 'March';
        } else if (number === 3) {
            return 'April';
        } else if (number === 4) {
            return 'May';
        } else if (number === 5) {
            return 'June';
        } else if (number === 6) {
            return 'July';
        } else if (number === 7) {
            return 'August';
        } else if (number === 8) {
            return 'September';
        } else if (number === 9) {
            return 'October';
        } else if (number === 10) {
            return 'November';
        } else {
            return 'December';
        }
    }

    function getTwoDigit(number) {
        if (number < 10) {
            return ('0' + number);
        }
        return number;
    }
});