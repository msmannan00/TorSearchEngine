<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addwebsite_model;
use keys;
use Session;

class add_website extends Controller
{
    public function __invoke(Request $request)
    {
    }

    public function getView()
    {
        $addwebsite_model = new addwebsite_model;

        return view('addwebsite.add_website')
            ->with(keys::$url, $addwebsite_model->getURL())
            ->with(keys::$title, $addwebsite_model->getTitle())
            ->with(keys::$description, $addwebsite_model->getDescription())
            ->with(keys::$type, $addwebsite_model->getType())
            ->with(keys::$live_date, $addwebsite_model->getLiveData())
            ->with(keys::$update_date, $addwebsite_model->getUpdateData());
    }

}

