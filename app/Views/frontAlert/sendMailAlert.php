<?php if (isset($_SESSION["alert"])): ?>
    <div class="alert" style="background-color: <?=$_SESSION["alert"]['color'] ?>">
        <div>
            <?=$_SESSION["alert"]['message'] ?>
        </div>
    </div>
    <?php unset($_SESSION["alert"]); endif; ?>

<script>
    $( document ).ready(function() {

        setInterval( () => {
            $(".alert").addClass('stop')
        }, 3000);
    });
</script>
