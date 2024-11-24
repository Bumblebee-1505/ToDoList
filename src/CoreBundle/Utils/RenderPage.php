<?php

namespace Src\CoreBundle\Utils;

class RenderPage
{
    public function renderPage($contentPaths, $variables = [], $includeHeaderFooter = true): void
    {
        if ($includeHeaderFooter) {
            $headerPath = __DIR__ . '/../../../public/html/base_pages/header.php';
            if (file_exists($headerPath)) {
                require_once($headerPath);
            }
        }

        // Отображаем контент по переданным путям
        foreach ((array)$contentPaths as $contentPath) {
            $fullPath = __DIR__ . "/../../../public/html/" . $contentPath;
            if (file_exists($fullPath)) {
                require_once($fullPath);
            } else {
                echo "Content file not found at '$fullPath'<br>";
            }
        }

        if ($includeHeaderFooter) {
            $footerPath = __DIR__ . '/../../../public/html/base_pages/footer.php';
            if (file_exists($footerPath)) {
                require_once($footerPath);
            }
        }
    }
}