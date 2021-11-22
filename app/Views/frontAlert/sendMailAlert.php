<?php if (isset($_SESSION["alert"])): ?>
    <div >
        <div>
            <div>
                <div>
                    <?=$_SESSION["alert"]['message'] ?>
                </div>
            </div>
        </div>
    </div>
    <?php unset($_SESSION["alert"]); endif; ?>