<?php

namespace Akkurate\LaravelDialog\Classes;

class Attachment
{
    public $color;
    public $text;
    public $fields;
    public $footer;

    protected static function getFacadeAccessor()
    {
        return 'attachment';
    }

    public function success()
    {
        $this->color = 'good';

        return $this;
    }

    public function warning()
    {
        $this->color = 'warning';

        return $this;
    }

    public function danger()
    {
        $this->color = 'danger';

        return $this;
    }

    public function setColor($hexa)
    {
        $this->color = $hexa;

        return $this;
    }

    public function text($text)
    {
        $this->text = $text;

        return $this;
    }

    public function field($field)
    {
        $this->fields[] = $field;

        return $this;
    }

    public function fallback($value)
    {
        $this->fallback = $value;

        return $this;
    }

    public function title($value)
    {
        $this->title = $value;

        return $this;
    }

    public function titleLink($value)
    {
        $this->title_link = $value;

        return $this;
    }

    public function authorName($value)
    {
        $this->author_name = $value;

        return $this;
    }

    public function authorLink($value)
    {
        $this->author_link = $value;

        return $this;
    }

    public function authorIcon($value)
    {
        $this->author_icon = $value;

        return $this;
    }

    public function pretext($value)
    {
        $this->pretext = $value;

        return $this;
    }

    public function footer($value)
    {
        $this->footer = $value;

        return $this;
    }

    public function footerIcon($value)
    {
        $this->footer_icon = $value;

        return $this;
    }

    public function ts($value)
    {
        $this->ts = $value;

        return $this;
    }

}
