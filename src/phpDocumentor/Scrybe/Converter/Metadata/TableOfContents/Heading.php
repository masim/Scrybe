<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.3
 *
 * @author    Mike van Riel <mike.vanriel@naenius.com>
 * @copyright 2012 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Scrybe\Converter\Metadata\TableOfContents;

/**
 * The Table of Contents File describes a headings and the Files and subentries
 * it may contain.
 *
 * An Heading may also contain files, those will serve as containers for more
 * headings or other files. This way it is possible to 'include' another
 * File as part of a hierarchy and have a integrated table of contents.
 *
 * @author Mike van Riel <mike.vanriel@naenius.com>
 */
class Heading extends BaseEntry
{
    /** @var string the slug used by the anchor */
    protected $slug;

    /**
     * Sets the anchor slug for this entry.
     *
     * @param string $slug
     *
     * @return void
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Retrieves the anchor slug for this entry.
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    public function getFilename()
    {
        return $this->getParent()->getFilename();
    }
}
