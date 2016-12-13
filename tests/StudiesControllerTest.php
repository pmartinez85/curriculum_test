<?php
use Illuminate\Foundation\Testing\DatabaseMigrations;

use Illuminate\Support\Collection;
use Scool\Curriculum\Models\Study;
use Scool\Curriculum\Repositories\StudyRepository;


/**
 * Class StudiesControllerTest
 * @property  response
 */

class StudiesControllerTest extends TestCase
{

    use DatabaseMigrations;

    private $repository;


    /**
     * StudiesControllerTest constructor.
     */
    public function __construct()
    {
        $this->repository = Mockery::mock(StudyRepository::class);
        //dd("setUp");
        //$this->login();

    }

    public function tearDown()
    {

        Mockery::close();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    private function createDummyStudies()
    {
            $study1 = new Study();
            $study2 = new Study();
            $study3 = new Study();

        $studies = [
            $study1,
            $study2,
            $study3
        ];
        return collect($studies);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $studies1 = factory(Study::class,50)->make();
        $this->login();
        $this->repository->shouldReceive('all')->once()->andReturn(
            $this->createDummyStudies()
        );

        $this->repository->shouldReceive('pushCriteria')->once();

        $this->app->instance(StudyRepository::class, $this->repository);  //esta linia es la clau per controlar l'objecte -->ficar a wiki

        $this->get('studies');
        $this->assertResponseOk();
        $this->assertViewHas('studies');

        $studies = $this->response->getOriginalContent()->getdata()['studies'];
        //dd('studies');

        $this->assertInstanceOf(Illuminate\Support\Collection::class, $studies);
        $this->assertEquals(count($studies), 3);

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
        //$this->post('studies');
        $this->post('studies',[]);
        dd($this->response);
        //$this->assertRedirectedToRoute('studies.create');

    }

    public function login()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user);
    }
}
