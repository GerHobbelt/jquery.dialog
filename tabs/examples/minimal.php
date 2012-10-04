<h2>minimal setup</h2>

<div class="well">
    <button class="btn btn-primary" id="open-dialog">Open the Dialog</button>
</div>

<h5>html</h5>
<pre class="prettyprint language-html">&ltbutton id="open"&gtOpen the Dialog&lt/button&gt</pre>
<h5>javascript</h5>
<pre class="prettyprint language-javascript">
$(function() {

    $('#open-dialog').click(function () {

        var dialogOptions = {
            url: 'ajax.html',
            closeButtonClass: 'close'
        };

        var dWindow = new Dialog(dialogOptions);

    });	
}</pre>