<?php
// Pure passthrough -- Keitaro's "local_file" offer serving for this domain
// (action_options.folder == "qoooqle.com") reports local_path as
// "/index.php" the same way it does for every other local-file offer here,
// even though this domain's real entry point has always been google.php.
// Added this file only to give Keitaro something named index.php to find at
// the bare-root request; it changes nothing about the actual page logic,
// which still lives entirely in google.php.
require __DIR__ . '/google.php';
