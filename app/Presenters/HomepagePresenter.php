<?php declare(strict_types = 1);

namespace App\Presenters;

use Exception;
use Nette\Application\UI\Presenter;

/**
 * Class HomepagePresenter
 * @package App\Presenters
 */
class HomepagePresenter extends Presenter
{
    /**
     * @throws Exception
     */
	public function renderDefault(): void
	{
        // throw new Exception("My first Sentry error!");
	}
}
