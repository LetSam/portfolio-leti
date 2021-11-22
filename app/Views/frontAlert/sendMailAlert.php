<?php if (isset($_SESSION["frontAlert"])): ?>
    <div >
        <div>
            <div>
                <div>
                    <?=$_SESSION["frontAlert"]['message'] ?>
                </div>
            </div>
        </div>
    </div>
    <?php unset($_SESSION["frontAlert"]); endif; ?>