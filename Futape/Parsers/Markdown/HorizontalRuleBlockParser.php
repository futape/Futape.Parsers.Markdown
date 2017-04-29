<?php
namespace Futape\Parsers\Markdown;

class HorizontalRuleBlockParser extends AbstractBlockParser {
    /**
     * {@inheritDoc}
     *
     * @var string
     */
    protected $pattern = '(?:=+|-+|\*+|_+)\s*$';
    
    /**
     * {@inheritDoc}
     *
     * @var boolean
     */
    protected $isMultilineEnabled = false;
    
    /**
     * {@inheritDoc}
     *
     * @var boolean
     */
    protected $isInlineParsingPrevented = false;
    
    
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
        return '<hr />';
    }
}
