<?php
/**
 * Created by PhpStorm.
 * User: seanboyle
 * Date: 3/6/15
 * Time: 12:56 PM
 */

namespace seniorproject\Registration;

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use seniorproject\Users\UserRepository;
use seniorproject\Users\User;

class RegisterUserCommandHandler implements CommandHandler {

    use DispatchableTrait;

    protected $repository;

    function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle($command)
    {
        $user = User::register(
            $command->firstName, $command->lastName, $command->email, $command->category
        );

        $this->repository->save($user);

        $this->dispatchEventsFor($user);

        return $user;
    }
}