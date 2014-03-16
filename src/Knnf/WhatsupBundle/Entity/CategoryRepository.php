<?php

namespace Knnf\WhatsupBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends EntityRepository
{
	public function fetchPairs(){
		$em = $this->getEntityManager();
		$categories = $em->getRepository('KnnfWhatsupBundle:Category')->findAll();

		foreach ($categories as $category) {
			$data[$category->getId()] = $category->getName();
		}

		return $data;
	}
}
