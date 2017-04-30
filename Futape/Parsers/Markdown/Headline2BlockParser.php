<?php
namespace Futape\Parsers\Markdown;

class Headline2BlockParser extends AbstractHeadlineBlockParser {
    /**
     * {@inheritDoc}
     *
     * @var string
     */
    protected $pattern = '#{2}';
}
