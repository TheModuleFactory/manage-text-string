<?php declare(strict_types=1);

/**
 * Managed by Composer
 */
require_once DIR_ROOT . '/vendor/autoload.php';

use Dotenv\Dotenv;

/**
 * Setup global environment constants
 */
$dotenv = Dotenv::createImmutable(DIR_ROOT . DIRECTORY_SEPARATOR . "env");
$dotenv->load();

/**
 * General formatting strings
 */
define("SEPARATOR_BAR", $_ENV['SEPARATOR_BAR']);

/**
 * Source and target directories to be processed
 */
define("DIR_SOURCE", DIR_ROOT . DIRECTORY_SEPARATOR . $_ENV['DIR_SOURCE']);
define("DIR_TARGET", DIR_ROOT . DIRECTORY_SEPARATOR . $_ENV['DIR_TARGET']);
define("DIR_TEMPLATES", DIR_ROOT . DIRECTORY_SEPARATOR . $_ENV['DIR_TEMPLATES']);
define("DIR_DEVELOPMENT", DIR_ROOT . DIRECTORY_SEPARATOR . $_ENV['DIR_DEVELOPMENT']);
define("DIR_UNIT_TEST", DIR_ROOT . DIRECTORY_SEPARATOR . "Scripts" . DIRECTORY_SEPARATOR . $_ENV['DIR_UNIT_TEST']);

/**
 * Comma separated list of files not to be processed which are kept from being added to the final .sql build file
 */
define("IGNORE_FILE_LIST", $_ENV['IGNORE_FILE_LIST']);
define("IGNORE_FILES_OF_TYPE", explode(",", $_ENV['IGNORE_FILE_LIST']));

/**
 * Filetype format of the final sql build file to be written to the target output directory.
 */
define("TARGET_FILETYPE", $_ENV['TARGET_FILETYPE']);

/**
 * Database (general settings)
 */
define("DATABASE_NAME", $_ENV['DATABASE_NAME']);

/**
 * NOTE:
 * 0 is FALSE and 1 is TRUE
 */
define("DATABASE_DROP_DB", $_ENV['DATABASE_DROP_DB']);
define("DATABASE_DROP_TABLE", $_ENV['DATABASE_DROP_TABLE']);
define("DATABASE_DROP_VIEW", $_ENV['DATABASE_DROP_VIEW']);

/**
 * Database build file header section notes
 */
define("DATABASE_BUILD_VERSION", $_ENV['DATABASE_BUILD_VERSION']);
define("DB_ENGINE_VERSION", $_ENV['DB_ENGINE_VERSION']);
define("APP_PHP_VERSION", $_ENV['APP_PHP_VERSION']);

/**
 * Create the target output directory if it doesn't already exist
 */
if (!file_exists(DIR_TARGET)) {
    mkdir(DIR_TARGET, 0777, true);
}