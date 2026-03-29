<?php

namespace Framework\Render;

class Renderer
{
    private string $viewsPath;

    public function __construct(string $viewsPath)
    {
        $this->viewsPath = rtrim($viewsPath, '/\\');
    }

    public function render(string $view, array $data = []): string
    {
        $content = $this->loadView($view);
        $content = $this->processIncludes($content);
        return $this->evaluate($content, $data);
    }

    private function loadView(string $view): string
    {
        $path = $this->viewsPath . '/' . str_replace('.', '/', $view) . '.render.php';

        if (!file_exists($path)) {
            throw new \RuntimeException("View file not found: {$path}");
        }

        return file_get_contents($path);
    }

    private function processIncludes(string $content): string
    {
        return preg_replace_callback('/@include\(\s*["\'](.+?)["\']\s*\)/', function ($matches) {
            $included = $this->loadView($matches[1]);
            return $this->processIncludes($included);
        }, $content);
    }

    private function evaluate(string $content, array $data): string
    {
        extract($data, EXTR_SKIP);
        ob_start();
        try {
            eval('?>' . $content);
        } catch (\Exception $e) {
            ob_end_clean();
            throw $e;
        }

        return ob_get_clean();
    }
}
