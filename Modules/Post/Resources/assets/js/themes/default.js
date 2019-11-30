window.addEventListener('hashchange', function() {

    if (window.location.hash) {
        var page = window.location.hash.replace('#', '');
        if (page == Number.NaN || page <= 0) {
            return false;
        } else {
            getData(page);
        }
    }

});

$(document).ready(function() {

    $(document).on('click', '.pagination a', function(event) {

        event.preventDefault();

        $('li').removeClass('active');
        $(this).parent('li').addClass('active');
        var page  = $(this).attr('href').split('page=')[1];
        getData(page);
    });

});

function getData(page) {
    
    axios.get('?page=' + page)
        .then(res  => {
            $("#posts_container").empty().html(res.data);
            location.hash = page;
        })
        .catch(err => {
            console.log(err)
            console.log('No response from server');
        })
}

import './default/config/vue';