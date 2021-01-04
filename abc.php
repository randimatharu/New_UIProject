
<script>
    function copyTextValue(bf) {
        var text1 = bf.checked ? document.getElementById("Name1").value : '';
        document.getElementById("Name2").value = text1;
    }
</script>

<input type="checkbox" name="check1" onchange="copyTextValue(this);" />
<input id="Name1"><input id="Name2">