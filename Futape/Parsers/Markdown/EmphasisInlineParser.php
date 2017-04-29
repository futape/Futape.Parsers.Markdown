<?php
namespace Futape\Parsers\Markdown;

class EmphasisInlineParser extends AbstractInlineParser {
    /**
     * {@inheritDoc}
     *
     * @var string
     */
    protected $pattern = '\*';
    
    /**
     * {@inheritDoc}
     *
     * @var string
     */
    protected $tagName = 'em';
}
