<?php
use Collective\Html\HtmlFacade as Html;

if (!function_exists('loadFiles')) {
    /**
     * load file .css, .js ...
     *
     * @param $files
     * @param string $area
     * @param string $type
     * @return string
     */
    function loadFiles($files, string $area = '', string $type = 'css'): string
    {
        if (empty($files)) {
            return '';
        }

        $result = '';

        foreach ($files as $item) {
            $filePath = str('assets')->append('/' . $type . (!empty($area) ? '/' . $area : '') . '/' . $item . '.' . $type);
            $result .= $type == 'css'
                ? Html::style(asset($filePath))
                : Html::script(asset($filePath));
        }

        return $result;
    }
}
