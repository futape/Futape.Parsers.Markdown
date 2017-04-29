<?php
namespace Futape\Parsers\Markdown;

class CodeBlockParser extends AbstractBlockParser {
    /**
     * {@inheritDoc}
     *
     * @var string
     */
    protected $pattern = '(?:\t| {4})';
    
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
    protected $isInlineParsingPrevented = true;
    
    
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
        $rendered = preg_replace('/^\t| {4}/', '', $val);
        
        if ($line == 0) { // first line
            $rendered = '<pre><code>' . $rendered;
        }
        if ($isLastLine) { // last line
            $rendered .= '</code></pre>'
        }
        
        return $rendered;
    }
}