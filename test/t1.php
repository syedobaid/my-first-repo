
<script type="text/javascript">
	document.getElementById("edit")

</script>

<input type="button" id="toggler" value="Toggler" onClick="action();" />
<input type="button" id="togglee" value="Togglee" />

<script>
    var hidden = false;
    function action() {
        hidden = !hidden;
        if(hidden) {
            document.getElementById('togglee').style.visibility = 'hidden';
        } else {
            document.getElementById('togglee').style.visibility = 'visible';
        }
    }
</script>