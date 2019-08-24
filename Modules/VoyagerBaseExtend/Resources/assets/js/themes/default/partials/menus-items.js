$('.panel-collapse').on('hide.bs.collapse', function(e) {
    var target = $(event.target);
    if (!target.is('a')) {
        target = target.parent();
    }
    if (!target.hasClass('collapsed')) {
        return;
    }
    e.stopPropagation();
    e.preventDefault();
});