<?php
/**
 * Build PDF documents from Markdown source using Pandoc and LaTeX.
 *
 * This build script requires PHP 5.3.0 or later on Windows, as it
 * uses the $longopts parameter to getopt().
 *
 * @see README.md for information about dependencies.
 */

$opts = 'his';
$longopts = array(
    'help',
    'instructor',
    'student',
);

$options = getopt($opts, $longopts);


if (array_key_exists('h', $options) or array_key_exists('help', $options)) {
    showUsage($argv);
    exit(0);
} elseif (count($options) === 0) {
    showUsage($argv);
    exit(1);
}


if (checkDependencies()) {
    $command = 'pandoc --toc -s -o "%s" -V graphics=true -B hackademy-logo.tex "%s"';

    if (array_key_exists('i', $options) or
            array_key_exists('instructor', $options)) {
        echo 'Building instructor PDF...';
        exec(sprintf($command, 'Introduction to PHP.pdf', 'Introduction to PHP.md'), $output, $retval);
        if ($retval === 0) {
            echo "success\n";
        } else {
            echo "failure:\n";
            echo "$output\n";
        }
    }
    if (array_key_exists('s', $options) or
            array_key_exists('student', $options)) {
        echo 'Building student PDF...';
        exec(sprintf($command, 'Introduction to PHP and MySQL (handout).pdf', 'Introduction to PHP and MySQL (handout).md'), $output, $retval);
        if ($retval === 0) {
            echo "success\n";
        } else {
            echo "failure\n";
        }
    }

} else {
    echo "Please install unmet dependencies (see above).\n";
    echo "The README.md file contains a complete list of dependencies.\n";
    exit(1);
}



function showUsage($argv=array('build.php'))
{
    echo <<<END

Program usage:

    php ${argv[0]} [-h|--help] [-i|--instructor] [-s|--student]

    -h
    --help

        Show this message and exit.

    -i
    --instructor
        Build the instructor PDF.

    -s
    --student
        Build the student handout PDF.

END;
}

function checkDependencies()
{
    $foundAll = true;
    $dependencies = array('pandoc', 'latex');
    foreach ($dependencies as $dep) {
        echo "Looking for $dep...";
        exec("which $dep", $output, $returnValue);
        if ($returnValue !== 0) {
            echo "not found\n";
            $foundAll = false;
        } else {
            echo "found\n";
        }
    }
    return $foundAll;
}
