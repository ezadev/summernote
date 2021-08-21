<?php

namespace Ezadev\Summernote;

use Ezadev\Admin\Form\Field;

class Editor extends Field
{
    protected $view = 'ezadev-summernote::editor';

    protected static $css = [
        'vendor/ezadev/summernote/dist/summernote.css',
    ];

    protected static $js = [
        'vendor/ezadev/summernote/dist/summernote.min.js',
    ];

    public function render()
    {
        $name = $this->formatName($this->column);

        $config = (array) Summernote::config('config');

        $config = json_encode(array_merge([
            'height' => 300,
        ], $config));

        $this->script = <<<EOT

$('#{$this->id}').summernote($config);

$('#{$this->id}').on("summernote.change", function (e) {
    var html = $('#{$this->id}').summernote('code');
    $('input[name="{$name}"]').val(html);
});

EOT;
        return parent::render();
    }
}
