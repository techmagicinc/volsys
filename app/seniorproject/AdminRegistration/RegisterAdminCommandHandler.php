<?php
/**
 * Created by PhpStorm.
 * User: seanboyle
 * Date: 4/6/15
 * Time: 7:36 PM
 */

namespace seniorproject\AdminRegistration;

use Laracasts\Commander\CommandHandler;
use seniorproject\Admin\AdminRepository;
use seniorproject\Admin\Admin;

class RegisterAdminCommandHandler implements CommandHandler
{

    protected $repository;

    function __construct(AdminRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $admin = Admin::registerAdmin(
			$command->email, $command->password
        );

        $this->repository->save($admin);

        return $admin;
    }
}