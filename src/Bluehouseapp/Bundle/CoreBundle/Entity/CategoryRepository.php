<?php

namespace Bluehouseapp\Bundle\CoreBundle\Entity;

use Bluehouseapp\Bundle\CoreBundle\Doctrine\ORM\EntityRepository;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends EntityRepository
{

    public function getAllEnableCategories()
    {

        return parent::findBy(array('enabled'=>true,'status'=>true),array('no'=>'desc'),null,null);
    }

}