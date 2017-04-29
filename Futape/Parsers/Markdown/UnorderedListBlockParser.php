<?php
namespace Futape\Parsers\Markdown;

class UnorderedListBlockParser extends AbstractBlockParser {
    /**
     * {@inheritDoc}
     *
     * @var string
     */
    protected $pattern = '\*[\t ]';
    
    /**
     * {@inheritDoc}
     *
     * @var boolean
     */
    protected $isMultilineEnabled = true;
    
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
        $rendered = '<li>' . $val . '</li>';
        
        if ($line == 0) { // first line
            $rendered = '<ul>' . "\n" . $rendered;
        }
        if ($isLastLine) { // last line
            $rendered .= "\n" . '</ul>'
        }
        
        return $rendered;
    }
}
