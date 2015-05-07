jQuery(document).ready(function() {

    //Todo 1

    $("#sortable-todo, #completed-todo").sortable({
          connectWith: ".connectedSortable",
          receive: function (event, ui) {
            $(ui.item[0]).find('.iCheck-helper')[0].dropped = true;
            $(ui.item[0]).find('.iCheck-helper').click()
          }
        }).disableSelection();

    $('#sortable-todo .iCheck-helper, #completed-todo .iCheck-helper').on('click', function () {
        if ($(this)[0].dropped == true) { $(this)[0].dropped = false; return; }
        if ($(this).closest('#sortable-todo').length)
            $(this).closest('li').appendTo('#completed-todo');
        else
            $(this).closest('li').appendTo('#sortable-todo');
    });
});