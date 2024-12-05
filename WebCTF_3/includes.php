<?php

session_start();
error_reporting(0);

// --- Flags ---
$flagPart1 = "cyb3rgr0und{th1s_1s";
$flagPart2 = "_4_p4rt";
$flagPart3 = "_0f_th3";
$flagPart4 = "_fl4g}";
$fullFlag = "cyb3rgr0und{" . $flagPart1 . $flagPart2 . $flagPart3 . $flagPart4 . "}";

header("X-Cyb3rGr0und-Flag-Part: " . $flagPart3);

?>