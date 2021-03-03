<?php

namespace Akkurate\LaravelDialog\Classes;

use GuzzleHttp\Client;

class Slack
{
    private $webhook;
    private $service;

    /**
     * @var
     */
    public $text;

    /**
     * @var
     */
    public $attachments = [];

    public function __construct($webhook)
    {

        $this->webhook = $webhook;

        $this->service = new Client([
            'base_uri' => $this->webhook,
            'timeout' => '20.0',
        ]);
    }

    public function text($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Set whether message text should be formatted with
     * Classes's Markdown-like language.
     *
     * @param $value
     * @return $this
     */
    public function setAllowMarkdown($value)
    {
        $this->allow_markdown = (boolean) $value;

        return $this;
    }

    /**
     * Enable Markdown formatting for the message.
     *
     * @return $this
     */
    public function enableMarkdown()
    {
        $this->setAllowMarkdown(true);
        return $this;
    }

    /**
     * Disable Markdown formatting for the message.
     *
     * @return $this
     */
    public function disableMarkdown()
    {
        $this->setAllowMarkdown(false);
        return $this;
    }

    public function attachment($attachment)
    {
        $this->attachments[] = $attachment;

        return $this;
    }

    public function send()
    {

        return $this->service->post($this->webhook, [
            'body' => $this->setBody()
        ]);
    }

    protected function setBody()
    {
        return (json_encode($this));
    }
}
