<?php
namespace Omeka\Form\View\Helper;

use Laminas\Form\View\Helper\AbstractHelper;
use Laminas\Form\ElementInterface;

class FormQuery extends AbstractHelper
{
    public function __invoke(ElementInterface $element)
    {
        return $this->render($element);
    }

    public function render(ElementInterface $element)
    {
        $view = $this->getView();
        $element->setAttribute('class', 'query-form-query');
        return $view->partial('common/query-form', ['element' => $element]);
    }
}
