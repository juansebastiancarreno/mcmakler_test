<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // app_default_load
        if ('/Load' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loadAction',  '_route' => 'app_default_load',);
        }

        if (0 === strpos($pathinfo, '/neo')) {
            // Hazardous
            if ('/neo/hazardous' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showHazardous',  '_route' => 'Hazardous',);
            }

            // Fastest
            if ('/neo/fastest' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showFastest',  '_route' => 'Fastest',);
            }

            // Best Year
            if ('/neo/best-year' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showBestYear',  '_route' => 'Best Year',);
            }

            // Best Month
            if ('/neo/best-month' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showBestMonth',  '_route' => 'Best Month',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
