<?php
session_start();
session_destroy();
?>
<script>
if (window.top !== window.self) {
    window.top.location.href = "http://localhost/project_ecomers/admin/index.php";
} else {
    window.location.href = "http://localhost/project_ecomers/admin/index.php";
}
</script>
