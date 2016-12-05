<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\TutorialRepository;

use App\Events\DbInsertEvent;

use App\Jobs\SendReminderEmail;

class TutorialController extends Controller
{

    protected $tutorialRepository;


    public function __construct(TutorialRepository $tutorialRepository)
    {
        $this->tutorialRepository = $tutorialRepository;
    }


    public function index()
    {
        return view('welcome', [
            'pageData' => 'This is a Homepage.'
        ]);
    }


    public function repositoryAccessFunction()
    {
        return view('repository', [
            'pageData' => $this->tutorialRepository->getTestData()
        ]);
    }


    public function fireEvent()
    {
        \Event::fire(new DbInsertEvent(2));
        return view('event', [
            'pageData' => 'Event has been fired. A new row has been inserted in the Users table.'
        ]);
    }

    public function insertQueueJobs()
    {
        \Log::info("Request Cycle with Queues Begins");
        $this->dispatch(new SendReminderEmail());
        \Log::info("Request Cycle with Queues Ends");
        return view('queue', [
            'pageData' => 'Job has been schedules. Emails scheduled.'
        ]);
    }


}
