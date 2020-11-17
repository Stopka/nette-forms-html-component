<?php

declare(strict_types=1);

namespace Stopka\NetteFormsHtmlComponent;

use Nette\ComponentModel\ArrayAccess;
use Nette\Utils\Html;

trait HtmlControlContainerTrait
{
    use ArrayAccess;

    /**
     * Adds check box control to the form.
     * @param string
     * @param string|object|null
     * @param Html|null $html
     * @return HtmlControl
     */
    public function addHtml(
        string $name,
        $caption = null,
        ?Html $html = null
    ): HtmlControl {
        return $this[$name] = new HtmlControl($caption, $html);
    }
}
