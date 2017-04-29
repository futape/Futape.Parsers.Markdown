<?php
namespace Futape\Parsers\Markdown;

interface BlockParserInterface {
    /**
     * @return string
     */
    public function getPattern();
    
    /**
     * @return boolean
     */
    public function isMultilineEnabled();
    
    /**
     * @return boolean
     */
    public function isInlineParsingPrevented();
    
    /**
     * @param string $value
     * @param string $tag
     * @param integer $line Always `0` if multiline isn't enabled
     * @param boolean $isLastLine Always `true` if multiline isn't enabled
     * @return string
     */
    public function render($val, $tag, $line, $isLastLine);
}
