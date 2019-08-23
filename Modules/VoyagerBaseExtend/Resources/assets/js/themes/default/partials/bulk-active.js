$( document ).ready(function() {

    $("#bulk_active_btn").click(function(){
    
        var checkedBoxesActives = $('#dataTable input[type=checkbox]:checked').not('.select_all');
        var bulk_active_name = $(this).data("name");
        var bulk_active_model_statut = $(this).data("model-statut");
        var bulk_active_model_name = $(this).data("model-name");
        var bulk_translation_name = $(this).data("translation-name");
        var bulk_translation_name_success = $(this).data("translation-name-success");
        var count = checkedBoxesActives.length;
        var ids = [];

        if (count) {

            $.each(checkedBoxesActives, function () {
                var value = $(this).val();
                ids.push(value);
            })

            $.post({
                url: "/admin/voyagerbaseextend/ajax/statut", 
                data:{
                    bulk_ids: ids,
                    bulk_active_model_statut: bulk_active_model_statut,
                    bulk_active_name: bulk_active_name,
                    bulk_active_model_name: bulk_active_model_name,
                    count: count,
                },
                success: function(data){
                    window.location.href = data;
                    toastr.success(bulk_translation_name_success);
                },
                error: function(err) {
                    console.log('error ' + err)
                }
            });
        }
        else {
            toastr.warning(bulk_translation_name);
        }

    });

    $("#bulk_disable_btn").click(function(){
    
        var checkedBoxesActives = $('#dataTable input[type=checkbox]:checked').not('.select_all');
        var bulk_active_name = $(this).data("name");
        var bulk_active_model_statut = $(this).data("model-statut");
        var bulk_active_model_name = $(this).data("model-name");
        var bulk_translation_name = $(this).data("translation-name");
        var bulk_translation_name_success = $(this).data("translation-name-success");
        var count = checkedBoxesActives.length;
        var ids = [];

        if (count) {

            $.each(checkedBoxesActives, function () {
                var value = $(this).val();
                ids.push(value);
            })

            $.post({
                url: "/admin/voyagerbaseextend/ajax/statut", 
                data:{
                    bulk_ids: ids,
                    bulk_active_model_statut: bulk_active_model_statut,
                    bulk_active_name: bulk_active_name,
                    bulk_active_model_name: bulk_active_model_name,
                    count: count,
                },
                success: function(data){
                    window.location.href = data;
                    toastr.success(bulk_translation_name_success);
                },
                error: function(err) {
                    console.log('error ' + err)
                }
            });
        }
        else {
            toastr.warning(bulk_translation_name);
        }

    });
});