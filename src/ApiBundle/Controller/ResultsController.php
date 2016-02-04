<?php

namespace ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use ApiBundle\Services\GoogleSearch;

class ResultsController extends FOSRestController
{

    /**
     * This is the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *   resource=true,
     *   description="This is a description of your API method.",
     *   https=true
     * )
     * @QueryParam(name="limit", requirements="\d+", default="10", description="Search query string.")
     * @QueryParam(name="search", requirements="[a-z0-9 ]+", nullable=false, description="Search query string.")
     * 
     * @param ParamFetcher $paramFetcher
     */
    public function getResultsAction(ParamFetcher $paramFetcher)
    {
        $query = $paramFetcher->get('search');
        $limit = $paramFetcher->get('limit');

        $request = new GoogleSearch($query, $limit);
        $response = $request->apiRequest();
        
        $view = $this->view($response);
        return $this->handleView($view);
    }

}
