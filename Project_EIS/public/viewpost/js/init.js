$(function() {
    if (!sessionStorage.orionNetworkUser) {
        sessionStorage.orionNetworkUser = '';
    }

    if (!sessionStorage.orionNetworkUsers) {
        sessionStorage.orionNetworkUsers = JSON.stringify({});
    }

    if (!localStorage.postLikeCount) {
        localStorage.postLikeCount = JSON.stringify([]);
    }

    if (!localStorage.newPosts) {
        localStorage.newPosts = JSON.stringify([]);
    }

    if (!localStorage.deletedPosts) {
        localStorage.deletedPosts = JSON.stringify([]);
    }
});