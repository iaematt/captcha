<?php

/** Namespace */
namespace iaematt\Captcha;

/**
 * Verify
 *
 * @author Matheus Bastos <https://iaematt.vercel.app>
 * @package iaematt\Captcha
 */
class Verify
{
    /** @var string $captcha */
    private $captcha;

    /** Verify constructor */
    public function __construct()
    {
        if (!session_id()) {
            session_start();
        }

        $this->captcha = $_SESSION['captcha_code'];
    }

    /**
     * Captcha compare
     * @param string $code
     * @return bool
     */
    public function compare(string $code): bool
    {
        if ($this->captcha == $code) {
            return true;
        }
        return false;
    }
}
