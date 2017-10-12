<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    use DatabaseTransactions;

    protected $user;
    protected $password = 'QC123456';

    // public function setUp()
    // {	
    // 	parent::setup();
       
    //     $this->user = factory(App\User::class)->create([
    //         'email' => 'frank82@example.org',
    //         'password' => hash("sha256",$this->password),
    //         'name'     => 'Joannie Kutch'
    //     ]);
    // }
/** @test */
    public function a_user_can_log_in()
    {
        $user = factory(App\User::class)->create([
             'email' => 'fran2@example.org',
            'password' => hash("sha256",$this->password),
           
        ]);

        $this->visit(route('login'))
            ->type($user->email, 'email')
            ->type('QC123456', 'password')
            ->press('Login')
            ->see('Successfully logged in')
            ->onPage('/dashboard');
    }
    /** @test */
    public function a_user_can_successfully_log_in()
    {
        
        $this->visit(route('login'));
        $this->type($this->user->email, 'email');
        $this->type($this->password, 'password');
        $this->press('Login');
        $this->seePageIs(route('dashboard'));
    }

    /** @test */
    public function a_user_receives_errors_for_wrong_login_credentials()
    {
        $this->visit(route('login'));
        $this->type($this->user->email, 'email');
        $this->type('invalid-password', 'password');
        $this->press('Login');
        $this->see('These credentials do not match our records.');
    }

    /** @test */
    public function a_user_is_redirected_to_dashboard_if_logged_in_and_tries_to_access_login_page()
    {
        

        $this->actingAs($this->user);

        $this->visit(route('login'));
        $this->seePageIs(route('dashboard'));
    }

    /** @test */
    public function a_user_is_redirected_to_login_page_if_not_logged_in_and_trying_to_access_dashboard()
    {
       
        $this->visit(route('dashboard'));
        $this->seePageIs(route('login'));
    }
}