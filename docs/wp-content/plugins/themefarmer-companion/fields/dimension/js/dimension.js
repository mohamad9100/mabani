wp.customize.controlConstructor['themefarmer-dimension'] = wp.customize.Control.extend({
    ready: function() {
        'use strict';
        var control = this;
        var container = this.container;
        
        container.on('input change', '.themefarmer-dimension-input', function(event) {
            event.stopPropagation();
            if(jQuery(this).siblings('.themefarmer-dimension-button-linked').is('.linked')){
                jQuery(this).siblings('.themefarmer-dimension-input').val(jQuery(this).val());
            }
            control.updateValue();
        });

        container.on('click', 'button.themefarmer-dimension-button-linked', function(event) {
            if (jQuery(this).is('.linked')) {
                jQuery(this).removeClass('linked');
            }else{
                jQuery(this).addClass('linked');
            }
        });
    },
    updateValue: function() {
        var values = {};
        var container = this.container;
        var data_collector = container.find('.themefarmer-field-dimension-data');
        var top = parseInt(container.find('.themefarmer-dimension-input.themefarmer-dimension-top').val());
        var right = parseInt(container.find('.themefarmer-dimension-input.themefarmer-dimension-right').val());
        var bottom = parseInt(container.find('.themefarmer-dimension-input.themefarmer-dimension-bottom').val());
        var left = parseInt(container.find('.themefarmer-dimension-input.themefarmer-dimension-left').val());
        var linked =  container.find('.themefarmer-dimension-button-linked').is('.linked');
        var this_data = {};
        this_data.top = top;
        this_data.right = right;
        this_data.bottom = bottom;
        this_data.left = left;
        this_data.linked = linked;
        
        this.setting.set(this_data);

        if(this.setting.transport !== 'postMessage'){
            data_collector.trigger('change');
        }
    }

});