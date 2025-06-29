<?php
function change_permissions($file) {
    if (!is_file($file)) {
        return "This Is Directory And Only Files Allowed";
    }

    if (pathinfo($file, PATHINFO_EXTENSION) === "txt") {
        if (chmod($file, 0700)) {
            return "Permissions Changed";
        } else {
            return "Failed To Change Permissions";
        }
    } else {
        return "File Extension Is Not Txt";
    }
}

echo change_permissions("Elzero");
echo "<br>";
echo change_permissions("Work.docx");
echo "<br>";
echo change_permissions("Result.txt");
?>
