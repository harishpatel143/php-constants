<?php
/**
 * Defines useful time-based constants.
 */

/**
 * Color constants.
 *
 * This is commonly used for things like cache expirations or task scheduling.
 */
if (!defined('VIOLET')) {
    define('VIOLET', '#9400D3');
}
if (!defined('INDIGO')) {
    define('INDIGO', '#4B0082');
}
if (!defined('BLUE')) {
    define('BLUE', '#0000FF');
}
if (!defined('GREEN')) {
    define('GREEN', '#00FF00');
}
if (!defined('YELLOW')) {
    define('YELLOW', '#FFFF00');
}
if (!defined('ORANGE')) {
    define('ORANGE', '#FF7F00');
}
if (!defined('RED')) {
    define('RED', '#FF0000');
}
/*
 * Time based in seconds.
 *
 * This is commonly used for things like cache expirations or task scheduling.
 *
 */

/* 1 minute = 60 seconds. */
if (!defined('MINUTE_IN_SECONDS')) {
    define('MINUTE_IN_SECONDS', 60);
}
/* 1 hour = 60 minutes. */
if (!defined('HOUR_IN_SECONDS')) {
    define('HOUR_IN_SECONDS', 60 * MINUTE_IN_SECONDS);
}
/* 1 day = 24 hours. */
if (!defined('DAY_IN_SECONDS')) {
    define('DAY_IN_SECONDS', 24 * HOUR_IN_SECONDS);
}
/* 1 week = 7 days. */
if (!defined('WEEK_IN_SECONDS')) {
    define('WEEK_IN_SECONDS', 7 * DAY_IN_SECONDS);
}
/* 1 month = 30 days. */
if (!defined('MONTH_IN_SECONDS')) {
    define('MONTH_IN_SECONDS', 30 * DAY_IN_SECONDS);
}
/* 1 year = 365 days. */
if (!defined('YEAR_IN_SECONDS')) {
    define('YEAR_IN_SECONDS', 365 * DAY_IN_SECONDS);
}

/*
 * Time based in minutes.
 *
 */

/* 1 hour = 60 minutes. */
if (!defined('HOUR_IN_MINUTES')) {
    define('HOUR_IN_MINUTES', 60);
}
/* 1 day = 24 hours. */
if (!defined('DAY_IN_MINUTES')) {
    define('DAY_IN_MINUTES', 24 * HOUR_IN_MINUTES);
}
/* 1 week = 7 days. */
if (!defined('WEEK_IN_MINUTES')) {
    define('WEEK_IN_MINUTES', 7 * DAY_IN_MINUTES);
}
/* 1 common usage, assume one month = 30 days. */
if (!defined('MONTH_IN_MINUTES')) {
    define('MONTH_IN_MINUTES', 30 * DAY_IN_MINUTES);
}
/* 1 common usage, assume one year = 365 days. */
if (!defined('YEAR_IN_MINUTES')) {
    define('YEAR_IN_MINUTES', 365 * DAY_IN_MINUTES);
}

/*
 * Time base on Hour
 *
 */
/*
 * Hours in a day
 */
if (!defined('DAY_IN_HOUR')) {
    define('DAY_IN_HOUR', 24);
}
/*
 * Hours in a year
 */
if (!defined('YEAR_IN_HOUR')) {
    define('YEAR_IN_HOUR', 365 * DAY_IN_HOUR);
}
