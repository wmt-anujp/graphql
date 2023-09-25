<?php

namespace App\Utils;

class AppConstant
{
    const TITLE_403 = '403 Access Denied';
    const TITLE_403_BODY = 'It\'s better to be slow and careful in the right direction than to be fast and careless on the wrong path. Be sure that you are on the right path before you begin to take your steps! ';
    const TITLE_404 = '404 Not Found';
    const TITLE_404_BODY = '404 ';
    const TITLE_500 = '500 Internal Server Error';
    const TITLE_500_BODY = '500 Body';

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    const FREE_SIGN_TIME = 24;
    const STATUS_FAIL = 'fail';
    const STATUS_OK = 'ok';

    const RENT_HOURS = 48;

    // API status codes
    const OK = 200;
    const CREATED = 201;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const UNPROCESSABLE_REQUEST = 422;
    const INTERNAL_SERVER_ERROR = 500;
    const TOKEN_INVALID = 503;

    const BASE_URL = 'http://localhost:8000';

    const OS_TYPE = ['android', 'ios'];
    const OS_ANDROID = "android";
    const OS_IOS = "ios";

    // Queue Type

    const DEFAULT_QUEUE = 'default';
    const TRIP_QUEUE = 'trip';
    const OTP_VALIDITY = 120;

    const DEFAULT_PAGINATE = 10;

    const USER_GUARD = 'users';
    const DRIVER_GUARD = 'drivers';

    // upload Disk
    const UPLOADIMAGEDISK = 'public';
    const UPLOADDOCDISK = 'private';
}
