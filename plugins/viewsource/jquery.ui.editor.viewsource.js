(function($) {
    
    $.ui.editor.registerUi({
        'view-source': function(editor, options) {
            console.info('FIXME: remove dialog on destroy');
            var dialog = $(editor.getTemplate('viewsource.dialog'));
            dialog.dialog({
                modal: false,
                width: 600,
                height: 400,
                resizable: true,
                title: _('View Source'),
                autoOpen: false,
                dialogClass: options.baseClass + ' ' + options.dialogClass,
                show: options.dialogShowAnimation,
                hide: options.dialogHideAnimation,
                buttons: [
                    {
                        text: _('Apply Source'),
                        click: function() {
                            editor.setHtml($(this).find('textarea').val());
                        }
                    },
                    {
                        text: _('Close'),
                        click: function() {
                            dialog.dialog('close');
                        }
                    }
                ],
                open: function() {
                    var buttons = dialog.parent().find('.ui-dialog-buttonpane');
                    buttons.find('button:eq(0)').button({ icons: { primary: 'ui-icon-circle-check' }});
                    buttons.find('button:eq(1)').button({ icons: { primary: 'ui-icon-circle-close' }});

                    $(this).find('textarea').val(editor.getHtml());
                }
            });
                    
            this.ui = editor.uiButton({
                title: _('View / Edit Source'),
                click: function() {
                    dialog.dialog('open');
                }
            });
            
            editor.bind('destroy', function() {
                dialog.dialog('destroy').remove();
            });
        }
    });
    
})(jQuery);
