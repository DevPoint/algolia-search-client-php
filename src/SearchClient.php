<?php

namespace Devpoint\SearchClient\Algolia;

use Algolia\Client as Elastic;
use Devpoint\SearchClient\Contracts\SearchClient as SearchClientContract;
use Devpoint\SearchClient\Contracts\SearchClientBuilder as SearchClientBuilderContract;

class SearchClient implements SearchClientContract {
    
    /**
     * @param  string  $index
     * @param  string  $q
     * @return SearchBuilderContract
     */
    public function query($index, $q)
    {
        // TODO: ..
    }
}
