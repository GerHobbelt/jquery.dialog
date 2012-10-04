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

var dialog = function (options)
{	
	var obj = this,
		dWindow,
		loader,
		defaults = $.extend({}, dialog.defaults, options),
		background = $('<div />').addClass(defaults.backgroundClass),
		siteContainer = $('body');
	
	this.addScroll = function ()
	{
		var h = dWindow.height(),
			wh = $(window).height() - 40;
			
		if (h > wh)
		{
			$(defaults.scrollContainer, dWindow).addClass('dialog-scroll').height(wh - 40);
			dWindow.height(wh - 20);
		}
	};

	this.close = function ()
	{	
		if (!dWindow)
		{
			return;
		}

		$(window).unbind('click.dialog');  
		dWindow.remove();        
		background.remove();
	};

	this.showSpinner = function ()
	{
		loader = $('<div id="dialog-loader">Loading</div>');
		siteContainer.append(loader);

		loader.position(
		{
			my: 'center bottom',
			at: 'center',
			of: window
		});
	};

	if (defaults.showLoader)
	{
		this.showSpinner();
	}
	
	if (defaults.showBackground)
	{
		siteContainer.append(background);		
	}
	else if (defaults.modal && !defaults.showBackground)
	{
		background.css('background-color', 'transparent');
		siteContainer.append(background);
	}
	
	function centerDialog()
	{	
		dWindow.position(
		{
			my: 'center',
			at: 'center',
			of: window,
			using: function (pos)
			{
				$(this).css(
				{
					top: ($(window).height() / 2) - (dWindow.outerHeight() / 2),
					left: pos.left
				});
			}
		});

		obj.addScroll();
	}
	
	function positionDialog()
	{	
		// I can't position something that isn't shown
		dWindow.show();
		
		if (defaults.width != null) dWindow.width(defaults.width);
		if (defaults.height != null) dWindow.height(defaults.height);

		// Position
		if (typeof (defaults.position) === 'object')
		{
			// If defaults.position is an event i.e. mouse
			if (defaults.position.which !== undefined)
			{
				dWindow.position(
				{
					my: 'left top',
					at: 'center',
					of: defaults.position,
					offset: '10'
				});
			}
			else
			{
				dWindow.position(defaults.position);
			}

			obj.addScroll();
			
		}
		else if (defaults.position === 'center')
		{
			centerDialog();

			// Reposition on window resize or dialog resize
			$(window).resize(function ()
			{
				centerDialog();
			});

			// This relies on Ben Alman's jQuery resize plugin
			dWindow.resize(function ()
			{
				centerDialog();
			});
		}
	}
	
	function init(data, isLocal)
	{
		dWindow = $(data);

		// Remove loader
		if (loader) loader.remove();

		// Attach
		$('body').append(dWindow.addClass('dialog'));
		
		positionDialog();
		
		// Tie handlers to close buttons
		dWindow.on('click', '.' + defaults.closeButtonClass, function()
		{
			if(defaults.onclose && typeof(defaults.onclose) === 'function')
			{
				defaults.onclose();
			}
			
			obj.close();
		});

		if (dWindow.draggable && defaults.drag.enabled === true)
		{
			dWindow.draggable(
			{
				handle: defaults.drag.handle
			});
		}
		
		if(isLocal) dWindow.addClass('dialog-local');

		if(defaults.onload && typeof(defaults.onload) === 'function')
		{
			defaults.onload(dWindow);
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
			success: function (data) {
				init(data, false);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				defaults.onerror(jqXHR, textStatus, errorThrown);
			}
		});
	}

	return this;
};

dialog.defaults = {
	url: null,
	width: null,
	height: null,
	method: 'GET',
	params: {},
	showLoader: false,
	showBackground: true,
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
	position: 'center',
	autoResize: true,
	onload: function (dWindow) { },
	onerror: function (jqXHR, textStatus, errorThrown) { },
	onclose: function (dWindow) { }
};