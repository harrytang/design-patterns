<?php


namespace DesignPatterns\AbstractFactory\Templates;


/**
 * Class PHPTemplateRenderer
 * @package DesignPatterns\AbstractFactory\Templates
 */
class PHPTemplateRenderer implements ITemplateRenderer
{
    /**
     * @param string $templateString
     * @param array $arguments
     * @return string
     */
    public function render(string $templateString, array $arguments = []): string
    {
        extract($arguments);

        ob_start();
        eval(' ?>' . $templateString . '<?php ');
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }
}