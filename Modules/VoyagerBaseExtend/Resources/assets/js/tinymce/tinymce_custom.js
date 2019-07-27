function tinymce_init_callback(editor)
{
    editor.remove();
    editor = null;

    var editor_config = {
        path_absolute : "/",
        menubar: false,
        selector:'textarea.richTextBox',
        min_height: 300,
        skin_url: $('meta[name="assets-path"]').attr('content')+'?path=js/skins/voyager',
        plugins: 'insertdatetime, advlist, wordcount, imagetools, searchreplace, autolink, hr, charmap, preview, link, image, code, table, textcolor, lists, media',
        toolbar: 'preview searchreplace | styleselect bold italic underline charmap hr | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image media table | insertdatetime code',
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
        
            var cmsURL = editor_config.path_absolute + 'admin/filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }
    
            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        },
        convert_urls: false,
        image_caption: true,
        image_title: true,
      };
    
      tinymce.init(editor_config);
}

tinymce_init_callback(tinymce)