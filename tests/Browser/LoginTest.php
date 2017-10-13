<!-- <?php

// namespace Tests\Browser;


// use App\User;
// use Illuminate\Foundation\Testing\DatabaseMigrations;
// use Laravel\Dusk\Browser;
// use Tests\Browser\Pages\Login;
// use Tests\DuskTestCase;

// class LoginTest extends DuskTestCase
// {
//     //use DatabaseTransactions;
//     //use DatabaseMigrations;
//     /**
//      * A Dusk test example.
//      *
//      * @return void
//      */
    
//     public function test_guest_can_see_form_login()
//     {
//         $this->browse(function (Browser $browser) {
//             $browser->visit('/login')
//                     ->assertSee('Đăng nhập');

//         });
//     }
     
     
    
//     public function test_password_is_wrong()
//     {   
        
//         $this->browse(function (Browser $browser)  {
//             $browser->visit('/login')
//                     ->type('email','linh.dt@teko.vn')
//                     ->type('password','QC123')
//                     ->press('Đăng nhập')
//                     ->assertSee('Email hoặc Mật khẩu không hợp lệ.');
//         });
//     }
    
//     public function test_user_cannot_login_with_invalid_credentials()
//     {   
//         $this->browse(function (Browser $browser)  {
//             $browser->visit('/login')
//                     ->type('email','cesar123@test.com')
//                     ->type('password','QC1236')
//                     ->press('Đăng nhập')
//                     ->assertSee('Email hoặc Mật khẩu không hợp lệ.');
//         });
//     }
//    public function test_email_is_required()
//    {
//         $this->browse(function (Browser $browser)  {
//             $browser->visit('/login')
//                     ->type('email','')
//                     ->type('password','QC1236')
//                     ->press('Đăng nhập')
//                     ->assertPathIs('/login');
//         });
//    }
//    public function test_password_is_required()
//    {
//         $this->browse(function (Browser $browser)  {
//             $browser->visit('/login')
//                     ->type('email','cesar123@test.com')
//                     ->type('password','')
//                     ->press('Đăng nhập')
//                     ->assertPathIs('/login');
//         });
//    }
//    public function test_email_password_is_require()
//    {
//         $this->browse(function (Browser $browser)  {
//             $browser->visit('/login')
//                     ->type('email','')
//                     ->type('password','')
//                     ->press('Đăng nhập')
//                     ->assertPathIs('/login');
//         });
//    }
//    // public function test_email_is_blank_first()
//    // {
//    //      $this->browse(function (Browser $browser)  {
//    //          $browser->visit('/login')
//    //                  ->type('email',' cesar123@test.com')
//    //                  ->type('password','QC1236')
//    //                  ->press('Đăng nhập')
//    //                  ->assertSee('Email hoặc Mật khẩu không hợp lệ.');
//    //      });
//    // }
//    // public function test_email_is_blank_end()
//    // {
//    //      $this->browse(function (Browser $browser)  {
//    //          $browser->visit('/login')
//    //                  ->type('email','cesar123@test.com ')
//    //                  ->type('password','QC1236')
//    //                  ->press('Đăng nhập')
//    //                  ->assertSee('Email hoặc Mật khẩu không hợp lệ.');
//    //      });
//    // }
//    public function test_format_email_is_wrong()
//    {
//         $this->browse(function (Browser $browser)  {
//             $browser->visit('/login')
//                     ->type('email','cesar123')
//                     ->type('password','QC1236')
//                     ->press('Đăng nhập')
//                     ->assertPathIs('/login');
//         });
//    }
//    public function test_user_can_login_with_valid_credentials()
//     {
//        $user = factory(User::class)->create([
//              'email' => 'nam.vh@teko.vn',
//             'password' => bcrypt('QC123456'),
           
//         ]);
//         $this->browse(function (Browser $browser)   {
//             $browser->visit('/login')
//                     ->type('email','nam.vh@teko.vn')
//                     ->type('password','QC123456')
//                     ->press('Đăng nhập')
//                     ->assertPathIs('/home');
                    
//         });
//     }
    
    
// }
 -->