<h2>events api</h2>
<p>
    You can subscribe to several events within dialog or hook into their callbacks.
</p>
<table class="table table-bordered table-rounded">
    <thead>
        <tr>
            <th>Event Name</th>
            <th>Dialog Callback Function</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>dialog.beforeload</td>
            <td><code>dialog.onbeforeload()</code></td>
            <td>Fires right before dialog content is loaded into DOM.</td>
        </tr>
        <tr>
            <td>dialog.load</td>
            <td><code>dialog.onload()</code></td>
            <td>Fires once the dialog is loaded in the DOM.</td>
        </tr>
        <tr>
            <td>dialog.close</td>
            <td><code>dialog.onclose()</code></td>
            <td>Fires when the dialog is closed for any reason.</td>
        </tr>
        <tr>
            <td>dialog.error</td>
            <td><code>dialog.onerror()</code></td>
            <td>Fired if ajax response returns 500 error.</td>
        </tr>
    </tbody>
</table>

<pre class="prettyprint language-javascript">
$(window).on('dialog.load', function (dialogWindow) {
    // some code here to run when the dialog window is loaded into the DOM
});
</pre>