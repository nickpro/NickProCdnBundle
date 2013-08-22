<?php
namespace Nickpro\CdnBundle\Filemanager\Storage\Local;

use Nickpro\CdnBundle\Filemanager\Common\CdnInterface;
use Nickpro\CdnBundle\Filemanager\Storage\Local\Container;

/**
 * Cdn class
 * 
 * @author nikita prokurat <nickpro@tut.by>
 */
class Cdn implements CdnInterface
{     
    protected $config;
    
    /**
     * Constructor
     * 
     * @param array $config
     */
    public function __construct(array $config) 
    {
        $this->config = $config;
    }

    /**
     * Returns default or nedded container
     * 
     * @param string $name
     * @return Container
     */
    public function container($name = null) 
    {
        return new Container($name, $this->config);
    }
}