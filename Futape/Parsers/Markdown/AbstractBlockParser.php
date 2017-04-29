<?php
namespace Futape\Parsers\Markdown;

abstract class AbstractBlockParser implements BlockParserInterface {
    /**
     * @var string
     */
    protected $pattern;
    
    /**
     * @var boolean
     */
    protected $isMultilineEnabled;
    
    /**
     * @var boolean
     */
    protected $isInlineParsingPrevented;
    
    
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
     * @return boolean
     */
    public function isMultilineEnabled() {
        return $this->isMultilineEnabled;
    }
    
    /**
     * {@inheritDoc}
     *
     * @return boolean
     */
    public function isInlineParsingPrevented() {
        return $this->isInlineParsingPrevented;
    }
    
    /**
     * {@inheritDoc}
     *
     * @param string $value
     * @param string $tag
     * @param integer $line Always `0` if multiline isn't enabled
     * @param boolean $isLastLine Always `true` if multiline isn't enabled
     * @return string
     */
    public function render($val, $tag, $line, $isLastLine) {
    }
}
