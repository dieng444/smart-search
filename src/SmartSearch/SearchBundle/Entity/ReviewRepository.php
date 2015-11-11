<?php

namespace SmartSearch\SearchBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ReviewRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReviewRepository extends EntityRepository
{
	public function getInJson($dateCrawl)
	{
		$qb = $this->createQueryBuilder('r');

		$qb
		->where('r.dateCrawl = :dateCrawl')
		->setParameter('dateCrawl', $dateCrawl)
		;

		$results = $qb->getQuery()->getResult();
		return json_encode($results);
	}
}
