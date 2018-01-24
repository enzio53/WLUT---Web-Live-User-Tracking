$(document).ready(function(){

    var $API    = 'app_wlut/php/wlut-core.php',
        $DELAY  = 3600;

    function wlut_stats($refresh){
        $.ajax({
            url:$API,
            type:'POST',
            data: {},
            success: function(data){
                console.log(data);
            }
        });

        if($refresh){
            setTimeout(function() {
                wlut_stats(true);
            }, $DELAY)
        }
    }

    wlut_stats(true);
});