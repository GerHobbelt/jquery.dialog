<h2>options api</h2>
			<div>
			<pre class="prettyprint language-javascript">
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
};</pre>
			</div>