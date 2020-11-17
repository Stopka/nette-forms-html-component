<?php

declare(strict_types=1);

namespace Stopka\NetteFormsHtmlComponent\Tests;

// phpcs:ignore
require __DIR__ . '/../vendor/autoload.php';

use Nette\Forms\Form;
use Nette\Utils\Html;
use Stopka\NetteFormsHtmlComponent\HtmlControl;
use Stopka\NetteFormsHtmlComponent\HtmlControlContainerTrait;
use Tester\Assert;
use Tester\Environment;

const NAME = 'html';
const CAPTION = 'Caption';


Environment::setup();

$container = new class () extends Form {
    // phpcs:ignore
    use HtmlControlContainerTrait;
};

$control = $container->addHtml(
    NAME,
    CAPTION,
    Html::el('div', ['class' => 'class'])->setText('Text')
);

Assert::same($container[NAME], $control);
Assert::same(
    '<label for="frm-html">Caption</label>',
    (string)$control->getLabelPart()
);
Assert::same(
    '<div name="html" class="form-html-control" id="frm-html"><div class="class">Text</div></div>',
    (string)$control->getControlPart()
);
