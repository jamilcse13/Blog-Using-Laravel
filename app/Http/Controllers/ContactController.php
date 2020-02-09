<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Message;
use League\Fractal\Resource\Collection;

class ContactController extends Controller
{
    public function submit(ContactRequest $request){
    	$message= new Message();
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->subject = $request->input('subject');
    	$message->message = $request->input('message');
    	$message->save();

    	return redirect()->route('home')->with('success', 'Successfully Data Stored!');
    }

    public function getMessages(Request $request){
    	$messages = Message::all();

        if ($request->export) {
            $exporter = $this->getExportInstance('info');

            return $exporter
                ->setCollection($messages)
                ->download($exporter->getFileName());
        }

    	return view('messages', ['messages' => $messages]);
    }

    protected function getExportInstance(string $reportName)
    {
        return app()->make('App\Exports\Messages\Message' . studly_case($reportName) . 'Export');
    }

}