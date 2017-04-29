<?php
namespace Futape\Parsers\Markdown;

class StrongInlineParser extends AbstractInlineParser {
    /**
     * {@inheritDoc}
     *
     * @var string
     */
    protected $pattern = '\*{2}';
    
    /**
     * {@inheritDoc}
     *
     * @var string
     */
    protected $tagName = 'strong';
}
