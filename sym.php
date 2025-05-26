<?php // Define the source and target paths
$source = __DIR__ . '/storage/app/public';
$target = __DIR__ . '/public/storage'; //
if (!file_exists($target)) { 
symlink($source, $target);
echo "Symbolic link created successfully."; }
else { echo "Symbolic link already exists.";
    
}