<?php
namespace Futape\Parsers\Markdown;

class QuoteBlockParser extends AbstractBlockParser {
    /**
     * {@inheritDoc}
     *
     * @var string
     */
    protected $pattern = '>';
    
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
     * @param integer $line
     * @param boolean $isLastLine
     * @return string
     */
    public function render($val, $tag, $line, $isLastLine) {
        $rendered = $val;
        
        if ($line == 0) { // first line
            $rendered = '<blockquote>' . $rendered;
        }
        if ($isLastLine) { // last line
            $rendered .= '</blockquote>'
        }
        
        return $rendered;
    }
}
