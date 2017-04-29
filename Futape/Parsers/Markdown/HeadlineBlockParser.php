<?php
namespace Futape\Parsers\Markdown;

class HeadlineBlockParser extends AbstractBlockParser {
    /**
     * {@inheritDoc}
     *
     * @var string
     */
    protected $pattern = '#{1,6}';
    
    /**
     * {@inheritDoc}
     *
     * @var boolean
     */
    protected $isInlineParsingPrevented = false;
    
    /**
     * {@inheritDoc}
     *
     * @var boolean
     */
    protected $isContainer = false;
    
    
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
        $tagName = 'h' . mb_strlen($tag);
        
        return '<' . $tagName . '>' . $val . '</' . $tagName . '>';
    }
}
