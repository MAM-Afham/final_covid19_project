<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\pcrData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{



    public function store()
    {
        $api_url='https://hpb.health.gov.lk/api/get-current-statistical';
       $response= Http::get($api_url);
       $data=json_decode($response->body());

       echo "<pre>";
    //    foreach($data as $post)
    //    {
        $data=(array)$data;
        // print_r($data);



        $data1=$data['data'];
        $data1=(array)$data1;
        // print_r($data1['update_date_time']);

        Data::updateOrcreate(
            [
                'update_date_time'=>$data1['update_date_time'],
                'local_new_cases'=>$data1['local_new_cases'],
                'local_total_cases'=>$data1['local_total_cases'],
                'local_total_number_of_individuals_in_hospitals'=>$data1['local_total_number_of_individuals_in_hospitals'],
                'local_deaths'=>$data1['local_deaths'],
                'local_new_deaths'=>$data1['local_new_deaths'],
                'local_recovered'=>$data1['local_recovered'],
                'local_active_cases'=>$data1['local_active_cases'],
                'global_new_cases'=>$data1['global_new_cases'],
                'global_total_cases'=>$data1['global_total_cases'],
                'global_deaths'=>$data1['global_deaths'],
                'global_new_deaths'=>$data1['global_new_deaths'],
                'global_recovered'=>$data1['global_recovered'],
                'total_pcr_testing_count'=>$data1['total_pcr_testing_count'],
            ]
            );



    //    }
    // dd('data stored');
       die;
    }

    public function pcrStore()
    {
        $api_url='https://hpb.health.gov.lk/api/get-current-statistical';
        $response= Http::get($api_url);
        $data=json_decode($response->body());

        echo "<pre>";
        $data=(array)$data;
        // print_r($data['success']);



        $data1=$data['data'];
        $data1=(array)$data1;

        $data2 =$data1['daily_pcr_testing_data'];
        $data2=(array)$data2;

        foreach($data2 as $post)
        {

            $post=(array)$post;
            // print_r($post);
            pcrData::updateOrcreate(

                [
             'date' =>$post['date'],
             'pcr_count' =>$post['pcr_count'],

            ]
            );


        }

    dd('data stored');


       die;



    }
    public function show()
    {
       $data=Data::all();
       $pcrData=pcrData::all();

    return view('welcome',compact('data','pcrData'));
    }

}
