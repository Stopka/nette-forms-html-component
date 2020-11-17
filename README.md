# nette-forms-html-component
HtmlControl component for Nette forms.
Usefull for simple information block or javascript handled entry in the form.

Control value is automatically ommited from form values.

## Usage

```php
$form = new Form();
$form['html'] = new HtmlControl('Graph', Html::el('img', ['src' => '/graph.jpg']));
```

Optionaly add trait to your form:
```php
class MyForm extends Form{
    use HtmlControlContainerTrait;

}

$form = new MyForm();
$form->addHtml('html', 'Graph', Html::el('img', ['src' => '/graph.jpg']));
```
