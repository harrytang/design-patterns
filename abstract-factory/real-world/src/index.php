<?php


use DesignPatterns\AbstractFactory\Factories\ITemplateFactory;

require(__DIR__ . '/../vendor/autoload.php');

/**
 * Class Page
 */
class Page
{

    public $title;

    public $content;

    /**
     * Page constructor.
     * @param $title
     * @param $content
     */
    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    // Here's how would you use the template further in real life. Note that the
    // page class does not depend on any concrete template classes.
    /**
     * @param ITemplateFactory $factory
     * @return string
     */
    public function render(ITemplateFactory $factory): string
    {
        $pageTemplate = $factory->createPageTemplate();

        $renderer = $factory->getRenderer();

        return $renderer->render($pageTemplate->getTemplateString(), [
            'title' => $this->title,
            'content' => $this->content
        ]);
    }
}

$page = new Page('Sample page', 'This it the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new \DesignPatterns\AbstractFactory\Factories\PHPTemplateFactory);
echo "Testing actual rendering with the TwigTemplate factory:\n";
echo $page->render(new \DesignPatterns\AbstractFactory\Factories\TwigTemplateFactory);