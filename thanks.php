<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php include('/var/www/creative/current/libs/thanks/thanks_content.php'); ?>

<!-- DrCash -->
<script type="text/javascript">
function urlGET(name) {
    if (name = (new RegExp('[?&]' + encodeURIComponent(name) + '=([^&]*)')).exec(location.search));
    return (name === null) ? '' : decodeURIComponent(name[1]);
}
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('phone').innerHTML = urlGET('phone');
    document.getElementById('cid').innerHTML = urlGET('cid');
}, false);
</script>
<!-- /DrCash -->

<!-- Ya/Google/Mail counters and pixels, or other -->
<?php include('counters.php'); ?>

</body>
</html>
