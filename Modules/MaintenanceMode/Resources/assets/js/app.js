$( document ).ready(function() {
    $("#add-ip").click(function(){
        $.post({url: "/admin/maintenance/ajax/ip", 
            success: function(data){
                $("input[name=ip_maintenance]").val(data)
            },
            error: function(err) {
                console.log('error ' + err)
            }
        });
    });
});