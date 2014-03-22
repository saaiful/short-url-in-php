    $.validate();
    $("#myUrl").submit(function() {
    submitUrl();
    return false;
    });
//sumitting data and geting result
    function submitUrl() {
       var url =document.getElementById("url").value;
       var params = "url="+url;
               var url = "function.php";
                    $.ajax({
                            type: 'POST',
                            url: url,
                            dataType: 'html',
                            data: params,
                            beforeSend: function()
                            {
                            $("#loading").show();
                            },
                            complete: function() {
                            },
                            success: function(html) {
                            document.getElementById("url").value= html ;
                            document.getElementById("result").innerHTML="";
                            }
                           });
     
    }

//centering div 
    $(window).resize(adjustLayout);
    $(document).ready(function(){
    adjustLayout();
    })
    function adjustLayout(){
    $('.center').css({
        position:'absolute',
        left: ($(window).width() - $('.center').outerWidth())/2,
        top: ($(window).height() - $('.center').outerHeight())/2
    });
    }