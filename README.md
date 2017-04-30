# Futape.Parsers / Markdown

Just a simple extendable [Markdown](https://daringfireball.net/projects/markdown/) parser.



## Table of contents

1.  [API](#api)
2.  [System requirements](#system-requirements)
3.  [Supported Markdown syntax](#supported-markdown-syntax)
4.  [Extending the parser](#extending-the-parser)
5.  [License](#license)
6.  [Support](#support)
7.  [Contributing](#contributing)
8.  [Author](#author)



## API

The parser class is available as `Futape\Parsers\Markdown\Parser`.

### Instance functions

#### __construct()

`void __construct()`

The constructor of a `Parser` object.

This function doesn't except any arguments and initializes the parser with the default block and inline parsers.

#### render()

`string render(string $markdown)`

Renders the given markdown source to HTML.

+   `$markdown`: The markdown source to render.

#### renderFile()

`string renderFile(string $path)`

Renders the contents of the given markdown file to HTML.

+   `$path`: The path of the markdown source file to render.

#### addBlockParser()

`void addBlockParser(BlockParserInterface $blockParser)`

Adds a block parser to the end of the list of block parsers to use.
If a block parser of that class has already been added the block parser is skipped.

+   `$blockParser`: The block parser object to add.

#### removeBlockParser()

`void removeBlockParser(BlockParserInterface $blockParser)`

Removes a block parser from the list of used block parsers.
If a block parser of that class doesn't exist in that list the block parser is skipped.

+   `$blockParser`: The block parser object to be removed.

#### setBlockParsers()

`void setBlockParsers(BlockParserInterface[] $blockParsers)`

Sets the list of used block parsers.

Use this function instead of `addBlockParser()` if you have to define the order in that the block parsers are checked while finding an appropiate block parser.

+   `$blockParsers`: The list of block parsers.

#### addInlineParser()

`void addInlineParser(InlineParserInterface $inlineParser)`

Adds an inline parser to the end of the list of inline parsers to use.
If an inline parser of that class has already been added the inline parser is skipped.

+   `$inlineParser`: The inline parser object to add.

#### removeInlineParser()

`void removeBlockParser(InlineParserInterface $inlineParser)`

Removes an  inline parser from the list of used inline parsers.
If an inline parser of that class doesn't exist in that list the inline parser is skipped.

+   `$inlineParser`: The inline parser object to be removed.

#### setInlineParsers()

`void setInlineParsers(InlineParserInterface[] $inlineParsers)`

Sets the list of used inline parsers.

Use this function instead of `addInlineParser()` if you have to define the order in that the inline parsers are checked while finding an appropiate inline parser.

+   `$inlineParsers`: The list of inline parsers.



## System requirements

The parser uses PHP OOP and anonymous functions and therefore requires PHP 5.3+.



## Supported Markdown syntax

Currently the parser doesn't support the full range of the [original Markdown specification](https://daringfireball.net/projects/markdown/syntax).

Supported block elements are unordered lists, headlines (level 1-6), paragraphs and quotes.
Supported inline elements are strong and emphasized text.

### Block elements

#### Unordered lists

Unordered lists are marked up by beginning lines with a `*` followed by a space or a tab.
Each line marks up in a single list item.
Nesting lists isn't supported yet.

Implemented in `UnorderedListBlockParser`.

#### Headlines

Parsers are available for 6 levels of headlines.
Headlines are marked up by beginning the line with a sequence of `#`s.
The number of `#` characters specifies the level of the headline. For example, `#` results in a `<h1>` while `####` results in a `<h4>`.

Implemented in `Headline<1-6>BlockParser`.

#### Paragraphs

Paragraphs are instroduced by preceding a block of text with an empty line consisting of whitespaces only, and are ended by another empty line or any other block element following the text block.
The text block is inlined, which means that no linebreaks exist in the rendered paragraph.

Implemented in `ParagraphBlockParser`.

#### Quotes

Quote blocks are marked up by beginning lines with a `>`.
Nesting quote blocks isn't supported yet.

Implemented in `QuoteBlockParser`.

### Inline elements

#### Strong text

Strong text is marked up by wrapping the text with `**`s.

Implemented in `StrongInlineParser`.

#### Emphasized text

Emphasized text is marked up by wrapping the text with `*`s.

Implemented in `EmphasisInlineParser`.



## Extending the parser

The parser can be easily extended by custom block and inline parsers.

To do so just create a new class implementing the `BlockParserInterface` or the `InlineParserInterface`, or by extending the `AbstractBlockParser` or the `AbstractInlineParser` respectively.
Finally add your custom parser instance to the markdown parser instance using the `addBlockParser()` or the `setBlockParsers()`, or the `addInlineParser()` or the `setInlineParsers()` respectively.

By default the list of loaded and used block parsers looks as follows:

1.  `Headline6BlockParser`
2.  `Headline5BlockParser`
3.  `Headline4BlockParser`
4.  `Headline3BlockParser`
5.  `Headline2BlockParser`
6.  `Headline1BlockParser`
7.  `UnorderedListBlockParser`
8.  `QuoteBlockParser`
9.  `ParagraphBlockParser`

The list of default inline parsers looks as follows:

1.  `StrongInlineParser`
2.  `EmphasisInlineParser`



## License

The source is published under the permissive [*New* BSD License](http://opensource.org/licenses/BSD-3-Clause).  
A copy of that license is inlcuded in the distribution.

Any other content is, if not otherwise stated, published under a [Creative Commons Attribution 4.0 International License](http://creativecommons.org/licenses/by/4.0/).  
<a href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" border="0" src="https://i.creativecommons.org/l/by/4.0/80x15.png" /></a>



## Support

<a href="https://flattr.com/submit/auto?user_id=lucaskrause&amp;url=http%3A%2F%2Fparsers-markdown.futape.de" target="_blank"><img src="http://button.flattr.com/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0"></a>



## Contributing

Contributing to this project is currently not available.



## Author

<table><tbody><tr><td>
    <img src="http://www.gravatar.com/avatar/118bcae2fda8b302155ad47a2bfda556.png?s=100&amp;d=monsterid" />
</td><td>
    Lucas Krause (<a href="https://twitter.com/futape">@futape</a>)
</td></tr></tbody></table>

For a full list of contributors, click [here](https://github.com/futape/parsers-markdown/graphs/contributors).
