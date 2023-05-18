<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{

    public function showAllMedicines() {
        $url = 'http://localhost:8001/api/medicines';
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        // dd($data);
        return view('medicines-dashboard', compact('data'));
    }

    public function deleteMedicine($id) {
        $url = "http://localhost:8001/api/medicines/$id";
        // dd($url);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);
        return redirect('http://localhost:8000/medicines-dashboard');
    }

    public function showAddMedicine() {
        return view('add-medicine-form');
    }

    public function addMedicineProcess(Request $request) {
        $url = "http://localhost:8001/api/medicines";
        $data = [
            "code" => $request->input('kode'),
            "name" => $request->input('nama'),
            "information" => $request->input('informasi')
        ];

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_exec($ch);
        curl_close($ch);
        return redirect('http://localhost:8000/medicines-dashboard');
    }

    public function showUpdateMedicine($id) {
        $url = "http://localhost:8001/api/medicines/$id";

        $response = file_get_contents($url);
        $data = json_decode($response, true);

        //dd($data);

        return view("update-medicine-form", compact('data'));
    }

    public function updateMedicineProcess(Request $request, $id) {
        //dd($request, $id);
        $url = "http://localhost:8001/api/medicines/$id";

        $data = [
            "code" => $request->input('kode'),
            "name" => $request->input('nama'),
            "information" => $request->input('informasi')
        ];

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_exec($ch);

        curl_close($ch);

        return redirect('http://localhost:8000/medicines-dashboard');
    }

}
