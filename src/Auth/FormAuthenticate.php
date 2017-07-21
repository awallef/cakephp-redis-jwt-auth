<?php
namespace Awallef\RJA\Auth;

use Cake\Network\Exception\ForbiddenException;
use Cake\Http\Response;
use Cake\Http\ServerRequest;
use Cake\Auth\FormAuthenticate AS CakeFormAuthenticate;

class FormAuthenticate extends CakeFormAuthenticate
{
  public function unauthenticated(ServerRequest $request, Response $response)
  {
    throw new ForbiddenException('Ah ah ah! You didn\'t say the magic word!');
  }
}
