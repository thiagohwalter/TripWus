$(document).ready(function(){
    $('.ui.search')
        .search({
            source: content
        });
    $('.ui.dropdown')
        .dropdown()
    ;

    $('.dropdown')
        .dropdown({
            transition: 'drop'
        })
    ;
    $('.ui.checkbox')
        .checkbox()
    ;
    $('.combo.dropdown')
        .dropdown({
            action: 'combo'
        })
    ;
    $('.ui.basic.modal')
        .modal('show')
    ;

});

function abrir_modal(modal) {
    $(document).ready(function () {
        $('.ui.modal.' + modal)
            .modal({
                closable: false,
                onDeny: function () {
                    $('.ui.modal').modal('hide');
                },
            })
            .modal('show');
    });
}

