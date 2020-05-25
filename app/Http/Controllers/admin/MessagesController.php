<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
    	$messages = Message::latest()->paginate(15);
    	return view('admin.messages.index', compact('messages'));
    }

    public  function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect()->back()->with('status','Message has been Deleted');
    }
}
