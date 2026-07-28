<?php
$score = 85;

if ($score >= 90) {
    echo " 評価はAです。";
} elseif ($score >= 80) {
    echo " 評価はBです。";
} elseif ($score >= 60) {
    echo " 評価はCです。";
} else {
    echo " 評価はDです　(不合格）。";
    
}