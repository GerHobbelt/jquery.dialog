<h2>options api</h2>
<div>
    <pre class="prettyprint language-javascript">
Dialog.defaults = {
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
};</pre>
</div>