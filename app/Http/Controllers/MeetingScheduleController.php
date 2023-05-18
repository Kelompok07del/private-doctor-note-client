<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingScheduleController extends Controller
{

    public function showAllMeetingSchedule() {
        $url = 'http://localhost:8002/api/meetings';
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        return view('meeting-schedule-dashboard', compact('data'));
    }

    public function showAddScheduleForm() {
        return view('add-meeting-schedule');
    }

    public function addScheduleProcess(Request $request) {
        // dd($request->request);
        $url = "http://localhost:8002/api/meetings";
        $data = [
            "schedule" => $request->input('jadwal'),
            "information" => $request->input('keterangan'),
        ];

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_exec($ch);
        curl_close($ch);
        return redirect('http://localhost:8000/meeting-schedule-dashboard');
    }

    public function deleteSchedule($id) {
        $url = "http://localhost:8002/api/meetings/$id";
        // dd($url);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);
        return redirect('http://localhost:8000/meeting-schedule-dashboard');
    }

    public function showUpdateSchedule($id) {
        $url = "http://localhost:8002/api/meetings/$id";

        $response = file_get_contents($url);
        $data = json_decode($response, true);

        //dd($data);

        return view("update-meetings-schedule", compact('data'));
    }

    public function updateScheduleProcess(Request $request, $id) {
        $url = "http://localhost:8002/api/meetings/$id";

        $data = [
            "schedule" => $request->input('jadwal'),
            "information" => $request->input('keterangan'),
        ];

        // dd($data);

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_exec($ch);

        curl_close($ch);

        return redirect('http://localhost:8000/meeting-schedule-dashboard');
    }

}
