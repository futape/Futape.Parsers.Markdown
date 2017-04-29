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
    protected $isInlineParsingPrevented;
    
    /**
     * {@inheritDoc}
     *
     * @var boolean
     */
    protected $isContainer;
    
    
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
    public function isInlineParsingPrevented() {
        return $this->isInlineParsingPrevented;
    }
    
    /**
     * {@inheritDoc}
     *
     * @return boolean
     */
    public function isContainer() {
        return $this->isContainer;
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
