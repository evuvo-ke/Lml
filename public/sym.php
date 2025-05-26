<?php // Define the source and target paths
$source = __DIR__ . '/storage/app/public';
$target = __DIR__ . '/public/storage'; // Check if the target already exists
if (!file_exists($target)) { // Create the symbolic link
symlink($source, $target);
echo "Symbolic link created successfully."; } else { echo "Symbolic link already exists.";
    
}