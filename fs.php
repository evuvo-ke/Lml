<?php
// Define the root directory of the subdomain
$rootDirectory = __DIR__; // This will automatically point to the directory where this script resides

// Define the desired permissions
$filePermissions = 0644;  // Permissions for files (rw-rw-r--)
$folderPermissions = 0775; // Permissions for directories (rwxrwxr-x)

// Function to recursively change permissions
function changePermissionsRecursively($path, $filePermissions, $folderPermissions) {
    // Check if the path is a directory
    if (is_dir($path)) {
        // Change permissions for the current directory
        chmod($path, $folderPermissions);

        // Open the directory and iterate through its contents
        if ($handle = opendir($path)) {
            while (false !== ($item = readdir($handle))) {
                // Skip "." and ".." entries
                if ($item != "." && $item != "..") {
                    $itemPath = $path . DIRECTORY_SEPARATOR . $item;

                    // If the item is a directory, recurse into it
                    if (is_dir($itemPath)) {
                        changePermissionsRecursively($itemPath, $filePermissions, $folderPermissions);
                    } else {
                        // If the item is a file, change its permissions
                        chmod($itemPath, $filePermissions);
                    }
                }
            }
            closedir($handle);
        }
    } else {
        // If the path is not a directory, throw an error
        die("The specified path is not a valid directory.");
    }
}

try {
    // Call the recursive function to change permissions
    changePermissionsRecursively($rootDirectory, $filePermissions, $folderPermissions);

    echo "Permissions have been successfully updated for all files and folders.";
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>