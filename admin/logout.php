<?php
session_start();
session_unset();
session_destroy();

?>
<script type="text/javascript">
alert("You have been logout!! see you again!");
window.location.href = '../index.php';
</script>
<?php

 ?>
