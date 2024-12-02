<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employeeForm');
    }
    public function json()
    {
        return view('employeeJson');
    }
    public function store(Request $request)
    {
        $employee = [];
        $name = $request->input('username');
        $employee['name'] = $name;
        $last_name = $request->input('last_name');
        $employee['last_name'] = $last_name;
        $email = $request->input('email');
        $employee['email'] = $email;
        $position = $request->input('position');
        $employee['position'] = $position;
        $address = $request->input('address');
        $employee['address'] = $address;
        $workData = $request->input('workData');
        $employee['workData'] = $workData;
        return view('employee', $employee);
    }
    public function update(Request $request, $id)
    {
        $employee = [];
        $id = $id;
        $employee['id'] = $id;
        $name = $request->input('username');
        $employee['name'] = $name;
        $last_name = $request->input('last_name');
        $employee['last_name'] = $last_name;
        $email = $request->input('email');
        $employee['email'] = $email;
        $position = $request->input('position');
        $employee['position'] = $position;
        $address = $request->input('address');
        $employee['address'] = $address;
        $workData = $request->input('workData');
        $employee['workData'] = $workData;
        $url = $this->getUrl($request);
        $path = $this->getPath($request);
        $employee['url'] = $url;
        $employee['path'] = $path;

        return view('employee', $employee);
    }
    public function getPath(Request $request)
    {
        return $request->path();
    }
    public function getUrl(Request $request)
    {
        return $request->url();
    }

    public function getJson(Request $request)
    {
        //var_dump($request->json()->all());

        $content = $request->getContent();
        $json = json_decode($content);
        //  var_dump($content);
        $employee = [];
        $name = $request->input('username');
        $employee['name'] = $name;
        $last_name = $request->input('last_name');
        $employee['last_name'] = $last_name;
        $email = $request->input('email');
        $employee['email'] = $email;
        $position = $request->input('position');
        $employee['position'] = $position;
        $address = $request->input('address');
        $employee['address'] = $address;
        $workData = $request->input('workData');
        $employee['workData'] = $workData;

        return view('employee', $employee);
    }
}
