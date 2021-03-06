<?php

namespace Api\Transformers;

use ApiArchitect\Entities\Dog;
use Illuminate\Support\Collection;
use ApiArchitect\Abstracts\TransformerAbstract;

/**
 * Class DogTransformer
 *
 * @package Api\Transformers
 * @author James Kirkby <hello@jameskirkby.com>
 */
class DogTransformer extends TransformerAbstract
{

    /**
     * @param Dog $dog
     * @return array
     */
	public function transform(Dog $dog)
	{
		return [
			'id' 	=> (int) $dog->getId(),
			'name'  => $dog->getName(),
			'age'	=> (int) $dog->getAge()
		];
	}
}