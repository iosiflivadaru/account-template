<?php 
    $sql = "SELECT * FROM users WHERE id=" . $_SESSION['id'];

    $result = $db->query($sql);

    $row = $result->fetch_assoc();

    $first_name = $row['first_name'];
?>


<div class="bg-dark position-sticky float-right" id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome, <b id="nameTest">
        <?php echo $first_name; ?></b></p>
        <i class="fas fa-angle-down float-right pr-1 text-white chatArrow mb-2" id="minimizeBtn"></i>
    </div>

    <div id="minimize">
        <div id="chatbox"></div>


        <iframe name="msg" style="display:none;"></iframe>
        <form name="message" method="POST" action="#" target="msg" id="form">
        <input name="usermsg" type="text" id="usermsg" size="63" autocomplete="off" />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
        </form>
    </div>

    <script>
    // jQuery Document
    

        function ajaxCall() {
            var oldscrollHeight = $("#chatbox").prop("scrollHeight") - 20; //Scroll height before the request
            $.ajax({
                url: "chat/includes/showContent.inc.php",
                success: (function (result){
                    $("#chatbox").html(result);
                    var newscrollHeight = $("#chatbox").prop("scrollHeight") - 20; 

                    //Scroll height after the request                
                    if(newscrollHeight > oldscrollHeight){
                        $("#chatbox").scrollTop(newscrollHeight, 1000);
                    }

                    // Animated scroll for the chat
                    // if(newscrollHeight > oldscrollHeight){
                    //     $("#chatbox").animate({ scrollTop: newscrollHeight }, 1000);
                    // }
                })
            })
        };

        setInterval(ajaxCall, (100));



        $('#submitmsg').click(function(event){
            $.ajax({
                url: "chat/includes/submit.php",
                type: "POST",
                data: ({ name: $("#usermsg").val()}),
                success: (function (data){
                    $('#usermsg').val('');
                    event.preventDefault();
                })
            })
        });


        var flag = true;
        $("#minimizeBtn").click(function(){
            $("#minimize").toggle(0, function(){
                if ($("#minimizeBtn").hasClass('fa-angle-down')){
                    $("#minimizeBtn").removeClass('fas fa-angle-down mb-2').addClass('fas fa-angle-up');
                } else {
                    $("#minimizeBtn").removeClass('fas fa-angle-up').addClass('fas fa-angle-down mb-2');
                }
            });
        });

        // function addClass() {
        //     $(".content").removeClass('content').addClass('userContent');
        // }
        // setInterval(addClass, (100));


        
    

    </script>
</div>