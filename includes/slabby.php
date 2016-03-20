<script type="text/javascript">
    var stS = "<span class='slabtext'>",
    stE = "</span>",
    txt = [
        "<span class='offset-1 bold'>Hi</span>, I'm <span class='i'>Brian Sanchez</span>.",
        "I'm an <span class='underline'>up-and-coming</span>",
        "<span class='offset-2'>Web Developer</span>", 
        "and I <span class='offset-1 i bold'>LOVE</span> what I do."];
    
    $(".toslab").html(stS + txt.join(stE + stS) + stE).slabText();
    function slabby(){
        $(".toslab").html(stS + txt.join(stE + stS) + stE).slabText();
    }
</script>