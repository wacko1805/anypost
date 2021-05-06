    $(function() {
    $("#submit").on("click",function() {

        var title = $("input:text[name='title']").val();
        var comment = $("textarea#comment").val();
            var badwords = ["<html>","<php?","<script>","<",">","words-that-will-get-me-banned-from-github"];

        
        
			if($.inArray(title, badwords) !==-1 || $.inArray(comment, badwords) !==-1)
                {
                    alert("Your post contains words or characters that are not allowed on anypost.");
                    return false;
                }
        
    });
});
