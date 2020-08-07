<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\HotelsRequest;
use App\Http\Resources\HotelsResource;
use Symfony\Component\HttpFoundation\Response;
use App\Traits\GeneralTrait;

class HotelsController extends Controller
{

    use GeneralTrait;
    
    public function index(HotelsRequest $request)
    {
            
        if($request) {

            $data = [

            	"BestHotels" => [

            		[
            			"hotelName" => "Hotel 1",
            			"price" => "65 USD",
            			"roomroomAmenities:" => [
            				"Personal care", "Coffee Kit", "Bathrobes and slippers", "Free breakfast"
            			],

            		],

            		[
            			"hotelName" => "Hotel 2",
            			"hotelFare" => "68 USD",
            			"roomAmenities" => [
            				"Personal care", "Coffee Kit", "Bathrobes and slippers", "Free breakfast"
            			],

            		],

            	],
            	"TopHotels" => [

            		[
            			"hotelName" => "Hotel 3",
            			"hotelFare" => "70 USD",
            			"roomAmenities" => [
            				"Personal care", "Coffee Kit", "Bathrobes and slippers", "Free breakfast"
            			],

            		],

            		[
            			"hotelName" => "Hotel 4",
            			"hotelFare" => "72 USD",
            			"roomAmenities" => [
            				"Personal care", "Coffee Kit", "Bathrobes and slippers", "Free breakfast"
            			],

            		],
            	]

            ];

            return (new HotelsResource($data))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
        }


        
    }

    public function providers(HotelsRequest $request)
    {
    	
        	if ($request->provider_name === "BestHotelAPI") {
        		
        		$data = [

        			[
            			"hotelName" => "Hotel 1",
            			"hotelRate" => 4.5,
            			"hotelFare" => 72.56,
            			"roomAmenities" => "Personal care, Coffee Kit, Bathrobes and slippers, Free breakfast"

            		],

            		[
            			"hotelName" => "Hotel 2",
            			"hotelRate" => 4.9,
            			"hotelFare" => 78.56,
            			"roomAmenities" => "Personal care, Coffee Kit, Bathrobes and slippers, Free breakfast"

            		],

            	];

            	return $this->getData($data, true, 200, 'Success Get All Hotels');

        	} else if ($request->provider_name === "TopHotelsAPI") {
        		
        		$data = [

        			[
            			"hotelName" => "Hotel 1",
            			"hotelRate" => 4.9,
            			"price" => 72.56,
            			"discount" => "10%",
            			"roomAmenities" => ["Good Service", "Customer Service ", "Free CheckIn", " CheckOut"]

            		],

            		[
            			"hotelName" => "Hotel 2",
            			"hotelRate" => 2.9,
            			"price" => 78.56,
            			"discount" => "10%",
            			"roomAmenities" => ["Good Service", "Customer Service ", "Free CheckIn", " CheckOut"]

            		],

            	];

					return (new HotelsResource($data))
					->response()
					->setStatusCode(Response::HTTP_OK);
				
        	} else {

        		return $this->getData(null, false, 404, "Sorry No Provider Name");

        	}

      
    }
}
