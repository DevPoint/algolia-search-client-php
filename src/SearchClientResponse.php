<?php

namespace Devpoint\SearchClient\Algolia;

use Devpoint\SearchClient\Contracts\SearchClientResponse as SearchClientResponseContract;

class SearchClientResponse implements SearchClientResponseContract {

    /**
     * Constructor
     *
     * @param  array   $hits
     * @param  string  $limit
     * @param  string  $status
     */
    public function __construct($hits, $limit, $status)
    {
        // TODO: ..
    }

    /**
     * Get the take limit.
     *
     * @return int
     */
    public function limit()
    {
        // TODO: ..
    }
    
    /**
     * Get the status.
     *
     * @return string
     */
    public function status()
    {
        // TODO: ..
    }
    
    /**
     * Get the values count.
     *
     * @return int
     */
    public function count()
    {
        // TODO: ..
    }
    
    /**
     * Get the total count.
     *
     * @return int
     */
    public function totalCount()
    {
        // TODO: ..
    }
    
    /**
     * Get the maximal score.
     *
     * @return float
     */
    public function maxScore()
    {
        // TODO: ..
    }

    /**
     * Retrieve values together with meta information.
     * 
     * @return array
     */
    public function valuesWithMeta()
    {
        // TODO: ..
    }
    
    /**
     * Retrieve values.
     * 
     * @return array
     */
    public function values()
    {
        // TODO: ..
    }

    /**
     * Retrieve values ids.
     *
     * @return array
     */
    public function ids()
    {
        // TODO: ..
    }
}