<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
    ->name('*.php')
    ->exclude('vendor')
    ->notPath('*/Migrations/*')
;

return (new PhpCsFixer\Config()) // Используем конструктор вместо create()
    ->setRules([
        '@PSR2' => true, // Правила PSR-2
        'array_syntax' => ['syntax' => 'short'], // Использовать короткий синтаксис массивов
        'no_unused_imports' => true, // Удалять неиспользуемые импорты
        'single_quote' => true, // Использовать одинарные кавычки вместо двойных
        'line_ending' => true, // Конец строки в соответствии с системой
        'lowercase_keywords' => true, // Использовать ключевые слова в нижнем регистре
        'no_trailing_whitespace' => true, // Удалить пробелы в конце строк
        'no_empty_comment' => true, // Удаление пустых комментариев
        'no_extra_blank_lines' => true, // Удаляет лишние пустые строки
        'no_blank_lines_after_phpdoc' => true, // Удаляет пустые строки после PHPDoc
        'blank_line_after_namespace' => true, // Добавляет пустую строку после namespace
        'blank_line_after_opening_tag' => true, // Пустая строка после открывающего PHP-тега
        'no_whitespace_in_blank_line' => true, // Убирает пробелы в пустых строках
        'standardize_not_equals' => true, // Использует !== вместо <>
        'phpdoc_align' => true, // Выровняет PHPDoc аннотации
        'phpdoc_summary' => false, // Удаляет обязательность наличия описания в PHPDoc
        'ordered_imports' => ['sort_algorithm' => 'alpha'], // Сортирует импорты по алфавиту
        'fully_qualified_strict_types' => true, // Добавляет полные пути к типам в строгом режиме
    ])
    ->setFinder($finder)
    ->setRiskyAllowed(true) // Включаем рискованные фиксы (по необходимости)
    ->setCacheFile(__DIR__ . '/var/php-cs.cache'); // Отключаем кеширование для лучшего контроля
