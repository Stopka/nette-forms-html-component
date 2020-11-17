<?php

declare(strict_types=1);

namespace Stopka\NetteFormsHtmlComponent;

use Nette\Forms\Controls\BaseControl;
use Nette\Utils\Html;

class HtmlControl extends BaseControl
{
    /**
     * @param string|object|null $label
     * @param Html<mixed>|null $html
     */
    public function __construct($label = null, ?Html $html = null)
    {
        parent::__construct($label);
        if (null === $html) {
            $html = Html::el();
        }
        $this->setHtml(
            Html::el('div')->setHtml($html)
        );
        $this->setOmitted();
    }

    /**
     * @param Html<mixed> $html
     * @return $this
     */
    public function setHtml(Html $html): self
    {
        /** @var Html<mixed> $controlPrototype */
        $controlPrototype = $this->getControlPrototype();
        $controlPrototype->setName($html->getName());
        $controlPrototype->setHtml($html->getHtml());
        $controlPrototype->addAttributes(['class' => 'form-html-control']);

        return $this;
    }
}
