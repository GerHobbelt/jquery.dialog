/* =========================================================
 * An easy, no-frills jQuery Dialog Plugin
 * By Jeff Miller
 * http://jamiller.me
 * ========================================================= *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================= */

var Dialog = Dialog || {};

Dialog = function (options)
{	
    var obj = this,
        dialog,
        loader,
        spinner,
        dialogPosition,
        defaults = $.extend({}, Dialog.defaults, options),
        background = $('<div />').addClass(defaults.backgroundClass),
        siteContainer = $('body');
	
    this.addScroll = function ()
    {
        var h = dialog.height(),
            wh = $(window).height();

        if (h > wh)
        {
            $(defaults.scrollContainer, dialog).addClass('dialog-scroll').height(wh - 200);
        }
        
        positionDialog();
    };

    this.close = function ()
    {	
        if (!dialog) return;
        
        if(defaults.onclose && typeof(defaults.onclose) === 'function')
        {
            var response = defaults.onclose(dialog);
            
            if(response === false) return;
        }
        
        $(window).trigger('dialog.close');

        dialog.unbind().remove();
        background.remove();
    };
    
    // Position
    if (typeof (defaults.position) === 'object')
    {
        // If defaults.position is an event i.e. mouse
        if (defaults.position.which !== undefined)
        {
            dialogPosition = {
                my: 'left top',
                at: 'center',
                of: defaults.position,
                offset: '10' 
            };
        }
        else
        {
            dialogPosition = defaults.position;
        }

    }
    else if (defaults.position === 'center')
    {
        dialogPosition = {
            my: 'center',
            at: 'center',
            of: window
        }
    }

    this.showSpinner = function ()
    {
        loader = $('<div />').addClass(defaults.spinnerClass);
        
        siteContainer.append(loader);

        loader.position(dialogPosition).css('z-index', 10000);
        
        spinner = new Spinner().spin(loader[0]);
    };
    
    if(defaults.showSpinner)
    {
        this.showSpinner();
    }
    
    if (defaults.modal)
    {
        siteContainer.append(background);
    }

    function centerDialog()
    {	
        dialogPosition = {
            my: 'center',
            at: 'center',
            of: window
        };
        
        dialog.position(dialogPosition);
    }
	
    function positionDialog()
    {	
        // I can't position something that isn't shown
        dialog.show();

        if (defaults.width != null) dialog.width(defaults.width);
        if (defaults.height != null) dialog.height(defaults.height);

        // Position
        dialog.position(dialogPosition);
    }

    function init(data, isLocal)
    {
        dialog = $(data);

        // Remove loader
        if (loader)
        {
            spinner.stop();
            loader.remove();
        }

        // Assign ID
        if(defaults.id != null)
        {
            dialog.attr('id', defaults.id);
        }

        // Attach
        $('body').append(dialog.addClass('dialog'));
        
        if(defaults.onbeforeload && typeof(defaults.onbeforeload) === 'function')
        {
            defaults.onbeforeload(dialog);
            $(window).trigger('dialog.beforeload');
        }

        positionDialog();
        obj.addScroll();
        
        if (defaults.position === 'center')
        {
            // Reposition on window resize or dialog resize
            $(window).resize(function ()
            {
                centerDialog();
            });

            // This relies on Ben Alman's jQuery resize plugin
            dialog.resize(function ()
            {
                centerDialog();
            });
        }

        // Tie handlers to close buttons
        dialog.on('click.dialog', '.' + defaults.closeButtonClass, function()
        {
            obj.close();
        });

        if (dialog.draggable && defaults.drag.enabled === true)
        {
            dialog.draggable(
            {
                handle: defaults.drag.handle
            });
        }

        if(isLocal) dialog.addClass('dialog-local');

        if(defaults.onload && typeof(defaults.onload) === 'function')
        {
            defaults.onload(dialog);
            $(window).trigger('dialog.load');
        }
    }

    // Let's go!
    if(!defaults.url || defaults.url.length === 0)
    {
        alert('DIALOG ERROR: A dialog must have a url defined!');
        return;
    }

    // Is local
    var firstChar = defaults.url.substr(0,1);
    if (firstChar === '#' || firstChar === '.')
    {
        init($(defaults.url), true);
    }
    // else is remote
    else
    {
        this.request = $.ajax(
        {
            url: defaults.url,
            data: defaults.params,
            type: defaults.method,
            success: function (data)
            {
                init(data, false);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                defaults.onerror(jqXHR, textStatus, errorThrown);
            }
        });
    }

    return this;
};

Dialog.defaults = {
    // The id to be assigned for the dialog
    id: null,
    // This can either be the url of the ajax content
    // or, in the case of local content, the id of the element
    url: null,
    // The dialog will size itself according to the contents
    // but can be overridden here
    width: null,
    // Same as width
    height: null,
    method: 'GET',
    params: {},
    // Depends on spin.js (http://fgnass.github.com/spin.js/)
    showSpinner: false,
    spinnerClass: '',
    backgroundClass: 'dialog-background',
    modal: true,
    closeButtonClass: 'dialog-close',
    drag: {
        enabled: false,
        handle: ''
    },
    // This should be the body class of your dialog window content
    // and will have a class applied that adds a scrollbar if needed
    scrollContainer: '',
    // Can be 'center', an event or jQuery UI Position object
    position: 'center',
    // Depends on Ben Alman's resize plugin (http://benalman.com/projects/jquery-resize-plugin/)
    autoResize: true,
    onbeforeload: function (dialog) { },
    // dialog is the html object of the Dialog window
    onload: function (dialog) { },
    // If this function returns false the 
    // dialog will not close
    onclose: function (dialog) { },
    // The standard jQuery onerror callback
    onerror: function (jqXHR, textStatus, errorThrown) { }
};