<div class="nav-wrapper yellow-text blue darken-4">
    <a href="#" class="right brand-logo">Logo</a>
    <?php
        include '../php/functions/menu.php';
        writeMenu($_POST['choices']);
    ?>
</div>

<script type="text/javascript">
    <?php
        echo "$(document).ready(function () {\n";
        echo "$('.button-collapse').sideNav();\n";
        echo "});\n";
        foreach ($_POST['choices'] as $key => $value) {
            if (isset($value['targetDiv']) 
                    && !is_null($value['targetDiv'])) {
                echo "\n";
                echo '$("#' . $value['id'] . '").click(function() {';
                echo "\n";
                echo '$("#' . $value['targetDiv'] . '").load("' . $value['loadPage'] . '");';
                echo "\n";
                echo '});';
                echo "\n";
            } 
        }
    ?>
</script>