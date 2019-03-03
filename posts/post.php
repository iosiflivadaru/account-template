<iframe name="post" style="display:none;"></iframe>
<form action="#" method="post" target="post">
        
    <textarea class="w-100" id="postText" name="post" rows="3"  placeholder="New post..."></textarea>
    <input type="submit" id="submitPost">

</form>

<div id="posts"></div>

<script>

function newPosts() {
    $.ajax({
        url: "posts/showPosts.php",
        success: (function (result){
            $("#posts").html(result);
        })
    })
};
newPosts();
setInterval(newPosts, (1000));


$('#submitPost').click(function(event){
    $.ajax({
        url: "posts/newPost.php",
        type: "POST",
        data: ({ name: $("#postText").val()}),
        success: (function (data){
            $('#postText').val('');
            event.preventDefault();
        })
    })
});
</script>
