<?php


class Template
{
    private $path;

    private $parameters = [];

    public function __construct(string $path)
    {
        $this->path = rtrim($path, '/').'/';
    }

    public function render(string $view, array $context) : string
    {

        if (!file_exists($file = $this->path.$view)) {
            throw new \Exception(sprintf('File not found!', $file));
        }
        
        ob_start();

        extract($context);
        
        include ($file);
        
        return ob_get_clean();
    }
}