<?php

use Scool\Curriculum\Models\Course;
use Scool\Curriculum\Models\Department;
use Scool\Curriculum\Models\Module;
use Scool\Curriculum\Models\Study;
use Scool\Curriculum\Models\Submodule;

/**
 * Class CurriculumTest.
 */
class CurriculumTest extends TestCase
{
    const NUMBER_OF_DEPARTMENTS = 10;

    const NUMBER_OF_STUDIES = 26;

    const NUMBER_OF_COURSES = 43;

    const NUMBER_OF_MODULES = 307;

    const NUMBER_OF_SUBMODULES = 850;

    /**
     * See scool database have departments.
     * @test
     *
     */
    public function it_has_departments()
    {
        $departments = Department::all();
        $this->assertEquals($departments->count(),CurriculumTest::NUMBER_OF_DEPARTMENTS);
    }

    public function it_has_a_location_for_every_deparment() {

    }

    public function it_has_a_head_for_every_deparment() {

    }

    /**
     * See scool database have studies.
     *
     * @test
     *
     */
    public function it_has_studies()
    {
        $studies = Study::all();
        $this->assertEquals($studies->count(),CurriculumTest::NUMBER_OF_STUDIES);
    }

    public function it_has_at_least_one_study_for_every_deparment() {

    }

    public function it_has_at_least_one_department_for_every_study() {

    }

    /**
     * See scool database have courses.
     *
     * @test
     *
     */
    public function it_has_courses()
    {
        $course = Course::all();
        $this->assertEquals($course->count(),CurriculumTest::NUMBER_OF_COURSES);
    }

    /**
     * See scool database have modules.
     *
     * @test
     *
     */
    public function it_has_modules()
    {
        $module = Module::all();
        $this->assertEquals($module->count(),CurriculumTest::NUMBER_OF_MODULES);
    }

    /**
     * See scool database have submodules.
     *
     * @test
     *
     */
    public function it_has_submodules()
    {
        $submodule = Submodule::all();
        $this->assertEquals($submodule->count(),CurriculumTest::NUMBER_OF_SUBMODULES);
    }

    /**
     * See scool database have teachers.
     * @test
     *
     */
    public function it_has_teachers()
    {
//        $departments = Tea::all();
//        dd($departments->count());
//        $this->assertEquals($departments->count(),CurriculumTest::NUMBER_OF_DEPARTMENTS);
    }

    /**
     * See scool database have users.
     * @test
     *
     */
    public function it_has_users()
    {


    }


}