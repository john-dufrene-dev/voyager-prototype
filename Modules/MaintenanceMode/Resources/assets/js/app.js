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

    $(".status-active-ip").click(function(){

        $.post({
            url: "/admin/maintenance/ajax/status", 
            data:{
                status_ip: $(this).data("status"),
                id_maintenance_ip: $(this).data("ip-id"),
            },
            success: function(data){
                window.location.href = data;
            },
            error: function(err) {
                console.log('error ' + err)
            }
        });

    });

});