<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\User;

class UserTransformer extends TransformerAbstract
{

  public function transform(User $user)
  {
      return [
          'username' => $user->username,
          'avatar' => $user->avatar(),
      ];
  }
}
