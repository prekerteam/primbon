<?php
date_default_timezone_set('Asia/Jakarta');

// Pesan commit otomatis
$commitMessage = "update kode - " . date('Y-m-d H:i:s');

// CHANGE THIS: lokasi repo
// $repo = "/var/www/html/primbon";

// Langkah 1: git add
$cmd1 = "git add . 2>&1";
exec($cmd1, $out1, $ret1);

// Langkah 2: git commit
$cmd2 = "git commit -m \"$commitMessage\" 2>&1";
exec($cmd2, $out2, $ret2);

// Langkah 3: git push
$cmd3 = "git push origin main 2>&1";
exec($cmd3, $out3, $ret3);

// Tampilkan hasil
echo "=== GIT ADD ===\n";
echo implode("\n", $out1) . "\n\n";

echo "=== GIT COMMIT ===\n";
echo implode("\n", $out2) . "\n\n";

echo "=== GIT PUSH ===\n";
echo implode("\n", $out3) . "\n\n";
