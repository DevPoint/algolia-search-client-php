<?php

namespace Devpoint\SearchClient\Algolia;

use AlgoliaSearch\Client as Algolia;
use Devpoint\SearchClient\Contracts\SearchClientBuilder as SearchClientBuilderContract;

class SearchClientBuilder implements SearchClientBuilderContract {

    /**
     * Perform the given search on the engine.
     *
     * @param  array  $options
     * @return mixed
     */
    protected function performSearch(array $options = [])
    {
        // TODO: ..
    }

    /**
     * Add search filter for a field.
     *
     * @param  string  key
     * @param  mixed   value
     * @return self
     */
    public function filterExp($key, $value)
    {
        // TODO: ..
    }
    
    /**
     * Override the default index.
     *
     * @param  string  $index
     * @return self
     */
    public function index($index)
    {
        // TODO: ..
    }
    
    /**
     * Perform paginated search.
     *
     * @param  int    $page
     * @param  int    $pageSize
     * @return SearchClientResponse
     */
    public function paginate($page, $pageSize)
    {
        // TODO: ..
    }

    /**
     * Perform search.
     *
     * @return SearchClientResponse
     */
    public function get()
    {
        // TODO: ..
    }
}
