<?php
$outputPath = "C:\\xampp\\htdocs\\img2Txt\\output";
$base64_string = "data:image/gif;base64,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";
file_put_contents('input.png', file_get_contents($base64_string));
shell_exec('"C:\\Program Files (x86)\\Tesseract-OCR\\tesseract.exe " "C:\\xampp\\htdocs\\img2Txt\\input.png" '.$outputPath);
$result = file_get_contents($outputPath.".txt");
preg_match_all('/\d+/', $result, $matches);
echo($matches[0][0]);
?>