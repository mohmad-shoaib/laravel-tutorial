<?php

namespace App\Repositories;

/*
* Tutorial Repository class
* This class perform Tutorial related tasks
*/

class TutorialRepository {

    /**
     * Returns dummy data.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTestData()
    {
        return "This is a test data returned from Tutorial Repository.";
    }

}
