var follower = document.getElementById('rond_suivi');

document.addEventListener('mousemove', function (e) {
    var x = e.clientX + window.pageXOffset - (follower.offsetWidth / 2);
    var y = e.clientY + window.pageYOffset - (follower.offsetHeight / 2);
    follower.style.left = x + 'px';
    follower.style.top = y + 'px';
});
