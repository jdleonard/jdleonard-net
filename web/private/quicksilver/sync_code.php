<?php
// Database updates.
echo "Running database updates.\n";
passthru('drush -y updb');
// Import all config changes.
echo "Importing configuration from yml files...\n";
passthru('drush -y config-import');
// Disable Maintenance Mode.
echo "Disabling maintenance mode...\n";
passthru('drush -y sset system.maintenance_mode 0');
