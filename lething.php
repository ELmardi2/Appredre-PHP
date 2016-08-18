<?php
echo ("$_GET");
echo $_POST{'name'};


?>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <input name="text" type="username" />
            <input value="send" type="submit" />
        </form>
