<?php


namespace Klev\TelegramBotApi\Methods\TelegramPassport;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\TelegramPassport\PassportElementError;

/**
 * Informs a user that some of the Telegram Passport elements they provided contains errors. The user will not be able
 * to re-submit their Passport to you until the errors are fixed (the contents of the field for which you returned the
 * error must change). Returns True on success.
 *
 * Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason.
 * For example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering,
 * etc. Supply some details in the error message to make sure the user knows how to correct the issues.
 *
 * @link https://core.telegram.org/bots/api#setpassportdataerrors
 *
 * Class SetPassportDataErrors
 * @package Klev\TelegramBotApi\Methods\TelegramPassport
 */
class SetPassportDataErrors extends BaseMethod
{
    /**
     * User identifier
     * @var int
     */
    public int $user_id;
    /**
     * A JSON-serialized array describing the errors
     * @var PassportElementError[]
     */
    public $errors = '';

    public function __construct(int $user_id, array $errors)
    {
        $this->user_id = $user_id;
        $this->errors = $errors;
    }
}