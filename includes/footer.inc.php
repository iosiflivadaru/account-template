<footer>
    <p class="text-muted text-center m-0"><?php echo $appVars['appCopyright']; ?></p>



    <script>
    $(function() {
        var windowHeight = $(window).height();
        var contentHeight = $("body").height();
        var footerHeight = $("footer").height();
        var testHeight = windowHeight - footerHeight;
        
        if (contentHeight < testHeight) {
            $("footer").css("bottom", "0");
            $("footer").css("left", "0");
        }
    }); 
    </script>
</footer>
</body>
</html>