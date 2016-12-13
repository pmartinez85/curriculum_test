<?php



/**
 * Class StudiesControllerTest
 * @property  response
 */

class StudiesControllerTest extends TestCase
{

    use Illuminate\Foundation\Testing\WithoutMiddleware;
    use Illuminate\Foundation\Testing\DatabaseMigrations;
    use Illuminate\Foundation\Testing\DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
//        $studies1 = factory(\Scool\Curriculum\Models\Study::class,50)->make();
        $this->login();
        $this->get('studies');
        $this->assertResponseOk();
        $this->assertViewHas('studies');

        //$studies = $this->response->getOriginalContent()->getdata()['studies'];

       // $this->assertInstanceOf(Illuminate\Database\Eloquent\Collection::class, $studies);

//        dd($studies);
        //dd($this->call('GET','studies'));  //val esta o la de baix amb el dump
        //$this->get('studies')->dump();
        //1) Preparacio
        //2) Execucio
        //3) Assertions
    }

    public function testIndexNotLogged()
    {
        $this->get('studies');
        $this->assertRedirectedTo('login');

    }

    public function testStore()
    {
        $this->login();
        $this->post('studies');
        //$this->post('studies')->dump('post');
        $this->assertRedirectedToRoute('studies.create');

    }

    public function login()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user);
    }
}
