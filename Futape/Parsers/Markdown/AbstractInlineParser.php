<?php
namespace Futape\Parsers\Markdown;

abstract class AbstractInlineParser implements InlineParserInterface {
    /**
     * @var string
     */
    protected $pattern;
    
    /**
     * @var string
     */
    protected $tagName;
    
    
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getPattern() {
        return $this->pattern;
    }
    
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getTagName() {
        return $this->tagName;
    }
}
