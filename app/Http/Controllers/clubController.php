<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class clubController extends Controller
{
    public function updateClub(Request $request, string $id)
    {

        $user = User::find($id);
        $authUser = $request->user();
        if ($authUser->id !== $user->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $userData = $request->all();

        unset($userData['_token']);

        
        $user->update($userData);
        return $user;
    }
    public function getClub(string $id, Request $request)
    {
        $user = User::find($id);
        return $user;
    }

    public function getAllClubs(Request $request)
    {
        $users = User::all();
        return $users;
    }



    public function addEvent(Request $request, $id)
    {  
        $user = User::findOrFail($id);
        $authUser = $request->user();
        if ($authUser->id !== $user->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }


        $event = new Event();
        $event->location = $request->input('location');
        $event->name = $request->input('name');
        $event->Image_links = json_encode($request->input('Image_links'));
        $event->date = Carbon::parse($request->input('date'))->toDateString();

        $user->events()->save($event);

        return response()->json(['message' => 'Event added successfully']);
    }

    public function getEvents($userId)
    {
        $user = User::findOrFail($userId);

        $events = $user->events;

        return response()->json($events);
    }

    public function getAllEvents(Request $request)
    {
        $events = Event::all();
        return $events;
    }
    public function addMember(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            $authUser = $request->user();
            if ($authUser->id !== $user->id) {
                return response()->json(['message' => 'Unauthorized'], 401);
            }
    
            $member = new Member();
            $member->fill($request->all());
            $user->members()->save($member);

            return response()->json(['message' => 'Member added successfully']);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th]);
        }
    }

    public function updateEvent(Request $request, $id){
        
        $event = Event::findOrFail($id);
        $user = $request->user();
        if ($event->user_id !== $user->id) {
            // return $user;
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $eventData = $request->all();
        
        $event->update($eventData);
        return $event;


    }


    public function getMembers($id)
    {
        $user = User::findOrFail($id);

        $members = $user->members;

        return response()->json($members);
    }

    public function getAllMembers(Request $request)
    {
        $member = Member::all();
        return $member;
    }


    public function changeMemberOrder(string $id, Request $request)
    {
        $member = Member::findOrFail($id);

        $user = $request->user();
        if ($member->user_id !== $user->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $memberData = $request->input('members');

        foreach ($memberData as $member) {
            $memberId = $member['id'];
            $order = $member['order'];


            $memberRecord = Member::where('user_id', $id)->findOrFail($memberId);


            $memberRecord->order = $order;
            $memberRecord->save();
        }

        return response()->json(['message' => 'Member orders updated successfully']);
    }

    public function deleteEvent($id, Request $request)
    {
        
        $event = Event::findOrFail($id);

        
        $user = $request->user();

        
        if ($event->user_id !== $user->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        
        $event->delete();

        
        return response()->json(['message' => 'Event deleted successfully']);
    }

    public function updateMember( Request $request, $id){
        $member = Member::findOrFail($id);
        $user = $request->user();
        if ($member->user_id !== $user->id) {
            // return $user;
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $memberData = $request->all();
        
        $member->update($memberData);
        return $member;

    }

}
