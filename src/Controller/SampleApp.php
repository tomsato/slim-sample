<?php
namespace Myapp\Controller;

use Myapp\Model\SampleModel;
use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SampleApp
{
	public function index(Request $request, Response $response)
	{
		$model = new SampleModel();

		$request = array(
			'hoge' => $model->getStr()
		);
		$view = new Twig(__DIR__ . '/../View', array (
				'cache' => false,
			)
		);
		return $view->render($response, 'test.twig', $request);
	}
}

