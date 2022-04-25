<?php

/** Namespace */
namespace iaematt\Captcha;

/**
 * Generate
 *
 * @author Matheus Bastos <https://iaematt.vercel.app>
 * @package iaematt\Captcha
 */
class Generate
{
    /** @var string $font_family */
    private $font_family;

    /** @var int $font_size */
    private $font_size;

    /** @var int $image_height */
    private $image_height;

    /** @var int $image_width */
    private $image_width;

    /** @var string $captcha */
    private $captcha;

    /** @var int $size */
    private $size;

    /**
     * Generate constructor
     * @param null|int $size
     * @param null|int $image_height
     * @param null|int $image_width
     * @param null|int $font_size
     */
    public function __construct(?int $size = 6, ?int $image_height = 50, ?int $image_width = 180)
    {
        if (!session_id()) {
            session_start();
        }

        $this->font_family = __DIR__ . '/../example/fonts/roboto.ttf';
        $this->font_size = 22;

        $this->image_height = $image_height;
        $this->image_width = $image_width;
        $this->size = $size;

        $this->captcha = substr(md5(rand()), 0, $size);

        $_SESSION['captcha_code'] = $this->captcha;
    }

    /**
     * Set font family
     * @param string $file
     * @return Generate
     */
    public function setFontFamily(string $font_file): Generate
    {
        if (file_exists($font_file)) {
            $this->font_family = $font_file;
        }
        return $this;
    }

    /**
     * Set font size
     * @param int $size
     * @return Generate
     */
    public function setFontSize(int $font_size): Generate
    {
        $this->font_size = $font_size;
        return $this;
    }

    /**
     * Render captcha
     * @return void
     */
    public function render(): void
    {
        $image = imagecreatetruecolor($this->image_width, $this->image_height);
        imagefill($image, 0, 0, imagecolorallocate($image, 255, 255, 255));

        $line_color = imagecolorallocate($image, 60, 60, 60);
        for ($i = 0; $i < $this->size; $i++) {
            imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);
        }

        $pixel_color = imagecolorallocate($image, 80, 80, 80);
        for ($i = 0; $i < 1000; $i++) {
            imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
        }

        $text_color = imagecolorallocate($image, 50, 50, 50);
        imagettftext($image, $this->font_size, 0, 25, 35, $text_color, $this->font_family, $this->captcha);

        header('Content-type: image/jpeg');
        imagejpeg($image);
    }
}
