<?php
    setcookie('user', $user['ful_name'], time() - 3600, "/"  );
    header('Location: /');
?>